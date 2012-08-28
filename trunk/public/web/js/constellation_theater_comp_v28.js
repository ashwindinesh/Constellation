/*
 * jQuery Cycle Lite Plugin
 * http://malsup.com/jquery/cycle/lite/
 * Copyright (c) 2008 M. Alsup
 * Version: 1.0 (06/08/2008)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * Requires: jQuery v1.2.3 or later
 */
(function(b){var a="Lite-1.0";b.fn.cycle=function(e){return this.each(function(){e=e||{};if(this.cycleTimeout){clearTimeout(this.cycleTimeout)}this.cycleTimeout=0;this.cyclePause=0;var i=b(this);var h=e.slideExpr?b(e.slideExpr,this):i.children();var k=h.get();if(k.length<2){if(window.console&&window.console.log){window.console.log("terminating; too few slides: "+k.length)}return}var j=b.extend({},b.fn.cycle.defaults,e||{},b.metadata?i.metadata():b.meta?i.data():{});j.before=j.before?[j.before]:[];j.after=j.after?[j.after]:[];j.after.unshift(function(){j.busy=0});var l=this.className;j.width=parseInt((l.match(/w:(\d+)/)||[])[1])||j.width;j.height=parseInt((l.match(/h:(\d+)/)||[])[1])||j.height;j.timeout=parseInt((l.match(/t:(\d+)/)||[])[1])||j.timeout;if(i.css("position")=="static"){i.css("position","relative")}if(j.width){i.width(j.width)}if(j.height&&j.height!="auto"){i.height(j.height)}var g=0;h.css({position:"absolute",top:0,left:0}).hide().each(function(m){b(this).css("z-index",k.length-m)});b(k[g]).css("opacity",1).show();if(b.browser.msie){k[g].style.removeAttribute("filter")}if(j.fit&&j.width){h.width(j.width)}if(j.fit&&j.height&&j.height!="auto"){h.height(j.height)}if(j.pause){i.hover(function(){this.cyclePause=1},function(){this.cyclePause=0})}b.fn.cycle.transitions.fade(i,h,j);h.each(function(){var m=b(this);this.cycleH=(j.fit&&j.height)?j.height:m.height();this.cycleW=(j.fit&&j.width)?j.width:m.width()});h.not(":eq("+g+")").css({opacity:0});if(j.cssFirst){b(h[g]).css(j.cssFirst)}if(j.timeout){if(j.speed.constructor==String){j.speed={slow:600,fast:200}[j.speed]||400}if(!j.sync){j.speed=j.speed/2}while((j.timeout-j.speed)<250){j.timeout+=j.speed}}j.speedIn=j.speed;j.speedOut=j.speed;j.slideCount=k.length;j.currSlide=g;j.nextSlide=1;var f=h[g];if(j.before.length){j.before[0].apply(f,[f,f,j,true])}if(j.after.length>1){j.after[1].apply(f,[f,f,j,true])}if(j.click&&!j.next){j.next=j.click}if(j.next){b(j.next).bind("click",function(){return c(k,j,j.rev?-1:1)})}if(j.prev){b(j.prev).bind("click",function(){return c(k,j,j.rev?1:-1)})}if(j.timeout){this.cycleTimeout=setTimeout(function(){d(k,j,0,!j.rev)},j.timeout+(j.delay||0))}})};function d(h,m,i,g){if(m.busy){return}var j=h[0].parentNode,e=h[m.currSlide],f=h[m.nextSlide];if(j.cycleTimeout===0&&!i){return}if(i||!j.cyclePause){if(m.before.length){b.each(m.before,function(o,n){n.apply(f,[e,f,m,g])})}var l=function(){if(b.browser.msie){this.style.removeAttribute("filter")}b.each(m.after,function(o,n){n.apply(f,[e,f,m,g])})};if(m.nextSlide!=m.currSlide){m.busy=1;b.fn.cycle.custom(e,f,m,l)}var k=(m.nextSlide+1)==h.length;m.nextSlide=k?0:m.nextSlide+1;m.currSlide=k?h.length-1:m.nextSlide-1}if(m.timeout){j.cycleTimeout=setTimeout(function(){d(h,m,0,!m.rev)},m.timeout)}}function c(i,h,e){var f=i[0].parentNode,g=f.cycleTimeout;if(g){clearTimeout(g);f.cycleTimeout=0}h.nextSlide=h.currSlide+e;if(h.nextSlide<0){h.nextSlide=i.length-1}else{if(h.nextSlide>=i.length){h.nextSlide=0}}d(i,h,1,e>=0);return false}b.fn.cycle.custom=function(e,h,g,k){var f=b(e),i=b(h);i.css({opacity:0});var j=function(){i.animate({opacity:1},g.speedIn,g.easeIn,k)};f.animate({opacity:0},g.speedOut,g.easeOut,function(){f.css({display:"none"});if(!g.sync){j()}});if(g.sync){j()}};b.fn.cycle.transitions={fade:function(f,e,g){e.not(":eq(0)").css("opacity",0);g.before.push(function(){b(this).show()})}};b.fn.cycle.ver=function(){return a};b.fn.cycle.defaults={timeout:4000,speed:1000,next:null,prev:null,before:null,after:null,height:"auto",sync:1,fit:0,pause:0,delay:0,slideExpr:null}})(jQuery);(function(a){a.extend({head:function(b,d,e,c){if(a.isFunction(d)){e=d;d={}}if(c==undefined){c=2000}return a.ajax({type:"HEAD",url:b,data:d,timeout:c,complete:function(i,k){var j=i.getAllResponseHeaders().split("\n");var f={};var g=j.length;for(var h=0;h<g;h++){if(j[h].length!=0){header=j[h].split(": ");f[header[0]]=header[1]}}if(a.isFunction(e)){e(f)}}})}})})(jQuery);(function($){$.fn.editable=function(target,options){if("disable"==target){$(this).data("disabled.editable",true);return}if("enable"==target){$(this).data("disabled.editable",false);return}if("destroy"==target){$(this).unbind($(this).data("event.editable")).removeData("disabled.editable").removeData("event.editable");return}var settings=$.extend({},$.fn.editable.defaults,{target:target},options);var plugin=$.editable.types[settings.type].plugin||function(){};var submit=$.editable.types[settings.type].submit||function(){};var buttons=$.editable.types[settings.type].buttons||$.editable.types.defaults.buttons;var content=$.editable.types[settings.type].content||$.editable.types.defaults.content;var element=$.editable.types[settings.type].element||$.editable.types.defaults.element;var reset=$.editable.types[settings.type].reset||$.editable.types.defaults.reset;var callback=settings.callback||function(){};var onedit=settings.onedit||function(){};var onsubmit=settings.onsubmit||function(){};var onreset=settings.onreset||function(){};var onerror=settings.onerror||reset;if(settings.tooltip){$(this).attr("title",settings.tooltip)}settings.autowidth="auto"==settings.width;settings.autoheight="auto"==settings.height;return this.each(function(){var self=this;var savedwidth=$(self).width();var savedheight=$(self).height();$(this).data("event.editable",settings.event);if(!$.trim($(this).html())){$(this).html(settings.placeholder)}$(this).bind(settings.event,function(e){if(true===$(this).data("disabled.editable")){return}if(self.editing){return}if(false===onedit.apply(this,[settings,self])){return}e.preventDefault();e.stopPropagation();if(settings.tooltip){$(self).removeAttr("title")}if(0==$(self).width()){settings.width=savedwidth;settings.height=savedheight}else{if(settings.width!="none"){settings.width=settings.autowidth?$(self).width():settings.width}if(settings.height!="none"){settings.height=settings.autoheight?$(self).height():settings.height}}if($(this).html().toLowerCase().replace(/(;|")/g,"")==settings.placeholder.toLowerCase().replace(/(;|")/g,"")){$(this).html("")}self.editing=true;self.revert=$(self).html();$(self).html("");var form=$("<form />");if(settings.cssclass){if("inherit"==settings.cssclass){form.attr("class",$(self).attr("class"))}else{form.attr("class",settings.cssclass)}}if(settings.style){if("inherit"==settings.style){form.attr("style",$(self).attr("style"));form.css("display",$(self).css("display"))}else{form.attr("style",settings.style)}}var input=element.apply(form,[settings,self]);var input_content;if(settings.loadurl){var t=setTimeout(function(){input.disabled=true;content.apply(form,[settings.loadtext,settings,self])},100);var loaddata={};loaddata[settings.id]=self.id;if($.isFunction(settings.loaddata)){$.extend(loaddata,settings.loaddata.apply(self,[self.revert,settings]))}else{$.extend(loaddata,settings.loaddata)}$.ajax({type:settings.loadtype,url:settings.loadurl,data:loaddata,async:false,success:function(result){window.clearTimeout(t);input_content=result;input.disabled=false}})}else{if(settings.data){input_content=settings.data;if($.isFunction(settings.data)){input_content=settings.data.apply(self,[self.revert,settings])}}else{input_content=self.revert}}content.apply(form,[input_content,settings,self]);input.attr("name",settings.name);buttons.apply(form,[settings,self]);$(self).append(form);plugin.apply(form,[settings,self]);$(":input:visible:enabled:first",form).focus();if(settings.select){input.select()}input.keydown(function(e){if(e.keyCode==27){e.preventDefault();reset.apply(form,[settings,self])}});var t;if("cancel"==settings.onblur){input.blur(function(e){t=setTimeout(function(){reset.apply(form,[settings,self])},500)})}else{if("submit"==settings.onblur){input.blur(function(e){t=setTimeout(function(){form.submit()},200)})}else{if($.isFunction(settings.onblur)){input.blur(function(e){settings.onblur.apply(self,[input.val(),settings])})}else{input.blur(function(e){})}}}form.submit(function(e){if(t){clearTimeout(t)}e.preventDefault();if(false!==onsubmit.apply(form,[settings,self])){if(false!==submit.apply(form,[settings,self])){if($.isFunction(settings.target)){var str=settings.target.apply(self,[input.val(),settings]);$(self).html(str);self.editing=false;callback.apply(self,[self.innerHTML,settings]);if(!$.trim($(self).html())){$(self).html(settings.placeholder)}}else{var submitdata={};submitdata[settings.name]=input.val();submitdata[settings.id]=self.id;if($.isFunction(settings.submitdata)){$.extend(submitdata,settings.submitdata.apply(self,[self.revert,settings]))}else{$.extend(submitdata,settings.submitdata)}if("PUT"==settings.method){submitdata._method="put"}$(self).html(settings.indicator);var ajaxoptions={type:"POST",data:submitdata,dataType:"html",url:settings.target,success:function(result,status){if(ajaxoptions.dataType=="html"){$(self).html(result)}self.editing=false;callback.apply(self,[result,settings]);if(!$.trim($(self).html())){$(self).html(settings.placeholder)}},error:function(xhr,status,error){onerror.apply(form,[settings,self,xhr])}};$.extend(ajaxoptions,settings.ajaxoptions);$.ajax(ajaxoptions)}}}$(self).attr("title",settings.tooltip);return false})});this.reset=function(form){if(this.editing){if(false!==onreset.apply(form,[settings,self])){$(self).html(self.revert);self.editing=false;if(!$.trim($(self).html())){$(self).html(settings.placeholder)}if(settings.tooltip){$(self).attr("title",settings.tooltip)}}}}})};$.editable={types:{defaults:{element:function(settings,original){var input=$('<input type="hidden" id="'+settings.name+'_editable"></input>');$(this).append(input);return(input)},content:function(string,settings,original){$(":input:first",this).val("")},reset:function(settings,original){original.reset(this)},buttons:function(settings,original){var form=this;if(settings.submit){if(settings.submit.match(/>$/)){var submit=$(settings.submit).click(function(){if(submit.attr("type")!="submit"){form.submit()}})}else{var submit=$('<button type="submit" />');submit.html(settings.submit)}$(this).append(submit)}if(settings.cancel){if(settings.cancel.match(/>$/)){var cancel=$(settings.cancel)}else{var cancel=$('<button type="cancel" />');cancel.html(settings.cancel)}$(this).append(cancel);$(cancel).click(function(event){if($.isFunction($.editable.types[settings.type].reset)){var reset=$.editable.types[settings.type].reset}else{var reset=$.editable.types.defaults.reset}reset.apply(form,[settings,original]);return false})}}},text:{element:function(settings,original){var input=$("<input />");if(settings.width!="none"){input.width(settings.width)}if(settings.height!="none"){input.height(settings.height)}input.attr("autocomplete","off");$(this).append(input);return(input)}},textarea:{element:function(settings,original){var textarea=$('<textarea id="'+settings.name+'_editable" />');if(settings.rows){textarea.attr("rows",settings.rows)}else{if(settings.height!="none"){textarea.height(settings.height)}}if(settings.cols){textarea.attr("cols",settings.cols)}else{if(settings.width!="none"){textarea.width(settings.width)}}$(this).append(textarea);return(textarea)}},select:{element:function(settings,original){var select=$("<select />");$(this).append(select);return(select)},content:function(data,settings,original){if(String==data.constructor){eval("var json = "+data)}else{var json=data}for(var key in json){if(!json.hasOwnProperty(key)){continue}if("selected"==key){continue}var option=$("<option />").val(key).append(json[key]);$("select",this).append(option)}$("select",this).children().each(function(){if($(this).val()==json.selected||$(this).text()==$.trim(original.revert)){$(this).attr("selected","selected")}})}}},addInputType:function(name,input){$.editable.types[name]=input}};$.fn.editable.defaults={name:"value",id:"id",type:"text",width:"auto",height:"auto",event:"click.editable",onblur:"cancel",loadtype:"GET",loadtext:"Loading...",placeholder:"Click to edit",loaddata:{},submitdata:{},ajaxoptions:{}}})(jQuery);(function(a){a.fn.inputlimiter=function(b){var c=a.extend({},a.fn.inputlimiter.defaults,b);if(c.boxAttach&&!a("#"+c.boxId).length){a("<div/>").appendTo("body").attr({id:c.boxId,"class":c.boxClass}).css({position:"absolute"}).hide();if(a.fn.bgiframe){a("#"+c.boxId).bgiframe()}}a(this).each(function(d){a(this).unbind();a(this).keyup(function(i){if(a(this).val().length>c.limit){a(this).val(a(this).val().substring(0,c.limit))}if(c.boxAttach){a("#"+c.boxId).css({width:a(this).outerWidth()-(a("#"+c.boxId).outerWidth()-a("#"+c.boxId).width())+"px",left:a(this).offset().left+"px",top:(a(this).offset().top+a(this).outerHeight())-1+"px","z-index":2000})}var g=c.limit-a(this).val().length;var h=c.remTextFilter(c,g);var f=c.limitTextFilter(c);if(c.limitTextShow){a("#"+c.boxId).html(h+" "+f);var j=a("<span/>").appendTo("body").attr({id:"19cc9195583bfae1fad88e19d443be7a","class":c.boxClass}).html(h+" "+f).innerWidth();a("#19cc9195583bfae1fad88e19d443be7a").remove();if(j>a("#"+c.boxId).innerWidth()){a("#"+c.boxId).html(h+"<br />"+f)}a("#"+c.boxId).show()}else{a("#"+c.boxId).html(h).show()}});a(this).keypress(function(f){if((!f.keyCode||(f.keyCode>46&&f.keyCode<90))&&a(this).val().length>=c.limit){return false}});a(this).blur(function(){if(c.boxAttach){a("#"+c.boxId).fadeOut("fast")}else{if(c.remTextHideOnBlur){var e=c.limitText;e=e.replace(/\%n/g,c.limit);e=e.replace(/\%s/g,(c.limit==1?"":"s"));a("#"+c.boxId).html(e)}}})})};a.fn.inputlimiter.remtextfilter=function(d,b){var c=d.remText;if(b==0&&d.remFullText!=null){c=d.remFullText}c=c.replace(/\%n/g,b);c=c.replace(/\%s/g,(d.zeroPlural?(b==1?"":"s"):(b<=1?"":"s")));return c};a.fn.inputlimiter.limittextfilter=function(c){var b=c.limitText;b=b.replace(/\%n/g,c.limit);b=b.replace(/\%s/g,(c.limit<=1?"":"s"));return b};a.fn.inputlimiter.defaults={limit:255,boxAttach:true,boxId:"limiterBox",boxClass:"limiterBox",remText:"%n character%s remaining.",remTextFilter:a.fn.inputlimiter.remtextfilter,remTextHideOnBlur:true,remFullText:null,limitTextShow:false,limitText:"Field limited to %n character%s.",limitTextFilter:a.fn.inputlimiter.limittextfilter,zeroPlural:true}})(jQuery);function getCookie(a){var b=document.cookie.match("\\b"+a+"=([^;]*)\\b");return b?b[1]:undefined}jQuery.fn.formToDict=function(){var a=this.serializeArray();var c={};for(var b=0;b<a.length;b++){c[a[b].name]=a[b].value}if(c.next){delete c.next}return c};jQuery.fn.disable=function(){this.enable(false);return this};jQuery.fn.enable=function(a){if(arguments.length&&!a){this.attr("disabled","disabled")}else{this.removeAttr("disabled")}return this};var activity={errorSleepTime:5000,cursor:null,host:null,port:null,instance:null,room:null,destination:null,user:null,users:null,registry:null,construct:function(){activity.host=$("#host").html();activity.port=parseInt($("#port").html())+13090;activity.instance=$("#instance").html();activity.room=$("#room").html();activity.film=$("#film").html();activity.destination=activity.host+":"+activity.port;activity.user=$("#userid").html();activity.users=new Array();activity.registry=new Array()},init:function(){if($("#noauth").length!=0){return}if(activity.room==""){return}var a={room:activity.room,instance:activity.instance,userid:activity.user,location:activity.location,cookie:$.cookie("constellation_frontend")};$.ajax({url:"/services/activity/init?i="+activity.destination,type:"GET",cache:false,dataType:"text",data:$.param(a),success:activity.onInitSuccess,error:activity.onInitError})},onInitSuccess:function(response){try{if(!response){return}var response=eval("("+response+")");activity.tempusers=new Array();for(var i=0;i<response.users.length;i++){if(response.users[i].userid!=undefined){activity.pushUser(response.users[i]);activity.showUser(response.users[i])}}if(activity.users.length>activity.tempusers.length){for(var i=0;i<activity.users.length;i++){activity.dropUser(activity.users[i])}}activity.showUserCount()}catch(e){console.log("Activity Error");activity.onInitError();return}},onInitError:function(a){console.log("Activity Init Error");window.setTimeout(activity.init,5000)},pushUser:function(a){if(a.userid==undefined){return}activity.tempusers.push(a.userid);if($.inArray(a.userid,activity.users)==-1){activity.users.push(a.userid);activity.registry[a.userid]=a.username}},dropUser:function(a,b){if($.inArray(a,activity.tempusers)==-1){activity.removeUser(a);delete activity.registry[a];activity.users=jQuery.grep(activity.users,function(c){return c!=a})}},announce:function(){if($("#noauth").length!=0){return}if(activity.room==""){return}var a={film:activity.film,room:activity.room,instance:activity.instance,userid:activity.user,location:activity.location,cookie:$.cookie("constellation_frontend")};$.ajax({url:"/services/activity/announce?i="+activity.destination,type:"POST",cache:false,dataType:"text",data:$.param(a),success:activity.onAnnounceSuccess,error:activity.onAnnounceError})},onAnnounceSuccess:function(response){try{var response=eval("("+response+")");activity.showUser(response.users[0]);activity.tempusers=new Array();activity.pushUser(response.users[0]);activity.showUserCount()}catch(e){activity.onAnnounceError();return}},onAnnounceError:function(a){console.log("Activity Announce Error");window.setTimeout(activity.announce,5000)},status:function(){if($("#noauth").length!=0){return}if(activity.room==""){return}try{var a="/services/activity/status?i="+activity.destination+"&room="+activity.room+"&userid="+activity.user+"&instance="+activity.instance+"&location="+activity.location+"&film="+activity.film+"&cookie="+$.cookie("constellation_frontend");$.head(a,{},function(c){$.each(c,function(d,g){if(d=="X-User-Get"){try{if(g!=activity.users.length){activity.init()}}catch(f){}}if(d=="X-Server-Time"){try{timekeeper.poll(g)}catch(f){}}});window.setTimeout(activity.status,5000)},activity.errorSleepTime-2000)}catch(b){window.setTimeout(activity.status,5000)}},poll:function(){if($("#noauth").length!=0){return}if(activity.room==""){return}var a={room:$("#room").html(),userid:$("#userid").html(),location:activity.location,cookie:$.cookie("constellation_frontend")};$.ajax({url:"/services/activity/update?i="+activity.destination,type:"POST",cache:false,dataType:"text",data:$.param(a),timeout:activity.errorSleepTime,success:activity.onPollSuccess,error:activity.onPollError})},onPollSuccess:function(response){try{if(!response){return}var response=eval("("+response+")");for(var i=0;i<response.users.length;i++){activity.showUser(response.users[i],true)}}catch(e){activity.onAnnounceError();return}activity.errorSleepTime=100;window.setTimeout(activity.poll,0)},onPollError:function(a){console.log("Activity Poll error; sleeping for",activity.errorSleepTime,"ms");window.setTimeout(activity.poll,activity.errorSleepTime)},showUserCount:function(){if($("#userCount").length>0){$("#userCount").html(activity.users.length)}},showUser:function(b){if($("#adminmessage-users").length>0){var a="green";if(b.location=="lobby"){a="orange"}if($("#adminuser-"+b.userid).length>0){userdata='<a name="adminmessageuser-'+b.userid+'" id="adminmessageuser-'+b.userid+'" title="'+b.username+'" onClick="adminmessage.startAdminChat(this)"><img src="/images/Neu/8x8/status/online-'+a+'.png" /></a>';$("#adminuser-"+b.userid+"-status").html(userdata)}else{html='<div class="message" id="adminuser-'+b.userid+'"><span id="adminuser-'+b.userid+'-block"><a name="adminmessageuser-'+b.userid+'" id="blockmessageuser-'+b.userid+'" title="'+b.username+'" onClick="adminmessage.blockSeat(this)"><img src="/images/Neu/8x8/status/important.png" /></a></span><span id="adminuser-'+b.userid+'-status"><a name="adminmessageuser-'+b.userid+'" id="adminmessageuser-'+b.userid+'" title="'+b.username+'" onClick="adminmessage.electAdminChat(this)"><img src="/images/Neu/8x8/status/online-'+a+'.png" /></a></span><strong>'+b.username+"</strong></div>";$("#adminmessage-users").append(html)}}if($("#user-"+b.userid).length==0){var d=Math.floor(Math.random()*98);var c=Math.floor(Math.random()*121);html='<a style="position: relative; top: '+c+"px; left: "+d+'%;" name="constellation-'+b.userid+'" class="host-star" id="user-'+b.userid+'" title="'+b.username+'" onClick="privatechat.startPrivateChat(this)"><img src="/images/host-star.png" /></a>';$("#constellation_map").append(html)}},setUserLocation:function(c,d,a){var b="green";if(a=="lobby"){b="orange"}if($("#adminuser-"+userid).length>0){userdata='<a name="adminmessageuser-'+userid+'" id="adminmessageuser-'+userid+'" title="'+username+'" onClick="adminmessage.startAdminChat(this)"><img src="/images/Neu/8x8/status/online-'+b+'.png" /></a>';$("#adminuser-"+userid+"-status").html(userdata)}},removeUser:function(a){if($("#adminmessage-users").length==0){if($("#adminuser-"+a+"-status").length==0){$("#adminuser-"+a+"-status").html("Offline").attr("style","color:red")}}if(($("#user-"+a).length>0)&&(a!=$("#userid").html())){$("#user-"+a).remove()}}};$(document).ready(function(){if(!window.console){window.console={}}if(!window.console.log){window.console.log=function(){}}if(window.location.pathname.match(/theater/)){activity.location="theater"}if(window.location.pathname.match(/lobby/)){activity.location="lobby"}activity.construct();activity.init();activity.announce();activity.status()});
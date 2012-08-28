var timekeeper = {    //These come from the HTML Page    currentTime: null,    movieStartTime: null,    reviewStartTime: null,    promoStartTime: null,    qaStartTime: null,    viewBlockTime: null,    viewEndTime: null,        currentPanel: "prescreening-panel",        init: function() {      //console.log("Init Timekeeper");      timekeeper.currentTime = new Date().getTime() / 1000;      timekeeper.movieStartTime = $("#starttime").html();      timekeeper.reviewStartTime = $("#reviewtime").html();      timekeeper.promoStartTime = $("#promotime").html();      timekeeper.qaStartTime = $("#qatime").html();      timekeeper.viewBlockTime = $("#blockentrytime").html();      timekeeper.viewEndTime = $("#endtime").html();      //if ($("#noauth").length == 0) {        //error.showError("error","Please Note: If you leave the theater and plan to come back from another location...","be sure to use the 'exit theater' button in the toolbar! Otherwise, you may not be permitted to return to the theater.",4000);      //}      toggleDiv("chat_panel");          },        //This pulls new users when they arrive in the room     poll: function( time ) {      //console.log("Last Time, " + timekeeper.currentTime);      timekeeper.currentTime = time;      //console.log("Time Now, " + timekeeper.currentTime);      //console.log("Block Time, " + timekeeper.viewBlockTime);      //console.log("End Time, " + timekeeper.viewEndTime);      			//Reverse Incremental Order      switch( true ) {        //There is a maximum lifetime for the show, which is "Film End Time" + 30 mins        //Film is Over				case (timekeeper.currentTime > timekeeper.viewEndTime):					console.log("Viewing is over!");					console.log(timekeeper.currentTime + " = " + timekeeper.viewEndTime);          //window.location.href="/film/"+$("#film").html()+"?code=exp";          break;        //This is the "MOVIE WINDOW" during which the movie should play        //viewBockTime is the Movie End Minus 15 Seconds				case ((timekeeper.currentTime >= timekeeper.movieStartTime) && (timekeeper.currentTime < timekeeper.viewBlockTime)):          //if ((timekeeper.currentPanel == 'review_panel') || (timekeeper.currentPanel == 'qa_panel')|| (timekeeper.currentPanel == 'promo_panel'))          //  return;          //console.log("It's Movie Time!");          if ((timekeeper.currentTime > timekeeper.movieStartTime + 5) && ($(".screening_wrapper").css("display") == "none")) {            //We show the non-flash message after five seconds            //If the user isn't seeing the swf, they'll see this...            $(".screening_wrapper").fadeIn();          }          timekeeper.startMovie();          break;        case ((timekeeper.currentTime >= timekeeper.movieStartTime) && (timekeeper.currentTime > timekeeper.viewBlockTime)):          //console.log("video over");					videoplayer.hideVODPlayer();          break;        default:          //console.log("No time detected!");          break;      }    },        //This is the "MOVIE WINDOW" during which the movie should play    //viewBockTime is the Movie End Minus 15 Seconds		checkMovieTime: function() {      if ((timekeeper.currentTime > timekeeper.movieStartTime) && (timekeeper.currentTime < timekeeper.viewBlockTime)) {        return true;      }      return false;    },        startMovie: function() {            if ((timekeeper.currentPanel == 'video_panel') && (document.getElementById(videoplayer.div) != undefined))        return;            //toggleDiv("chat_panel");      $("#status_panel").html("Status: Screening");      timekeeper.currentPanel = 'video_panel';      $("#timer_panel").fadeOut("slow");      $("#prescreening_panel_main").fadeOut(100);      $("#video_panel").fadeIn("slow");      if (videoplayer.state == "pre") {        if ($("#noauth").length == 0) {          //If the problem persists, please 'Exit' the theater, and then re-enter from the lobby. 					//error.showError("error","Please Note: If you encounter any problems with streaming quality,","please first try to refresh your browser. Thank you.",6000);          videoplayer.initPlayer();        }      }    },        startReview: function() {      if (timekeeper.currentPanel == 'review_panel')        return;      $("#status_panel").html("Status: Reviews");      timekeeper.currentPanel = 'review_panel';      //$("#video_panel").fadeOut("slow");      $("#review_panel").fadeIn("slow");    },        startPromo: function() {      if (timekeeper.currentPanel == 'promo_panel')        return;      $("#status_panel").html("Status: Promos");      timekeeper.currentPanel = 'promo_panel';      //$("#video_panel").fadeOut("slow");      $("#review_panel").fadeOut("slow");      $("#promo_panel").fadeIn("slow");      promotions.init();    },        startQA: function() {      //console.log("QANDA in TIMEKEEPER");      if (timekeeper.currentPanel == 'qa_panel')        return;      $("#status_panel").html("Status: Q And A");      timekeeper.currentPanel = 'qa_panel';      qanda.allowScreeningClose();      $("#promo_panel").fadeOut("slow");      //$("#qa_panel").fadeIn("slow");      //This is a user      /*      if ($("#qandaform").length > 0) {        $("#qandaform").hide();        qanda.slidePoll();      }      //This is a host      if ($("#qanda-host-inbox").length > 0) {        if (qanda) {          qanda.closeInput();        }      }      */    }};$(document).ready(function() {  if (!window.console) window.console = {};  if (!window.console.log) window.console.log = function() {};    //$("#review_panel").fadeIn("slow");  timekeeper.init();  });
<?php /*
if ($sf_user->getAttribute('login_error')) {?>
<span class="error">
<?php echo $sf_user->getAttribute('login_error');?>
</span>
<?
$sf_user->setAttribute('login_error',null);
}*/?>

<style>
a.button { width: 220px;}
.or span {background: #fff;}
#login-form {
	width: 382px;
	margin: 40px auto;
}
.block {
	padding: 20px;
}
</style>
<div class="inner_container clearfix">
	<div class="block" id="login-form">

	    <h4>Reset Password</h4>
    	<p class=" change-state">Already have an account yet? <a href="/login">Login &raquo;</span></p>




		<form id="login_form" name="login_form" action="/services/Login" method="POST" class="login_form clearfix">

			<div class="form-fieldset-full">
			<div class="form-row clearfix">
				<label for="email">E-Mail</label>
				<div class="input">
					<input class="text-input span6 large" id="email" name="email" value="<?php echo $post["first_name"];?>" />
				</div>
			</div>
			<div class="form-row clearfix">
 				<button class="button button_orange uppercase right">Submit</button>
	 		</div>
			</div>


			<input type="hidden" value="<?php echo preg_replace("/\?err=([^&].+)/","",$_SERVER["REQUEST_URI"]);?>" name="source" />
			<input type="hidden" id="login_destination" value="<?php echo preg_replace("/\?err=([^&].+)/","",$_SERVER["REQUEST_URI"]);?>" name="destination" />
			<input type="hidden" value="true" name="indirect" />
			<input type="hidden" value="true" name="popup" />
			<input type="hidden" value="login" name="type" />

		</form>        
  </div>
	</div>
</div>

<script>
var user_ids = [];

$('#fb-invite').click(function(event){
	event.preventDefault();
	// FB.ui({method: 'apprequests',
	// 	title: 'Constellation.tv - your online movie theater',
 //    	message: 'Join me on Constellation',
	// 	frictionlessRequests : true,
	// 	 to: user_ids,
 //    	filters: 'app_non_users'
	// });

	// FB.api('/me/friends?access_token=' + accessToken, function(response) {
	//   console.log(response);
	// });


});




//    https://graph.facebook.com/me/friends?access_token=


$('#fb').click(function(event){
	event.preventDefault();
	FB.login(function(response) {
	  if (response.status == 'connected') {
		console.log(response);
	    accessToken = response.authResponse.accessToken;

	    // console.log("User is connected to the application.");
	    // var accessToken = response.session.access_token;
	    // window.location = '/services/Login/facebook'
	    // console.log(accessToken)
	  }
	});	

});



// $.ajax({
// 	type: 'POST',
// 	url: 'https://api.twitter.com/1/statuses/update.json',
// 	data: {
// 		status:'hahaha'
// 	},
// 	success: function(response){
// 		console.log(response)
// 	},
// 	error: function(response,e){
// 		console.log(response,e)
// 	}

// })

// $.ajax({
// 	type: 'POST',
// 	url: 'https://graph.facebook.com/1703613/feed',
// 	data: {
// 		access_token:'AAACoZA4awzA4BANkCyfVAqLgVvKtx2MpPaNEPhw20HMsmc4GyTRWwZCqHmZBeLYowh181Js3m7ZA43UNHTrflxPKrnriRUoMwjTZAj6VT6QZDZD',
// 		message: 'hello test'
// 	},
// 	success: function(response){
// 		console.log(response)
// 	}

// })

// FB.api('/me', function(response) {
//   console.log(response);
// });


 // var obj = {
 //          method: 'feed',
 //          link: 'https://developers.facebook.com/docs/reference/dialogs/',
 //          picture: 'http://fbrell.com/f8.jpg',
 //          name: 'Facebook Dialogs',
 //          caption: 'Reference Documentation',
 //          description: 'Using Dialogs to interact with users.'
 //        };

 //        function callback(response) {
 //        	console.log(response);
 //          // document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
 //        }

 //        FB.ui(obj, callback);


// FB.ui({method: 'apprequests',
//     message: 'My Great Request',
//   }, requestCallback);


// FB.getLoginStatus(function(response) {
// 	console.log(response)
//   if (response.status === 'connected') {
//     // the user is logged in and connected to your
//     // app, and response.authResponse supplies
//     // the user’s ID, a valid access token, a signed
//     // request, and the time the access token 
//     // and signed request each expire
//     var uid = response.authResponse.userID;
//     accessToken = response.authResponse.accessToken;
//   } else if (response.status === 'not_authorized') {
//     // the user is logged in to Facebook, 
//     //but not connected to the app
//   } else {
//     // the user isn't even logged in to Facebook.
//   }
// });




// })
// requestCallback = function(response){
// 	console.log(response);
// }
</script>
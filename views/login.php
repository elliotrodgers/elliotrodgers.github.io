<?php 

	$loginUrl = $gClient->createAuthUrl();

?>

<pre><?php print_r($_SESSION); ?></pre>
<button class="btn btn-default" onclick="window.location='<?=$loginUrl?>'">Login</button>

<!-- <script>
  var profile;
  function onSignIn(googleUser) {
	// Useful data for your client-side scripts:
	profile = googleUser.getBasicProfile();
	console.log("ID: " + profile.getId()); // Don't send this directly to your server!
	console.log('Full Name: ' + profile.getName());
	console.log('Given Name: ' + profile.getGivenName());
	console.log('Family Name: ' + profile.getFamilyName());
	console.log("Image URL: " + profile.getImageUrl());
	console.log("Email: " + profile.getEmail());

	// The ID token you need to pass to your backend:
	var id_token = googleUser.getAuthResponse().id_token;
	console.log("ID Token: " + id_token);
  };
  function signOut() {
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.disconnect().then(function () {
	  window.location.reload();
	});
  }
</script>


<div class="g-signin2" data-onsuccess="onSignIn" data-longtitle="true"></div>
<br>
<button class="btn btn-default" onclick="signOut()">Sign out</button>

<pre><?php print_r($_SESSION);?></pre> -->
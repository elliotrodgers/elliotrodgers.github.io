<?php

	$server = "ELLIOT-DESKTOP\Elliot";

	$connectionInfo = array("Database"=>"master");

	$conn = sqlsrv_connect($server, $connectionInfo);

	$sql = "SELECT * FROM dbo.test_table";

	$res = sqlsrv_query($conn,$sql);

	if($res === false) { ?>
		<pre><?=print_r(sqlsrv_errors())?></pre>	
	<?php }

	while($row = sqlsrv_fetch_array($res,SQLSRV_FETCH_ASSOC)){
		$test[] = $row;
	}

	// include_once("/GoogleAPI/autoload.php");
	// $gClient = new Google_Client();

	session_start();
	// session_destroy();
	// require_once("GoogleAPI/vendor/autoload.php");
	// $gClient = new Google_Client();
	// $gClient->setClientId("658433370672-76sggtr60d1f403kc8sij584ifla4hlm.apps.googleusercontent.com");
	// $gClient->setClientSecret("sCtjNL30v_gq0WjigEy5Ggx6");
	// $gClient->setApplicationName("Elliot Rodgers");
	// $gClient->setRedirectUri("http://localhost/g-callback.php");
	// $gClient->setScopes(
	// 	array(
	// 		"https://www.googleapis.com/auth/plus.login",
	// 		"https://www.googleapis.com/auth/userinfo.email",
	// 		"https://www.googleapis.com/auth/userinfo.profile",
	// 		"https://www.googleapis.com/auth/plus.me"
	// 	)
	// );
?>
<?php

	// Server login info
	$servername = "localhost";
	$username 	= "root";
	$password 	= "password";
	$database 	= "sykes_interview";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$location_name = NULL;
	$near_beach = NULL;
	$accept_pets = NULL;
	$sleeps = NULL;
	$beds = NULL;
	$booked = NULL;
	$start_property = NULL;
	
	// Call property search stored procedure
	// $res = $conn->query("CALL property_search(NULL,NULL,NULL,NULL,NULL,NULL,NULL);");
	$res = $conn->prepare("CALL property_search(?,?,?,?,?,?,?);");
	$res->bind_param("siiiiii", $location_name, $near_beach, $accept_pets, $sleeps, $beds, $booked, $start_property); 
	$res->execute();

	// Print any errors returned from stored procedure
	if (!$res) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
	}

	// Loop through results and input each row into array
	while ($row = mysqli_fetch_array($res)) {
		$array[] = $row;
	}

?>

<pre><?php print_r($array); ?></pre>
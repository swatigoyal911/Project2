<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "sri_id_4";
    $password = "sssa";
    $dbname = "espdemo";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Kolkata');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");

    if(!empty($_POST['temperature']) && !empty($_POST['humidity']) !empty($_POST['soilmoisture']) && !empty($_POST['rainread']))
    {
    	$temp = $_POST['temperature'];
    	$hum = $_POST['humidity'];
	$soil = $_POST['soilmoisture'];
	$rain = $_POST['rainread'];

	    $sql = "INSERT INTO logs (temperature, humidity, soilmoisture, rainread, Date, Time)
		
		VALUES ('".$temp."', '".$hum."', '".$soil."', '".$rain."', '".$d."', '".$t."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>
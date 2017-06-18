<?php

class DB {
	private static function connect(){
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "socialapp";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		// if ($conn->connect_error) {
		//     die("Connection failed: " . $conn->connect_error);
		// }else{
		// 	echo "Successfully connected to database.";			
		// }

		return $conn;
	}

	public static function myQuery($query){

		$state = self::connect();

		if ($state->query($query) === TRUE) {
		   echo '<div class="alert alert-success" role="alert">Successfully submitted to database.</div>';
		} else {
		    echo "Error: " . $query . "<br>" . $state->error;
		}

		$state->close();

	}
}

?>
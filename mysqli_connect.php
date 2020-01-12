 <?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "DarazReplicaProject";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		//$conn->close(); should be close.

?> 
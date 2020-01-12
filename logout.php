<?php

		session_start();

		session_unset();

		echo "<script> window.location.replace('index.php'); </script>";

?>
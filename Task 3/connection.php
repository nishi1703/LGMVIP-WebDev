<?php
	$servername = "localhost:3307";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password);
	$db = mysqli_select_db($conn,'gita');

<?
	@$portws->website = 'http://localhost:8080/';

	$servername = "localhost";
	$username = "root"; 
	$password = "usbw";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>
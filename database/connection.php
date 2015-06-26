 <?php
function database(){

	$servername = "gymdiary.cloudapp.net";
	$username = "admin";
	$password = "gymdiaryAdmin";
	$db = "gymdiary";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}
 ?>
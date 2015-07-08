<?php
$id = (isset($_POST['id']) ? $_POST['id'] : null);
if($id != null){
	require_once("connection.php");
	$conn = database();				//Query the database
	$info = "";
	$resultSet = $conn->query("SELECT * FROM exercise WHERE ID=1");
		if($resultSet->num_rows != 0){
			while($rows = $resultSet->fetch_assoc()){
				print_r($rows);
				$name = $rows['name'];
				$url = $rows['url'];
				$desc = $rows['description'];
				print_r($name+"|"$url+"|"+$desc);
				}
		}

		else{
			echo"ERROR";
		}
	$conn->close();
}
?>
<?php
$id = (isset($_POST['id']) ? $_POST['id'] : null);
if($id != null){
	require_once("connection.php");
	$conn = database();				//Query the database
	$info = "";
	$resultSet = $conn->query("SELECT name, url, description FROM exercise WHERE ID=".$id."");
		if($resultSet->num_rows != 0){
			while($rows = $resultSet->fetch_assoc()){
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
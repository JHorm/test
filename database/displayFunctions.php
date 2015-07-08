<?php
$id = (isset($_POST['id']) ? $_POST['id'] : null);
if($id != null){
	require_once("connection.php");
	$conn=database();				//Query the database
	$info = "";
	$resultSet = $conn->query("SELECT * FROM gymdiary.exercise WHERE ID=".$id."");
		if($resultSet->num_rows != 0){
			while($rows = $resultSet->fetch_assoc()){
				print_r($rows['name']+"|"+$rows['url']+"|"+$rows['description']);
				}
		}

		else{
			echo"ERROR";
		}
	$conn->close();
}
?>
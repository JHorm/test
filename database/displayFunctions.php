<?php
$id = $_POST['id'];
exerciseInfo($id);
function exerciseInfo($id){
	//connect to the database
					require_once("connection.php");
					$conn=database();
					//Query the database
					$info = "";
					$resultSet = $conn->query("SELECT * FROM exercise WHERE exercise.id=".$id."");
					if($resultSet->num_rows != 0){
						while($rows = $resultSet->fetch_assoc()){
							$info = $rows['name']+"|"+$rows['url']+"|"+$rows['description'];
						}
						echo $info;
					}
					else{
						echo"ERROR";
					}
		    		$conn->close();
}
?>
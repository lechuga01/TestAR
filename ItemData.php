<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "mydb";
	//Hace la conexion
	$conn = new mysqli($serverName,$userName,$password,$dbName);
	//check conection
	if(!$conn){
		die("Conesion muerta".mysqli_connect_error());
	}
	$sql = "Select idAula, Materia from Aulas ";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		echo mysqli_num_rows($result);
		//muestra la informacion
		while($row = mysqli_fetch_assoc($result)){
			echo "idAula:".$row['idAula'] . "|Materia: ".$row['Materia'].";";
		}
	}
?>
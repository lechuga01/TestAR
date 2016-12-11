<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "mydb";
	//Make a conexion
	$conn = new mysqli($serverName,$userName,$password,$dbName);
	//check conection
	if(!$conn){
		die("Conesion muerta".mysqli_connect_error());
	}
	$sql = "Select * from Aulas ";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "|idAula " . $row['idAula'] . "|Materia " . $row['Materia'] ."|HorarioInicial " . $row['HorarioInicial'] . "|HorarioFinal " . $row['HorarioFinal'] . "|Dias " . $row['Dias'] . "|Edificio " . $row['Edificio'] . "|Profesor ". $row['Profesor'] . ";";
		} 
	}
?>
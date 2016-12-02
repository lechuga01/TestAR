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
	$sql = "Select NoSistema from biblioteca";
	
	$result = mysqli_query($conn,$sql);

	echo "antes del if";

	if(mysqli_num_rows($result) > 0){
		//echo "es 0";
		//muestra la informacion
		while($row = mysqli_fetch_assoc($result)){
			echo "NoSistema:" . $row['NoSistema'] . ";";
		}
	}


?>
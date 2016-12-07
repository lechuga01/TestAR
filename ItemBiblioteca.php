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
	$sql = "Select * from biblioteca";
	
	$result = mysqli_query($conn,$sql);

	//echo "antes del if";

	if(mysqli_num_rows($result) > 0){
		//echo "es 0";
		//muestra la informacion 
		while($row = mysqli_fetch_assoc($result)){
			echo "|NoSistema " . $row['NoSistema'] . "|ISBN " . $row['ISBN']. "|Autor " . $row['Autor'] . "|TUniforme " . $row['TUniforme'] . "|Titulo " . $row['Titulo'] . "|Edicion " . $row['Edicion'] . "|PieDeImprenta " .$row['PieDeImprenta'] . "|DescrFisica " . $row['DescrFisica'] . 
			"|Nota " . $row['Nota'] . "|TemaGeneral " . $row['TemaGeneral'] . "|ASecPersonas " . $row['ASecPersonas'] . "|BaseLogica " . $row['BaseLogica'] . "*";
		}
	}


?>
<?php 
 include 'MaxicomercioBD.php';
 $folio = $_REQUEST["Folio"];

$respose = array();

$query = mysqli_query($con, "INSERT INTO foliosdocumentos (Sys_TimeStamp, Sys_DTCreated, Sys_DTExported, Sys_GUID, Cancelado, Fecha, Folio, Block ) VALUES 
								( NOW(), NOW(), NOW(), UPPER(SUBSTR(CONCAT(MD5(RAND()), MD5(RAND())), 1, 32)), 0, CURDATE() , '$folio' , 6)  ");

if ($query) {
	$respose['sucsess'] = 'true';
	$respose['message'] = 'Registrado';
}else{

	$respose['success'] = false;
	$respose['mesage'] = 'Error';
}

echo json_encode($respose);

?
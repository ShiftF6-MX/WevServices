<?php 
 	include 'MaxicomercioBD.php';
	 $fecha = $_REQUEST["Fecha"];
	 $referencia = $_REQUEST["Referencia"];
	 $cliente = $_REQUEST["ICliente"];
	 $folio = $_REQUEST["IFolio"];

	$respose = array();

	$query = mysqli_query($con, "INSERT INTO venta 
	(Sys_TimeStamp, Sys_DTCreated, Sys_DTExported, Sys_GUID, Documento, Fecha, FormaPago, Referencia, ICConsumo, ICliente, IDivisa, IFolio ) VALUES 
	( NOW(), NOW(), NOW(), UPPER(SUBSTR(CONCAT(MD5(RAND()), MD5(RAND())), 1, 32)), 6,'$fecha', 0, '$referencia', 1, $cliente, 1, '$folio')");

	if ($query) {
		$respose['sucsess'] = 'true';
		$respose['message'] = 'Registrado';
	}else{

		$respose['success'] = false;
		$respose['mesage'] = 'Error';
	}

echo json_encode($respose);
?>
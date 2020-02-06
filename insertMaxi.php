 <?php 

 include 'MaxicomercioBD.php';

 $documento = $_REQUEST["Documento"];
 $fecha = $_REQUEST["Fecha"];
 $pago = $_REQUEST["FormaPago"];
 $referencia = $_REQUEST["Referencia"];
 $consumo = $_REQUEST["ICConsumo"];
 $cliente = $_REQUEST["ICliente"];
 $divisa = $_REQUEST["IDivisa"];
 $folio = $_REQUEST["IFolio"];

$respose = array();

$query = mysqli_query($con, "INSERT INTO venta (Sys_TimeStamp, Sys_GUID, Documento, Fecha, FormaPago, Referencia, ICConsumo, ICliente,
	IDivisa, IFolio) VALUES ( NOW(), 
UPPER(SUBSTR(CONCAT(MD5(RAND()), MD5(RAND())), 1, 32)),
'$documento', '$fecha','$pago', '$referencia', '$consumo', '$cliente', '$divisa', '$folio')");

if ($query) {
	$respose['sucsess'] = 'true';
	$respose['message'] = 'Registrado';
}else{

	$respose['success'] = false;
	$respose['mesage'] = 'Error';
}

echo json_encode($respose);

  ?>
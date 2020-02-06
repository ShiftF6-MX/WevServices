<?php 
 	include 'MaxicomercioBD.php';
	 //$almacen = $_REQUEST["IAlmacen"];
	 $producto = $_REQUEST["IProducto"];
	 $detalle = $_REQUEST["FK_Venta_Detalle"];
	 $cantidad = $_REQUEST["Cantidad"];
	 $unidad = $_REQUEST["Unidad"];
	 
	$respose = array();

	$query = mysqli_query($con, "INSERT INTO dventa 
	(Sys_TimeStamp, Sys_DTCreated, Sys_DTExported, Sys_GUID, Cantidad, Status, Unidad, IAlmacen, IProducto, FK_Venta_Detalle) VALUES 
	( NOW(), NOW(), NOW(), UPPER(SUBSTR(CONCAT(MD5(RAND()), MD5(RAND())), 1, 32)), '$cantidad', 0, '$unidad' 1, '$producto', '$detalle')");

	if ($query) {
		$respose['sucsess'] = 'true';
		$respose['message'] = 'Registrado';
	}else{

		$respose['success'] = false;
		$respose['mesage'] = 'Error';
	}

echo json_encode($respose);
?>
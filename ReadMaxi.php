<?php
include 'MaxicomercioBD.php';
//header("Content-Type: application/json;charset=utf-8");
$sql = "SELECT venta.Sys_PK, venta.Referencia, cliente.Nombre, venta.Fecha FROM venta 
		inner join cliente on venta.ICliente = cliente.Sys_PK";
$datos = array();
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_object($result)){
	$datos[] = $row;
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
mysqli_close($con);
	
?>
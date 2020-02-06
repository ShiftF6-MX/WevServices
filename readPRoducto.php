<?php
include 'MaxicomercioBD.php';
//header("Content-Type: application/json;charset=utf-8");
$sql = "SELECT Sys_PK, Descripcion FROM producto";
$datos = array();
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_object($result)){
	$datos[] = $row;
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
mysqli_close($con);
	
?>
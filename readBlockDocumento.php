<?php
include 'MaxicomercioBD.php';

$sql = "SELECT Sys_PK, FUltimo FROM blockdocumentos WHERE Documento = 6";
$datos = array();
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_object($result)){
	$datos[] = $row;
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
mysqli_close($con);	
?>
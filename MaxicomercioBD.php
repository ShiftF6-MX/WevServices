<?php 

	$hostname = '25.64.166.16';
	$database = 'maxicomercio_maxiherramientas';
	$username = 'conn01';
	$password = 'Simons83Mx';

$con = new mysqli($hostname,$username,$password,$database);
mysqli_set_charset($con, "utf8"); 
if($con -> connect_errno){
	echo "Error al conectarse con la base de datos";

} 

 ?>
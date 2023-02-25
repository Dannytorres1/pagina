<?php
function conectar(){
	$host="localhost";
	$user="root";
	$pass="5050db";

	$bd="crud_php";
	
	$con=mysqli_connect($host,$user,$pass);
	
	mysqli_select_db($con,$bd);

	return $con;
}
?>
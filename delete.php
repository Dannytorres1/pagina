<?php

include("conexion.php");
$con=conectar();

$email=$_GET['id'];

$sql="UPDATE alumnos  set estado='0' where email='$email'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
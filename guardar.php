<?php 
include ("cn.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];



$actualizar = "UPDATE productos SET nombre='$nombre', precio='$precio' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);




?>
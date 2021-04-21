<?php

include ('cn.php');


$id = $_GET['id'];

$query = "DELETE FROM productos WHERE id='$id'";
$res = mysqli_query($conexion, $query);


header("Location:productosEditar.php");


 
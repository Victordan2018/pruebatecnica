<?php
include 'conexion_1.php';
//require 'intropage.php';
//include 'header.php'; 
$id = $_POST['id']; 
$nombre = $_POST['nombre']; 
$descripcion = $_POST['descripcion']; 
$precio_venta=$_POST['precio_venta'];
$stock=$_POST['stock'];
$imagen=$_POST['imagen'];
$categoria=$_POST['categoria'];
$con=new Conexion();
$conectar=$con->con();
if(!empty($id) && !empty($nombre) && !empty($descripcion) && !empty($precio_venta) && !empty($stock) && !empty($imagen) && !empty($categoria)){
	echo "Correcto;";
	$sSQL=$conectar->query("UPDATE productos Set nombre='$nombre', descripcion='$descripcion', precio_venta='$precio_venta', stock='$stock', imagen='$imagen', id_categoria='$categoria' where id_producto='$id'"); 
    if($sSQL){
      echo '<p>Los datos han sido actualizados con exito.</p> ';
      header( "refresh:1; url=listar.php" ); 
    }else{
      echo 'Checa los datos'.$conectar->error; 
    }
 }else{
    echo '<p>Por favor ponte en contacto con el admin.</p> '; 
 }

?>
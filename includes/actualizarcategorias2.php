<?php
include 'conexion_1.php';
//require 'intropage.php';
//include 'header.php'; 
$id = $_POST['id']; 
$nombre = $_POST['nombre']; 
$descripcion = $_POST['descripcion']; 
$color=$_POST['color'];
$con=new Conexion();
$conectar=$con->con();
if(!empty($id) && !empty($nombre) && !empty($descripcion) && !empty($color)){
	echo "Correcto;";
	$sSQL=$conectar->query("UPDATE categorias Set nombre='$nombre', descripcion='$descripcion', color='$color' where id_categoria='$id'"); 
    if($sSQL){
      echo '<p>Los datos han sido actualizados con exito.</p> ';
      header( "refresh:1; url=listarcategorias.php" ); 
    }else{
      echo 'Checa los datos'.$conectar->error; 
    }
 }else{
    echo '<p>Por favor ponte en contacto con el admin.</p> '; 
 }

?>
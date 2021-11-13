<?php 
require_once 'conexion_1.php';
//require 'intropage.php

// Actualizamos en funcion del id que recibimos 
$con=new Conexion();
$conectar=$con->con(); 
$idcat = $_GET['idcat'];
$sqlf = $conectar->query('SELECT * FROM categorias where id_categoria='.$idcat);
include_once 'encabezado.php'; 
	foreach ($sqlf as $datos){
		?>
		  <h1>Ingresa los datos que se te piden para actualizar las categorias </h1>
		  <form action="actualizarcategorias2.php" method="post" name="act">
		  <p>
		  <label for="id"></label>
		  <input type="text" name="id" id="textfield" value="<?php echo $datos['id_categoria'];?>" />
		  </p>
		  <p>&nbsp;</p>
		  <p>Ingresa el nombre de la categoria</p>
		  <p>
		  <label for="nombre"></label>
		  <input type="text" name="nombre" id="textfield2" value="<?php echo $datos['nombre'];?>"/>
		  </p>
		  <p>Ingresa la descripcion de la categoria</p>
		  <p>
		  <label for="descripcion"></label>
		  <input type="text" name="descripcion" id="textfield3" value="<?php echo $datos['descripcion'];?>"/>
		  </p>
		  <p>Ingresa el color</p>
		  <p>
		  <label for="color"></label>
		  <input type="text" name="color" id="textfield4" value="<?php echo $datos['color'];?>"/>
		  </p>
		  <p>
		  <input type="submit" name="btn" id="button" value="Enviar" />
		  </p>
		</form>
		<?php 
			}
			include_once 'encabezado.php'; 
		?>
<?php 
require_once 'conexion_1.php';
//require 'intropage.php

// Actualizamos en funcion del id que recibimos 
$con=new Conexion();
$conectar=$con->con(); 
$idprod = $_GET['idprod'];
$sqlf = $conectar->query('SELECT * FROM productos where id_producto='.$idprod.'');
include_once 'encabezado.php'; 
	foreach ($sqlf as $datos){
		?>
		  <h1>Ingresa los datos que se te piden para actualizar los productos </h1>
		  <form action="actualizar2.php" method="post" name="act">
		  <p>
		  <label for="id"></label>
		  <input type="text" name="id" id="textfield" value="<?php echo $datos['id_producto'];?>" />
		  </p>
		  <p>&nbsp;</p>
		  <p>Ingresa el nombre del producto</p>
		  <p>
		  <label for="nombre"></label>
		  <input type="text" name="nombre" id="textfield2" value="<?php echo $datos['nombre'];?>"/>
		  </p>
		  <p>Ingresa la descripcion del producto</p>
		  <p>
		  <label for="descripcion"></label>
		  <input type="text" name="descripcion" id="textfield3" value="<?php echo $datos['descripcion'];?>"/>
		  </p>
		  <p>Ingresa el precio de venta</p>
		  <p>
		  <label for="precio"></label>
		  <input type="text" name="precio_venta" id="textfield4" value="<?php echo $datos['precio_venta'];?>"/>
		  </p>
		  <p>Ingresa el stock</p>
		  <p>
		  <label for="stock"></label>
		  <input type="text" name="stock" id="textfield5" value="<?php echo $datos['stock'];?>"/>
		  </p>
		  <p>Ingresa la imagen</p>
		  <p>
		  <label for="imagen"></label>
		  <input type="text" name="imagen" id="textfield6" value="<?php echo $datos['imagen'];?>"/>
		  </p>
		  <p>Ingresa la categoria</p>
		  <p>
		  <label for="categoria"></label>
		  <input type="text" name="categoria" id="textfield7" value="<?php echo $datos['id_categoria'];?>"/>
		  </p>
		  <p>
		  <input type="submit" name="btn" id="button" value="Enviar" />
		  </p>
		</form>
		<?php 
			}
			include_once 'piepagina.php';
		?>
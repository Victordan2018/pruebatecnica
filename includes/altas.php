<?php
require_once 'conexion_1.php';
//require_once 'intropage.php';
include_once 'encabezado.php'; 
?>
	<?php
    $con= new Conexion();
    $conectar=$con->con();
		if (isset($_POST["accion"])){
			$accion = $_POST["accion"];
			if ($accion == -1){  //es un nuevo registro
				$insert = $conectar->query("INSERT INTO productos (nombre, descripcion, precio_venta, stock, imagen, id_categoria ) VALUES ('".$_POST['nombre']."', '".$_POST['descripcion']."', '".$_POST['precio_venta']."', '".$_POST['stock']."','".$_POST['imagen']."','".$_POST['categoria']."')") or die("no fue posible insertar el registro".mysqli_error());
				if($insert){

				}else{
				echo "errrrro".$conectar->error;
			    }
			}
		}
	?>
		  <h1>Ingresa los datos que se te piden</h1>
		  <form action="altas.php" method="POST">
		  <input type="hidden" name="accion" value="-1">
		  <p>
		  <p>&nbsp;</p>
		  <p>Ingresa el nombre del producto</p>
		  <p>
		  <label for="nombre"></label>
		  <input type="text" name="nombre" id="textfield2"/>
		  </p>
		  <p>Ingresa la descripcion del producto</p>
		  <p>
		  <label for="descripcion"></label>
		  <input type="text" name="descripcion" id="textfield3"/>
		  </p>
		  <p>Ingresa el precio de venta</p>
		  <p>
		  <label for="precio"></label>
		  <input type="text" name="precio_venta" id="textfield4"/>
		  </p>
		  <p>Ingresa el stock</p>
		  <p>
		  <label for="stock"></label>
		  <input type="text" name="stock" id="textfield5"/>
		  </p>
		  <p>Ingresa la imagen</p>
		  <p>
		  <label for="imagen"></label>
		  <input type="text" name="imagen" id="textfield6"/>
		  </p>
		  <p>Ingresa la categoria</p>
		  <p>
		  <label for="categoria"></label>
		  <input type="text" name="categoria" id="textfield7"/>
		  </p>
		  <p>
		  <input type="submit" name="btn" id="button" value="Enviar" />
		  </p>
		</form>
		<?php
		include_once 'piepagina.php'; 
		?>
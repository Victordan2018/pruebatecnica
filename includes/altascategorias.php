<?php
require_once 'conexion_1.php';
//require_once 'intropage.php';
?>
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<?php
    $con= new Conexion();
    $conectar=$con->con();
		if (isset($_POST["accion"])){
			$accion = $_POST["accion"];
			if ($accion == -1){  //es un nuevo registro
				$insert = $conectar->query("INSERT INTO categorias (nombre, descripcion, color) VALUES ('".$_POST['nombre']."', '".$_POST['descripcion']."', '".$_POST['color']."')") or die("no fue posible insertar el registro".mysqli_error());
				if($insert){

				}else{
				echo "errrrro".$conectar->error;
			    }
			}
		}
		include_once 'encabezado.php'; 
	?>
		  <h1>Ingresa los datos que se te piden</h1>
		  <form action="altascategorias.php" method="POST">
		  <input type="hidden" name="accion" value="-1">
		  <p>
		  <p>&nbsp;</p>
		  <p>Ingresa el nombre de la categoria</p>
		  <p>
		  <label for="nombre"></label>
		  <input type="text" name="nombre" id="textfield2"/>
		  </p>
		  <p>Ingresa la descripcion de la categoria</p>
		  <p>
		  <label for="descripcion"></label>
		  <input type="text" name="descripcion" id="textfield3"/>
		  </p>
		  <p>Ingresa el color</p>
		  <p>
		  <label for="color"></label>
		  <input type="text" name="color" id="textfield4"/>
		  </p>
		  <p>
		  <input type="submit" name="btn" id="button" value="Enviar" />
		  </p>
		</form>
		<?php 
		include_once 'piepagina.php'; 
		?>
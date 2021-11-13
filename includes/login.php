<?php
session_start();
require_once 'conexion_1.php'; 
include_once 'header.php'; 
$con =new Conexion;
$conectar=$con->con();

if(isset($_SESSION["session_username"])){
	// echo "Session is set"; // for testing purposes
	header("Location: includes/listar.php");
}else{
	//header("Location: index.php");
}

if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$query =$conectar->query('SELECT * FROM login WHERE nombre_usuario="'.$username.'" AND contrasena="'.$password.'" ');

		$numrows=mysqli_num_rows($query);
		if($numrows!=0){
			while($row=mysqli_fetch_assoc($query)){
			$dbusername=$row['nombre_usuario'];
			$dbpassword=$row['contrasena'];
			}

			if($username == $dbusername && $password == $dbpassword){
				$_SESSION['session_username']=$username;
				/* Redirect browser */
				//header("Location: Marco.html");
				header("Location: includes/listar.php");
			}
		} else {

			$message = "Nombre de usuario ó contraseña invalida!";
		}

	} else {
		$message = "Todos los campos son requeridos!";
	}
}
?>

<div class="container mlogin">
<div id="login">

<!--<h1>Logueo</h1>-->
<form name="loginform" id="loginform" action="" method="POST">
<p>
<label for="user_login">Nombre De Usuario<br />
<input type="text" name="username" id="username" class="input" value="" size="20" /></label>
</p>
<p>
<label for="user_pass">Contraseña<br />
<input type="password" name="password" id="password" class="input" value="" size="20" /></label>
</p>
<p class="submit">
<input type="submit" name="login" class="button" value="Entrar" />
</p>
<p class="regtext">Eres el unico usuario registrado <a href="register.php" ></a>!</p>
</form>

</div>

</div>
<?php
include_once 'piepagina.php';
if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} 
?>

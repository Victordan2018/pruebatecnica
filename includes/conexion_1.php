<?php
class Conexion{
    //Creamos un m�todo est�tico que no necesita ser instanciado
    public static function con(){/*
     
    //new mysqli creamos o instanciamos el objeto mysqli
    //new mysqli('servidor','usuario','contrase�a','nombre de la BD');
        $con=new mysqli("localhost", "root", "", "quimicos");
             
       //llamamos a la conexi�n y hacemos una consulta para utilizar UTF-8
        $con->set_charset('utf8');
 
       //devolvemos la conexi�n para que pueda ser utilizada en otros m�todos
        return $con; */
        //$mysqli = new mysqli('localhost', 'root', '', 'quimicos');
        $mysqli = mysqli_connect('localhost', 'root', '', 'pruebatecnica');
    
    if($mysqli->connect_error){
        
        die('Error en la conexion' . $mysqli->connect_error);
        
    }
    return $mysqli;
    }
}
?>

<?php

require_once "conexion.php";
if(!empty($_POST["btn-ingresar"])){
    if(empty($_POST["email"]) and empty($_POST["password"])){
        echo  '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS </div>';
    }else {
        $usuario=$_POST["email"];
        $password=$_POST["password"];
        $sql = $conexion->query("SELECT * FROM usuario WHERE usuario = '$usuario' and password='$password'");

        if($datos=$sql->fetch_object()){
             //Incio de sesion
            session_start();

            //variables de sesion
            $_SESSION["autentificado"]=true;
            $_SESSION["usuario"]=$_POST["email"];

            header("Location: index.php");
        }else{
             echo  '<div class="alert alert-danger">USUARIO O CONTRASEÑA INCORRECTO</div>';
        }
    		
    }
}


    



	



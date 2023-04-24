<?php 

include 'conexion.php';

//$pdo = new Conexion();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['ci'])){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE ci=:ci");
        $stmt->bindParam(":ci", $_GET["ci"], PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 OK TENGO DATOS");
        echo json_encode($stmt->fetchAll());
        exit;
        //para verificar en la url de nuestro if, un solo valor  localhost/p9/index.php?ci=1
    }else{
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 OK TENGO DATOS");
        echo json_encode($stmt->fetchAll());
        exit;
    }
 }   


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $stmt = Conexion::conectar()->prepare("INSERT INTO usuario (ci, usuario, password) VALUES (:ci, :usuario, :password)");
        $stmt->bindValue(":ci", $_POST["ci"]);
        $stmt->bindValue(":usuario", $_POST["usuario"]);
        $stmt->bindValue(":password", $_POST["password"]);       
        if($stmt->execute()){
			header("HTTP/1.1 200 OK");
            exit;
		}
    }

    if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        $stmt = Conexion::conectar()->prepare("UPDATE usuario SET usuario = :usuario, password = :password WHERE ci = :ci");

        $stmt->bindParam(":ci", $_GET["ci"], PDO::PARAM_INT);
        $stmt->bindValue(":usuario", $_GET["usuario"]);
        $stmt->bindValue(":password", $_GET["password"]);       
        if($stmt->execute()){
			header("HTTP/1.1 200 OK");
            exit;
		}
    }

     if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        $stmt = Conexion::conectar()->prepare("DELETE FROM usuario WHERE ci=:ci");
        $stmt->bindParam(":ci", $_GET["ci"], PDO::PARAM_INT);
        $stmt->execute();
        header("HTTP/1.1 200 OK");
        exit;
    }
    

<?php 
session_start();
require_once("model/usuarios_model.php");


function home(){
    $mensaje="";
    $usuario=new Usuarios_model();

if(isset($_POST["identificar"])){
    $nombre= isset($_POST["nombre"])?$_POST["nombre"]:"";
    $passw= isset($_POST["passwd"])?$_POST["passwd"]:"";
    if($usuario->login($nombre,$passw)){
        $_SESSION["usuario"]= $nombre;  
    }else {
        $mensaje="Usuario o contraseña incorrecto";
    echo '<script>alert("'.$mensaje.'")</script>';
    }
}
require_once("view/usuarios_view.php");
}




    
?>
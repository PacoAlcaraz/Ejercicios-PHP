<?php 
session_start();
require_once("model/comentarios_model.php");


function home(){
    
    $comentarios= new Comentarios_model();
    $array_comentarios= $comentarios->get_comentarios();
    
    require_once("view/comentarios_view.php");
}

function gestionar(){
    $comentarios=new Comentarios_model();
    
    
    if((isset($_POST["eliminar"]))){
        $mensaje= $comentarios->eliminar_comentario($_POST["borrar_comentario"]);
        echo '<script>alert("'.$mensaje.'")</script>';

    }

    if(isset($_POST["subir"])){
        
        $datos = file("fichero.txt");
            foreach ($datos as  $value) {
                list($titulo, $autor, $comentario) = explode(";", $value);
                $comentarios->insertar_datos($titulo,$autor,$comentario);   
            }   
    }
    $array_comentarios= $comentarios->get_comentariosUser($_SESSION["usuario"]);
    require_once("view/gestionar_view.php");
}

function desconectar(){
    session_start();
    unset($_SESSION["usuario"]); 
    session_destroy();
    header("Location: index.php");
}

?>
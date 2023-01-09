<?php 
class Comentarios_model{
    private $db;
    private $comentarios;

    public function __construct(){
        require_once("model/conectar.php");
        $this->db= Conectar::conexion(); //llamar metodo estático de otra clase usamos los ::
        $this->comentarios= array();
    }

    public function get_comentarios(){
        $sql = "SELECT titulo,autor,comentario FROM comentarios";
        $consulta= $this->db->query($sql);
        while($registro= $consulta->fetch_assoc()){
            $this->comentarios[] = $registro;
        }
        return $this->comentarios;
    }

    public function get_comentariosUser($usuario){
        
        $sql = "SELECT titulo,autor,comentario,autor_comentario FROM comentarios where autor_comentario = '".$usuario."'";
        $consulta= $this->db->query($sql);
        
        while($registro= $consulta->fetch_assoc()){
            $this->comentarios[] = $registro;
            
        }
        return $this->comentarios;

    }

      public function insertar_datos($titulo,$autor,$descripcion){
        $sql= "INSERT INTO comentarios (titulo, autor, comentario, autor_comentario) values ('$titulo','$autor','$descripcion','".$_SESSION["usuario"]."')";
        
        if($consulta= $this->db->query($sql)){
            $resultado= "La imagen ".$titulo." ha sido guardada";
        }else $resultado= "No se ha podido subir la imagen";
            return $resultado;
    } 

    public function eliminar_comentario($nombre){
        $sql= "DELETE FROM comentarios where titulo='$nombre'";
        
        if($consulta= $this->db->query($sql)){
            $resultado= "Libro ".$nombre." ha sido eliminada";
        }else $resultado= "Libro ".$nombre." no ha podido ser eliminada";
          return $resultado;
          
    } 
}

?>
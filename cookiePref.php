<?php 
if($_POST['cookies']== 1){
    setcookie("preferencia_asiento", $_POST['asiento'], time()+(3600*24));
    setcookie("nombre", $_POST['nombre'], time()+(3600*24));
}else{
    echo "Debe habilitar cookies para continuar";
}


?>
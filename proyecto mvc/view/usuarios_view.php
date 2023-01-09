<?php

require_once("menu_view.php");

if (isset($_SESSION["usuario"])) {
    
    echo "<h1 style='margin-top: 150px;'>Bienvenido".$_SESSION["usuario"]."</h1>";
    
} else {
?>

    <div style="margin-top: 150px;">
        <form action="" method="post">
            <fieldset class="formularioUser">
                <legend>Log in</legend>
                
                    <input placeholder="nombre..." id="nombre" name="nombre" type="text">
                    <input placeholder="contraseña..." id="passwd" name="passwd" type="password">
                <input class="boton" type="submit" value="Enviar" name="identificar">
            </fieldset>
        </form>
    </div>

<?php
}

?>
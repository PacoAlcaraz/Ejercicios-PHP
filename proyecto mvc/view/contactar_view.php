<?php
require_once("menu_view.php");
?>


    <div style="margin-top: 150px;" >
        <form action="" method="post">
            <fieldset>
                <legend>Envia email</legend>
                <input placeholder="Nombre..." id="nombre" name="nombre" type="text">
                <input placeholder="Mail..." id="correo" name="correo" type="text">
                <textarea name="contenido" id="contenido" cols="80" rows="10" placeholder="Escriba aqui..."></textarea>
                <input class="boton" type="submit" value="Enviar" name="enviar">
            </fieldset>
        </form>
        <p><?php echo $mensaje; ?></p>
    </div>

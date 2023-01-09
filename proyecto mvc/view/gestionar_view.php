<?php 
require_once("menu_view.php");
echo "<div style='margin-top: 150px;'>
        <h1>Carga de Libros:</h1>
        <form action='' method='POST' enctype='multipart/form-data'>
            <input type='file' name='archivo' id='archivo'>
            <input class='boton' type='submit' value='Enviar' name='subir'>
        </form>    
    </div>";
echo "<div>
        <h1>Libros</h1>";
        ?>
        <div>
        <table>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Descripcion</th>
                    <th>Usuario</th>
                    <th>Borrar</th>
                    
                </tr>
                <?php
                
                foreach ($array_comentarios as $value) {
                    if (is_array($value)) {
                        echo "<tr>";
                        foreach ($value as $key => $value2) {
                            echo "<td>" . $value2 . "</td>";
                        }
                        echo '<td><form action="" method="POST">
                            <input type="text" name="borrar_comentario" value="' . $value["titulo"] . '" hidden />
                              <input type="submit" name="eliminar" id="eliminar" value="eliminar" />
                            </form></td>';
                    }
                }
                ?>
            </table>
        
        </div>
        
        <?php       

?>
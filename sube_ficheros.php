<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["envio"])){
        $carpeta= "media/";
        if (isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0] ) {
             //recorremos el array con el nombre de los ficheros que se desea subir

             for ($i=0; $i < count($_FILES["archivo"]["name"]); $i++) { 
                if(file_exists($carpeta) || @mkdir($carpeta)){
                    $origen= $_FILES["archivo"]["tmp_name"][$i];
                    $destino= $carpeta.$_FILES["archivo"]["name"][$i];
                    if (@move_uploaded_file($origen, $destino)) {
                        echo "<p>fichero subido correctamente</p>";
                    }else echo "<p>error al subir el fichero</p>";
                }else echo "<p>no se ha podido crear la carpeta</p>";
             }
        }
    }  
    
    ?>
    
    <form action="sube_ficheros.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo[]" multiple="multiple" id="archivo">
        <input type="submit" value="Sube fichero" name="envio">
    </form>
</body>
</html>
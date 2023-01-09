<?php 

?>    
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
        <div class="w3-row-padding w3-padding-16 w3-center">
            <?php
            $contador=0; 
            foreach($array_comentarios as $value){
                
                if(is_array($value)){
                    echo "
                            <div class='w3-half'>
                                <h3>".$value["titulo"]."</h3>
                                <p>".$value["autor"]."</p>
                                <p>".$value["comentario"]."</p>
                            </div>    ";
                    $contador++;        
                    if($contador%2==0){
                        echo "</div>
                        <div class='w3-row-padding w3-padding-16 w3-center'>";
                    }
                }
            }
 

?>
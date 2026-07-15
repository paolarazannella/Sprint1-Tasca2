<?php

function grado($nota){

if ($nota >= 60){
    echo "Primera divisió";
} elseif ($nota >= 45 && $nota <= 59){
    echo "Segona divisió";
} elseif ($nota >= 33 && $nota <= 44){
    echo "Tercera divisió";
} else{
    return "Reprovat";
}
}

echo grado(12);
?>
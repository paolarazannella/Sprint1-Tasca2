<?php

function suma($puntuacion1, $puntuacion2, $puntuacion3)
{
    return $puntuacion1 + $puntuacion2 + $puntuacion3;
}


function media($suma)
{
    return $suma / 3;
}

function clasificacion($media)
{
    if ($media < 4000) {
        return "Principiante";
    } elseif ($media < 8000) {
        return "Intermedio";
    } else {
        return "Profesional";
    }
}

$puntuacion1 = 3000;
$puntuacion2 = 5000;
$puntuacion3 = 7000;

    $suma = suma($puntuacion1, $puntuacion2, $puntuacion3);
    $media = media($suma);
    $clasificacion = clasificacion($media);

    // Mostramos los resultados
    echo "La suma es: " . $suma;
    echo "<br>";
    echo "La media es: " . $media;
    echo "<br>";
    echo "La clasificación es: " . $clasificacion;

?>
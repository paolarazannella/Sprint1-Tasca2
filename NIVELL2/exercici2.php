<?php

function calculateAddition($puntuacion1, $puntuacion2, $puntuacion3)
{
    return $puntuacion1 + $puntuacion2 + $puntuacion3;
}

function calculateAverage($calculateAddition)
{
    return $calculateAddition / 3;
}

function pointsClassification($calculateAverage)
{
    if ($calculateAverage < 4000) {
        return "Principiante";
    } elseif ($calculateAverage < 8000) {
        return "Intermedio";
    } else {
        return "Profesional";
    }
}

$puntuacion1 = 3000;
$puntuacion2 = 5000;
$puntuacion3 = 7000;

    $addition = calculateAddition($puntuacion1, $puntuacion2, $puntuacion3);
    $media = calculateAverage($addition);
    $classification = pointsClassification($media);

    // Mostramos los resultados
    echo "La suma es: " . $addition;
    echo "<br>";
    echo "La media es: " . $media;
    echo "<br>";
    echo "La clasificación es: " . $classification;


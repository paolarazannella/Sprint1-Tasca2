<?php

function evaluateGrade($percentage){

if ($percentage < 0 || $percentage > 100) {
    throw new InvalidArgumentException("The percentage must be between 0 and 100");
    }

    if ($percentage >= 60){
    return "Primera divisió";
} elseif ($percentage >= 45 && $percentage <= 59){
    return "Segona divisió";
} elseif ($percentage >= 33 && $percentage <= 44){
    return "Tercera divisió";
} else{
    return "Reprovat";
}
}

try {
    echo "Student´s grade: " . evaluateGrade(45) . "<br>";
} catch (InvalidArgumentException $e) {
    echo "". $e->getMessage();}

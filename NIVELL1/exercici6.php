<?php
function isBitten(){

$num = rand(0, 1);

if($num == 1){
        return TRUE;
    }else{
        return FALSE;
    }
}

if(isBitten()){
    echo "Is bitten";
    } else {
        echo "Is not bitten";}

?>
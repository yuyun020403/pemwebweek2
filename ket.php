<?php

function badan($bmi){
if($bmi <17 ){
    echo "kurus";
}elseif ($bmi <23){
    echo "Normal";
}elseif ($bmi <27){
    echo "Kegemukan";
}elseif ($bmi >27){
    echo "Obesitas";
}

}

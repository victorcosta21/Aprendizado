<?php

$altura = 1.70;
$peso = 56.00;
$imc = $peso / $altura ** 2;

echo "Seu imc é de $imc e seu status é de: ";

if($imc < 18.5)
    echo "Abaixo do Peso";
    elseif($imc >= 18.5 && $imc <= 24.9){
    echo "Peso Normal";
}    
    elseif($imc >= 25.0 && $imc <= 29.9){
    echo "Pré-obesidade";
}
    elseif($imc >= 30.0 && $imc <= 34.9){
    echo "Obesidade Grau 1";
}    
    elseif($imc >= 35.0 && $imc <= 39.9){
    echo "Obesidade Grau 2";
}    
    else
    echo "Obesidade Grau 3";



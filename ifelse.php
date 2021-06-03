<?php

// calculadora com PHP

$value1 = 10;
$value2 = 3;
$operador = "%";

// teste de operação:

$var =  1;

if ($operador == "+") {
    echo "Soma = " . ($value1 + $value2);
} elseif ($operador == "-") {
    echo "Subtração = " . ($value1 - $value2);
} elseif ($operador == "/") {
    echo "Divisão = " . ($value1 / $value2);
} elseif ($operador == "*") {
    echo "Multiplicação = " . ($value1 * $value2);
} else {
    echo "Operador não existe!";
}

?>
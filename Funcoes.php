<?php

function nameFunction($p)
{
    //action
    //return
}

function calculator($num1, $num2, $op)
{
    if ($op == "+") {
        return $num1 + $num2;
    } elseif ($op === "-") {
        return $num1 - $num2;
    } elseif ($op === "/") {
        return $num1 - $num2;
    } elseif ($op === "*") {
        return $num1 - $num2;
    } else {
        return "Error!";
    }
}

echo calculator(4, 6, "+");

?>
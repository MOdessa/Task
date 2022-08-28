<?php

function myArrowFunc ($argument)
{
    $stringLeft = '<';
    $stringRight = '>';

    return $result = (is_int($argument)) ? str_repeat($stringLeft, $argument) . str_repeat($stringRight, $argument) : "Please, write integer number!";
}

echo myArrowFunc(3),'<br>';
echo myArrowFunc(9),'<br>';
echo myArrowFunc(2.3),'<br>';

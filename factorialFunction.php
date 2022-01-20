<?php

function factorialLoop(int $value):int
{
    $total = 1;

    for( $i = 1; $i <=$value; $i++ )
    {
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));

var_dump(1*2*3*4*5);

function factorialRecursif(int $value):int
{
    if( $value == 1 )
    {
        return 1;
    } else
    {
        return $value * factorialRecursif($value-1);
    }
}

var_dump(factorialRecursif(5));

?>
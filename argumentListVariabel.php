<?php

function sumAll(...$values)
{
    $total = 0;

    foreach($values as $value)
    {
        $total += $value;
    }

    echo "Total ". implode(",",$values) . " = $total " . PHP_EOL;

}

sumAll(1,2,3,4,5);

//menampilkan data array variable menggunakan function

$contohData = [1,2,3,4,5];

sumAll(...$contohData);

?>
<?php

    function sum(int $first, int $last)
    {
        $total = $first + $last;

        echo "Jumlah $first + $last = $total ". PHP_EOL;
    }

    sum(10,10);
?>
<?php

$data = [1,2,3,4,5,6,7,8,9,10];

//array map
$dataResult = array_map(fn(int $value) => $value*10, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

$nama = [
    "first name" => "Dimas",
    "last name" => "Susanto"
];

var_dump(array_keys($nama));
var_dump(array_values($nama));

?>
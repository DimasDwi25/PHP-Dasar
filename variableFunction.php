<?php

function foo()
{
    echo "FOO " . PHP_EOL;
}

function boo()
{
    echo "BOO" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "boo";
$functionYangAkanDipanggil();


function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName " . PHP_EOL;
}

function sampleFunction(string $name ): string
{
    return "Sample $name";
}

sayHello ("Dimas", "sampleFunction");
sayHello("Dimas", "strtoupper");
sayHello("Dimas", "strtolower");

?>
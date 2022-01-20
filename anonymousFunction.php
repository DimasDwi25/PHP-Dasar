<?php
//Anonymous Function

$sayHello = function ($name)
{
    echo "Hello $name " . PHP_EOL;
};

$sayHello("Dimas");

//Anonymous Function sebagai argument

function sayGoodbye(string $name,$filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName ". PHP_EOL;
}

sayGoodbye("Dimas", function(string $name):string {
    return strtoupper($name);
});

//anonymous function dalam sebuah variable function

$filterFunction = function(string $name):string
{
    return strtoupper($name);
};

sayGoodbye("dimas", $filterFunction);

//mengakses variable diluar closure (anonymous function)

$firstName = "dimas";
$lastName = "dwi";

$sayHello = function () use($firstName, $lastName)
{
    echo "Hello $firstName $lastName". PHP_EOL;
};

$sayHello();


 



?>
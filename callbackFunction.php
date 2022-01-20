<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);

    echo "Hello $finalName". PHP_EOL;
}

sayHello("Dimas", "strtoupper");
sayHello("DIMAS", "strtolower");
//anonymous function
sayHello("Dimas", function(string $name):string{
    return strtoupper($name);
});
//arrow function
sayHello("dimas", fn($name) => strtoupper($name));


?>
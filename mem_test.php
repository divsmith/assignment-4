<?php

include "mem.php";

function TestConstructor()
{
    // arrange and act
    $mem = new Mem(7);

    // assert
    print_r($mem);
    if ($mem->count() != 1) 
    {
        die('TestConstructor FAILED!' . PHP_EOL);
    }
}

TestConstructor();
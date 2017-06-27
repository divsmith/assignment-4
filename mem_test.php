<?php

include "mem.php";
include "DvdTitle.php";

function TestConstructor()
{
    // arrange and act
    $dvd = new DvdTitle();
    $mem = new Mem($dvd);

    // assert
    print_r($mem);
    if ($mem->count() != 1)
    {
        die('TestConstructor FAILED!' . PHP_EOL);
    }
}

TestConstructor();

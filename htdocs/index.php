<?php

include "../mySQL.php";

fInsertToDatabase('B002ZG980U', 'Inception', 2.22);

$results = fListFromDatabase();

foreach ($results as $result)
{
    var_dump($result);
}

fDeleteFromDatabase('B002ZG980U');

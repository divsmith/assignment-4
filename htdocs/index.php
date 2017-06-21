<?php

include "../mySQL.php";

fInsertDVDToDatabase('B002ZG980U', 'Inception', 2.22);

$results = fListDVDsFromDatabase();

foreach ($results as $result)
{
    var_dump($result);
}

fDeleteDVDFromDatabase('B002ZG980U');

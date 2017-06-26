<?php

include "../mySQL.php";
include "../dbConnect.php";

$db = fConnectToDatabase();

// Insert Movies into Database
fInsertDVDToDatabase($db, 'B002ZG980U', 'Inception', 2.22);
fInsertDVDToDatabase($db, 'B000AAF1U4', "Emperor's New Groove", 9.99);
fInsertDVDToDatabase($db, 'B003UESJH4', "The King's Speech", 4.00);
fInsertDVDToDatabase($db, 'B013TYXUXC', 'Interstellar', 12.42);
fInsertDVDToDatabase($db, 'B000P0J0AQ', 'The Matrix', 7.97);
fInsertDVDToDatabase($db, 'B00H7KJRVY', 'The Secret Life of Walter Mitty', 5.00);


// Show DVD results from database
$results = fListDVDsFromDatabase($db);

foreach ($results as $result)
{
    var_dump($result);
    echo "<img src=\"http://images.amazon.com/images/P/{$result['asin']}.01.MZZZZZZZ.jpg\"/>";
}

// Delete DVDs from database
//fDeleteDVDFromDatabase($db, 'B002ZG980U');
//fDeleteDVDFromDatabase($db, 'B000AAF1U4');
//fDeleteDVDFromDatabase($db, 'B003UESJH4');
//fDeleteDVDFromDatabase($db, 'B013TYXUXC');
//fDeleteDVDFromDatabase($db, 'B000P0J0AQ');
//fDeleteDVDFromDatabase($db, 'B00H7KJRVY');

// Insert Actors into Database
$id[] = fInsertActorIntoDatabase($db, 'Bill', 'Murray');
$id[] = fInsertActorIntoDatabase($db, 'Keanu', 'Reeves');
$id[] = fInsertActorIntoDatabase($db, 'Lawrence', 'Fishburne');
$id[] = fInsertActorIntoDatabase($db, 'Matthew', 'McConaughey');
$id[] = fInsertActorIntoDatabase($db, 'David', 'Spade');
$id[] = fInsertActorIntoDatabase($db, 'John', 'Goodman');
$id[] = fInsertActorIntoDatabase($db, 'Anne', 'Hathaway');
$id[] = fInsertActorIntoDatabase($db, 'Ben', 'Stiller');
$id[] = fInsertActorIntoDatabase($db, 'Kirsten', 'Wiig');
$id[] = fInsertActorIntoDatabase($db, 'Leonardo', 'DiCaprio');
$id[] = fInsertActorIntoDatabase($db, 'Ellen', 'Page');
$id[] = fInsertActorIntoDatabase($db, 'Colin', 'Furth');
$id[] = fInsertActorIntoDatabase($db, 'Geoffrey', 'Rush');

// List results from Actor's table
$results = fListActorsFromDatabase($db);

foreach ($results as $result)
{
    var_dump($result);
}

// Insert records into pivot table
fInsertDVDActor('B002ZG980U', $id[9]);
fInsertDVDActor('B002ZG980U', $id[9]);

// Delete actors from database
//foreach ($id as $item)
//{
//    fDeleteActorFromDatabase($db, $item);
//}

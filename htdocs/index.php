<?php

include "../mySQL.php";

// Insert Movies into Database
fInsertDVDToDatabase('B002ZG980U', 'Inception', 2.22);
fInsertDVDToDatabase('B000AAF1U4', "Emperor's New Groove", 9.99);
fInsertDVDToDatabase('B003UESJH4', "The King's Speech", 4.00);
fInsertDVDToDatabase('B013TYXUXC', 'Interstellar', 12.42);
fInsertDVDToDatabase('B000P0J0AQ', 'The Matrix', 7.97);
fInsertDVDToDatabase('B00H7KJRVY', 'The Secret Life of Walter Mitty', 5.00);


// Show DVD results from database
$results = fListDVDsFromDatabase();

foreach ($results as $result)
{
    var_dump($result);
    echo "<img src=\"http://images.amazon.com/images/P/{$result['asin']}.01.MZZZZZZZ.jpg\"/>";
}

// Delete DVDs from database
fDeleteDVDFromDatabase('B002ZG980U');
fDeleteDVDFromDatabase('B000AAF1U4');
fDeleteDVDFromDatabase('B003UESJH4');
fDeleteDVDFromDatabase('B013TYXUXC');
fDeleteDVDFromDatabase('B000P0J0AQ');
fDeleteDVDFromDatabase('B00H7KJRVY');

// Insert Actors into Database
$id[] = fInsertActorIntoDatabase('Bill', 'Murray');
$id[] = fInsertActorIntoDatabase('Keanu', 'Reeves');
$id[] = fInsertActorIntoDatabase('Lawrence', 'Fishburne');
$id[] = fInsertActorIntoDatabase('Matthew', 'McConaughey');
$id[] = fInsertActorIntoDatabase('David', 'Spade');
$id[] = fInsertActorIntoDatabase('John', 'Goodman');
$id[] = fInsertActorIntoDatabase('Anne', 'Hathaway');
$id[] = fInsertActorIntoDatabase('Ben', 'Stiller');
$id[] = fInsertActorIntoDatabase('Kirsten', 'Wiig');
$id[] = fInsertActorIntoDatabase('Leonardo', 'DiCaprio');
$id[] = fInsertActorIntoDatabase('Ellen', 'Page');
$id[] = fInsertActorIntoDatabase('Colin', 'Furth');
$id[] = fInsertActorIntoDatabase('Geoffrey', 'Rush');

// List results from Actor's table
$results = fListActorsFromDatabase();

foreach ($results as $result)
{
    var_dump($result);
}

// Delete actors from database
foreach ($id as $item)
{
    fDeleteActorFromDatabase($item);
}

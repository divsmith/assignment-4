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

// Insert records into pivot table
fInsertDVDActor($db, 'B002ZG980U', $id[9]);
fInsertDVDActor($db, 'B002ZG980U', $id[10]);
fInsertDVDActor($db, 'B000AAF1U4', $id[4]);
fInsertDVDActor($db, 'B000AAF1U4', $id[5]);
fInsertDVDActor($db, 'B003UESJH4', $id[11]);
fInsertDVDActor($db, 'B003UESJH4', $id[12]);
fInsertDVDActor($db, 'B013TYXUXC', $id[3]);
fInsertDVDActor($db, 'B013TYXUXC', $id[6]);
fInsertDVDActor($db, 'B000P0J0AQ', $id[1]);
fInsertDVDActor($db, 'B000P0J0AQ', $id[2]);
fInsertDVDActor($db, 'B00H7KJRVY', $id[7]);
fInsertDVDActor($db, 'B00H7KJRVY', $id[8]);

// List results from actor_dvd table
$results = fListActorDvd($db);
$dvdResults = [];

foreach ($results as $result)
{
    if (!in_array($result['asin'], $dvdResults))
    {
        $dvdResults[] = $result['asin'];
        echo $result['asin'] . '<br/>';
        echo $result['title'] . '<br/>';
        echo $result['price'] . '<br/>';
        echo "<img src=\"http://images.amazon.com/images/P/{$result['asin']}.01.MZZZZZZZ.jpg\"/><br/>";
        echo $result['fname'] . " " . $result['lname'] . '<br/>';
    }
    else
    {
        echo $result['fname'] . " " . $result['lname'] . '<br/>';
    }

    echo '<br/>';
}

// Delete records from pivot table
fDeleteDVDActor($db, 'B002ZG980U', $id[9]);
fDeleteDVDActor($db, 'B002ZG980U', $id[10]);
fDeleteDVDActor($db, 'B000AAF1U4', $id[4]);
fDeleteDVDActor($db, 'B000AAF1U4', $id[5]);
fDeleteDVDActor($db, 'B003UESJH4', $id[11]);
fDeleteDVDActor($db, 'B003UESJH4', $id[12]);
fDeleteDVDActor($db, 'B013TYXUXC', $id[3]);
fDeleteDVDActor($db, 'B013TYXUXC', $id[6]);
fDeleteDVDActor($db, 'B000P0J0AQ', $id[1]);
fDeleteDVDActor($db, 'B000P0J0AQ', $id[2]);
fDeleteDVDActor($db, 'B00H7KJRVY', $id[7]);
fDeleteDVDActor($db, 'B00H7KJRVY', $id[8]);


// Delete actors from database
foreach ($id as $item)
{
    fDeleteActorFromDatabase($db, $item);
}

// Delete DVDs from database
fDeleteDVDFromDatabase($db, 'B002ZG980U');
fDeleteDVDFromDatabase($db, 'B000AAF1U4');
fDeleteDVDFromDatabase($db, 'B003UESJH4');
fDeleteDVDFromDatabase($db, 'B013TYXUXC');
fDeleteDVDFromDatabase($db, 'B000P0J0AQ');
fDeleteDVDFromDatabase($db, 'B00H7KJRVY');

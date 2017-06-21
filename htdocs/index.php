<?php

//include "../dbConnect.php";
include "../mySQL.php";

//$name = "Kilroy";
//
//$db = fConnectToDatabase();
//
//$stmt = $db->prepare("INSERT INTO test (name) VALUES (:name)");
//$stmt->bindParam(":name", $name);
//$stmt->execute();
//$id = $db->lastInsertId();
//print_r($id);

//$statement = $db->prepare("SELECT * FROM test");
//$statement->execute();
//while ($row = $statement->fetch()) {
//    print_r($row);
//}

fInsertToDatabase('B002ZG980U', 'Inception', 2.22);

$results = fListFromDatabase();

foreach ($results as $result)
{
    var_dump($result);
}

fDeleteFromDatabase('B002ZG980U');

//echo "<!DOCTYPE html>
//<html>
//<head>
//    <title>test</title>
//</head>
//<body>
//<p>Not implemented</p>
//</body>";
<?php
// database functions ************************************************

function fInsertDVDActor($db, $asin,  $actorID) {
    if (!is_string($asin) || !is_numeric($actorID))
    {
        return false;
    }

    $sql = "INSERT INTO actor_dvd (asin, actorID) VALUES (:asin, :actorID)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':asin', $asin);
    $statement->bindParam(':actorID', $actorID);

    return $statement->execute();
}

function fDeleteDVDActor($db, $asin, $actorID) {
    if (!is_string($asin) || !is_numeric($actorID))
    {
        return false;
    }

    $sql = "DELETE FROM actor_dvd WHERE asin = :asin AND actorID = :actorID";
    $statement = $db->prepare($sql);
    $statement->bindParam(':asin', $asin);
    $statement->bindParam(':actorID', $actorID);

    return $statement->execute();
}

function fInsertDVDToDatabase($db, $asin, $title, $price) {
    if (!is_string($asin) || !is_string($title) || !is_double($price))
    {
        return false;
    }

    $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES (:asin, :title, :price)";
    // TODO: Fill in the rest of the fuction
    $statement = $db->prepare($sql);
    $statement->bindParam(':asin', $asin);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':price', $price);

    return $statement->execute();
}

function fListDVDsFromDatabase($db) {
  $sql = 'SELECT * FROM dvdtitles';
  $statement = $db->prepare($sql);
  $statement->execute();

  return $statement->fetchAll();
}

function fDeleteDVDFromDatabase($db, $asin) {
    if (!is_string($asin))
    {
        return false;
    }
    $sql = "DELETE FROM dvdtitles WHERE asin = :asin";
    $statement = $db->prepare($sql);
    $statement->bindParam(':asin', $asin);

    return $statement->execute();
}

function fListActorsFromDatabase($db) {
    $sql = 'SELECT * FROM dvdActors';
    $statement = $db->prepare($sql);
    $statement->execute();

    return $statement->fetchAll();
}

function fInsertActorIntoDatabase($db, $fname, $lname) {
    if (!is_string($fname) || !is_string($lname))
    {
        return false;
    }

    $sql = "INSERT INTO dvdActors (fname, lname) VALUES (:fname, :lname)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':fname', $fname);
    $statement->bindParam(':lname', $lname);

    $result = $statement->execute();

    if ($result)
    {
      return $db->lastInsertId('actorID');
    }

    return $result;
}

function fDeleteActorFromDatabase($db, $actorID) {
    if (!is_numeric($actorID))
    {
        return false;
    }
    $sql = "DELETE FROM dvdActors WHERE actorID = :actorID";
    $statement = $db->prepare($sql);
    $statement->bindParam(':actorID', $actorID);

    return $statement->execute();
}

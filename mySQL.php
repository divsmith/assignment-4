<?php
// database functions ************************************************

include "dbConnect.php";

function fInsertDVDToDatabase($asin, $title, $price) {
  $db = fConnectToDatabase();
  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES (:asin, :title, :price)";
  // TODO: Fill in the rest of the fuction
  $statement = $db->prepare($sql);
  $statement->bindParam(':asin', $asin);
  $statement->bindParam(':title', $title);
  $statement->bindParam(':price', $price);

  $result = $statement->execute();
}

function fListDVDsFromDatabase() {
  $db = fConnectToDatabase();
  $sql = 'SELECT * FROM dvdtitles';
  $statement = $db->prepare($sql);
  $statement->execute();

  return $statement->fetchAll();
}

function fDeleteDVDFromDatabase($asin) {
  $db = fConnectToDatabase();
  $sql = "DELETE FROM dvdtitles WHERE asin = :asin";
  $statement = $db->prepare($sql);
  $statement->bindParam(':asin', $asin);

  return $statement->execute();
}

//function fDeleteFromDatabase() {
//  $sql = "DELETE FROM tblCustomers WHERE CustID=$deleteID";
//  // TODO: Fill in the rest of the fuction
//}
//
//function fListFromDatabase() {
//  $sql = 'SELECT custID, nameF, nameL FROM tblCustomers ORDER BY CustID';
//  // TODO: Fill in the rest of the fuction
//}
//?>

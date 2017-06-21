<?php
// database functions ************************************************

include "dbConnect.php";

function fInsertToDatabase() {
  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
  // TODO: Fill in the rest of the fuction
}

function fListFromDatabase() {
  $db = fConnectToDatabase();
  $sql = 'SELECT * FROM dvdtitles';
  $statement = $db->prepare($sql);
  $statement->execute();

  return $statement->fetchAll();
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

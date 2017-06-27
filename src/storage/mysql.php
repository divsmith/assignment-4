<?php

// database functions ************************************************

function ConnectToMySQL($dsn, $user, $password) {
   $db = new PDO($dsn, $user, $password);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   return $db;
}
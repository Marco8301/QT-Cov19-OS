<?php

try {
    $db = new PDO ("mysql:host=localhost; dbname=covid; charset=utf8", "root", "root");
    // $db = new PDO ("mysql:host=covid19-prd.c3yyzpjxs5ol.us-east-2.rds.amazonaws.com; dbname=covid; charset=utf8", "master", "zaq1xsw2cde3");
    // $db = new PDO ("mysql:host=covid.c3yyzpjxs5ol.us-east-2.rds.amazonaws.com; port=3306; dbname=covid; charset=utf8", "master", "zaq1xsw2cde3");
}

catch (PDOException $e) {
    echo "erreur : ".$e->getMessage();
}

?>
<?php

try {
    $db = new PDO ("mysql:host=localhost; dbname=covid; charset=utf8", "root", "root");
}

catch (PDOException $e) {
    echo "erreur : ".$e->getMessage();
}

?>

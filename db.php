<?php

try {
    $pdo = new PDO(
        'mysql:host=hostname;dbname=ssldb',
        'username',
        'password'
    );
} catch (Exception $ex) {
    die($ex->getMessage());
}

var_dump($pdo)

?>
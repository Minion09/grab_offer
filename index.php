<?php
session_start();

//$array = [1,2,3];
//list($array1, $array2) = array_chunk($array, 4);
//var_dump($array1);
////var_dump($array2);
//die();

$pdo = require './database_obj.php';

try {
    $statement = $pdo->prepare("SELECT * FROM products ORDER BY RAND() LIMIT 8");
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_CLASS);
    list($products1, $products2) = array_chunk($products, 4);

    $statement = $pdo->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 8");
    $statement->execute();
    $recent_products = $statement->fetchAll(PDO::FETCH_CLASS);
    list($recent_products1, $recent_products2) = array_chunk($recent_products, 4);

} catch (PDOException $e) {
    var_dump($e->getMessage());
    new Exception('Something went wrong.');
}


$view = 'dashboard.view.php';
require './layouts/main.view.php';
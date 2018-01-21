<?php
session_start();
$pdo = require '../database_obj.php';

try {
    $statement = $pdo->prepare("SELECT * FROM products");
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_CLASS);

} catch (PDOException $e) {
    var_dump($e->getMessage());
    new Exception('Something went wrong.');
}


$view = 'index.view.php';
require '../layouts/main.view.php';
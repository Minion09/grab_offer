<?php
session_start();
$config = require '../config.php';

$pdo = new PDO(
    $config['connection'].';dbname='.$config['name'],
    $config['username'],
    $config['password'],
    $config['options']
);

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
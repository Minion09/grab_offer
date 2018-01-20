<?php

$config = require '../config.php';

$pdo = new PDO(
    $config['connection'].';dbname='.$config['name'],
    $config['username'],
    $config['password'],
    $config['options']
);

try {
    $statement = $pdo->prepare("INSERT INTO products(title, description, price, offered_price, product_img_link)
      VALUES(:title, :description, :price, :offered_price, :product_img_link)");
    $statement->execute(
        [
            "title" => $_POST["title"],
            "description"=> $_POST["description"],
            "price"=> $_POST["price"],
            "offered_price"=> $_POST["offered_price"],
            "product_img_link" => $_POST["product_img_link"]
        ]
    );
    header('Location: /products/index.php');

} catch (PDOException $e) {
    var_dump($e->getMessage());
    throw new Exception('Something went wrong');
}

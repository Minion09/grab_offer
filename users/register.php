<?php

$config = require '../config.php';

$pdo = new PDO(
    $config['connection'].';dbname='.$config['name'],
    $config['username'],
    $config['password'],
    $config['options']
);

try {
    $statement = $pdo->prepare("INSERT INTO users(first_name, last_name, email, password)
      VALUES(:first_name, :last_name, :email, :password)");
    $statement->execute(
        [
            "first_name" => $_POST["first_name"],
            "last_name"=> $_POST["last_name"],
            "email"=> $_POST["email"],
            "password"=> $_POST["password"]
        ]
    );
    header('Location: /users/sign_up.php');

} catch (PDOException $e) {
    var_dump($e->getMessage());
    throw new Exception('Something went wrong');
}

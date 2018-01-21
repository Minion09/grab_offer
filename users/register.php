<?php

$pdo = require '../database_obj.php';


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
    $view = 'successfully_sign_up.view.php';
    require '../layouts/main.view.php';

} catch (PDOException $e) {
    var_dump($e->getMessage());
    throw new Exception('Something went wrong');
}

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
    $statement = $pdo->prepare("SELECT * FROM users where email = :email");
    $statement->execute(['email' => $_POST['email']]);
    $user = $statement->fetchAll(PDO::FETCH_CLASS);
    $user = reset($user);
    if($_POST['password'] == $user->password){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_role'] = $user->role;
        header('Location: /');
    } else {
        session_destroy();
        header('Location: /users/sign_in.php');
    }

} catch (PDOException $e) {
    var_dump($e->getMessage());
    new Exception('Something went wrong.');
}
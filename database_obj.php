<?php
$config = [
    'name' => 'learn_php',
    'username' => 'root',
    'password' => 'root',
    'connection' => 'mysql:host=localhost',
    'options' => [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
];

return new PDO(
    $config['connection'].';dbname='.$config['name'],
    $config['username'],
    $config['password'],
    $config['options']
);
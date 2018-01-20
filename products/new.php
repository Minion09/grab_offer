<?php

session_start();

if($_SESSION['user_id'] && $_SESSION['user_role'] == 'admin') {

    $view = 'new.view.php';
    require '../layouts/main.view.php';

} else {
    header('Location: /');
}
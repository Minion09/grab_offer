<?php
session_start();

$_SESSION['user_id'] = NIL;

session_destroy();

header('Location: /users/sign_in.php');
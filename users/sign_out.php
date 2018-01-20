<?php
session_start();

$_SESSION['user_id'] = NIL;
$_SESSION['user_role'] = NIL;

session_destroy();

header('Location: /');
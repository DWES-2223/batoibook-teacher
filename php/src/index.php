<?php
include_once('../vendor/autoload.php');
use App\User;
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

$user = $_SESSION['user'];
echo "<h1>Hola $user->nick</h1>";
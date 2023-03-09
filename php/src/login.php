<?php
include_once('../vendor/autoload.php');
use App\Connection;

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connection = new Connection();
    $connection->insert('users', [
        'email' => $email,
        'password' => $password
    ]);
    header('Location: ../index.php');
}

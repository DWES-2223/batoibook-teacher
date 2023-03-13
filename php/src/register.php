<?php
include_once('../vendor/autoload.php');
use App\Connection;


if (isset($_POST['nick']) && isset($_POST['email']) && isset($_POST['password'])) {
    $nick = $_POST['nick'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connection = new Connection();
    $connection->insert('users', [
        'nick' => $nick,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
    header('Location: ./index.php');
} else {
    include_once ('./views/register.php');
}

<?php
include_once('../vendor/autoload.php');
use App\User;

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = User::login($email,$password);

    header('Location: ../index.php');
}

<?php
include_once('../vendor/autoload.php');
use App\User;

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = User::login($email, $password);
    if ($user) {
        session_start();
        $_SESSION['user'] = $user;
        header('Location: index.php');
    } else {
        header('Location: login.php?email='.$email);
    }
} else {
    $email = $_GET['email'] ?? '';
    include_once ('./views/login.php');
}

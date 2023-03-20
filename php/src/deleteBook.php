<?php
include_once('../vendor/autoload.php');

use App\Book;

session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
} else {
    $user = $_SESSION['user'] ?? null;
}


$book = Book::getById($_GET['book']);
if ($book->idUser != $user->id) {
    header('Location: books.php');
} else {
    Book::delete($book->id);
    header("Location: books.php");
}

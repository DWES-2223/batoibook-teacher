<?php
include_once('../vendor/autoload.php');

use App\Book;

session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
} else {
    $user = $_SESSION['user'] ?? null;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        $_POST['photo'] = $target_file;
        $_POST['idUser'] = $user->id;
        $id = Book::update($_POST, $_POST['id']);
        header('Location: book.php?book='.$id);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    $book = Book::getById($_GET['book']);
    include_once('./views/updateBook.view.php');
}

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/../vendor/autoload.php');

use App\Book;

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['book'])) {
        $book = Book::getById($_GET['book']);
        if ($book === null) {
            http_response_code(404);
            echo json_encode("Book not found");
        } else {
            echo json_encode($book);
        }
    } else {
        $books = Book::getAll();
        echo json_encode($books);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    try {
            move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/'.$target_file);
            $_POST['photo'] = $target_file;
            $id = Book::insert($_POST);
            echo json_encode($id);
    } catch (Throwable $e) {
        echo json_encode("Sorry, there was an error uploading your file.".$e->getMessage());
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    dd($_REQUEST    );
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/'.$target_file)) {
        $_POST['photo'] = $target_file;
        $id = Book::update($_POST, $_POST['id']);
        echo json_encode($id);
    } else {
        echo json_encode("Sorry, there was an error uploading your file.");
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = Book::delete($_GET['book']);
    echo json_encode($id);
}

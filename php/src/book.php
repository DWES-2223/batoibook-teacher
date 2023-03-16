<?php
include_once('../vendor/autoload.php');

use App\Book;
session_start();

$book = $_GET['book'] ?? '';
$book = Book::getById($book);
include_once('./views/book.view.php');
<?php
include_once('../vendor/autoload.php');

use App\Book;
session_start();

$books = Book::getAll();
include_once('./views/books.view.php');
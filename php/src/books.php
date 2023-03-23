<?php
include_once('../vendor/autoload.php');

use App\Book;
session_start();

$books = Book::getAll();
$total = count($books);
$per_page = 5;
$totalPages = ceil($total / $per_page);

$currentPage = $_GET['page'] ?? 1;
$offset = ($currentPage - 1) * $per_page;
$books = Book::getAll( $per_page, $offset);
include_once('./views/books.view.php');
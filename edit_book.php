<?php

include 'pdo_connect.php';

$bookId = $_GET['book_id'];

$query = $db->prepare("select * from books where id = ? limit 1");
$query->execute([$bookId]);
$book = $query->fetch();

include 'edit_book_view.php';
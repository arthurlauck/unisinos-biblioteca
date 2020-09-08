<?php

include 'pdo_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$author = $_POST['author'];
$pageNumber = $_POST['page_number'];
$publishedAt = $_POST['published_at'];
$publishedBy = $_POST['published_by'];
$editedBy = $_POST['edited_by'];

$prepared = $db->prepare("
    update books 
    set
        name = ?,
        author = ?,
        page_number = ?,
        published_at = ?,
        published_by = ?,
        edited_by = ?
    where id = ?
");

$prepared->execute([
    $name, 
    $author, 
    $pageNumber, 
    $publishedAt, 
    $publishedBy,
    $editedBy,
    $id,
]);

header('Location: /');
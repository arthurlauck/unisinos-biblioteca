<?php

include 'pdo_connect.php';

$name = $_POST['name'];
$author = $_POST['author'];
$pageNumber = $_POST['page_number'];
$publishedAt = $_POST['published_at'];
$publishedBy = $_POST['published_by'];
$editedBy = $_POST['edited_by'];

// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $prepared = $db->prepare("
        insert into books 
        (name, author, page_number, published_at, published_by, edited_by) 
        values (:name, :author, :pagenumber, :publishedat, :publishedby, :editedby)
    ");

    $prepared->execute([
        ':name' => $name, 
        ':author' => $author, 
        ':pagenumber' => $pageNumber, 
        ':publishedat' => $publishedAt, 
        ':publishedby' => $publishedBy,
        ':editedby' => $editedBy
    ]);

} catch (\Exception $e) {
    var_dump($e);
}

header('Location: /', 301);
<?php

include 'pdo_connect.php';

$query = $db->prepare("delete from books where id = ?");
$query->execute([$_GET['book_id']]);


header('Location: /');

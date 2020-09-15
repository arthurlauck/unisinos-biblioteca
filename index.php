<?php

include 'pdo_connect.php';

$query = 'select * from books';
$binds = [];
if (isset($_GET['search']) && $_GET['search']) {
    $query .= ' where name like ?';
    $binds[] = '%' . $_GET['search'] . '%';
}

$result = $db->prepare($query);
$result->execute($binds);

$books = $result->fetchAll() ?: [];

$user = null;

if ($_COOKIE['user']) {
    $user = $_COOKIE['user'];
}

include_once 'index_view.php';
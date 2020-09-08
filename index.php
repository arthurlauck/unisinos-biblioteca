<?php

include 'pdo_connect.php';


$result = $db->query('select * from books');

$books = $result->fetchAll() ?: [];

include_once 'index_view.php';
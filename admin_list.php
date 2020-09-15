<?php

include 'pdo_connect.php';

$query = 'select * from admin';

$result = $db->prepare($query);
$result->execute();

$admins = $result->fetchAll() ?: [];

include_once 'admin_list_view.php';

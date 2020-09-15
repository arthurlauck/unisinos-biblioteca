<?php

include 'pdo_connect.php';

$query = $db->prepare("delete from admin where id = ?");
$query->execute([$_GET['admin_id']]);


header('Location: /admin_list.php');

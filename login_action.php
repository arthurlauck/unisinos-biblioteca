<?php

include 'pdo_connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = $db->prepare("select * from admin where email = ? and password = ? limit 1");
$query->execute([$email, $password]);
$user = $query->fetch();

if ($user) {
    setcookie('user', $user['id']);
    header('Location: /');
    exit;
}

header('Location: /login.php');
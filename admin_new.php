<?php

include 'pdo_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $prepared = $db->prepare("
        insert into admin 
        (name, email, password) 
        values (:name, :email, :password)
    ");

    $prepared->execute([
        ':name' => $name, 
        ':email' => $email, 
        ':password' => $password, 
    ]);

} catch (\Exception $e) {
    // var_dump($e);
    // die;
}

header('Location: /admin_list.php', 301);

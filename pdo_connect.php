<?php
session_start();

$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=127.0.0.1;dbname=minhabiblioteca;charset=utf8', $user, $pass);
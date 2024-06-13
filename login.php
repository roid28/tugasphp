login.php

<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$u = 'a122206906';
$p = '1234';

if ($username == $u AND $password == $p) {
    $_SESSION["username"] = $username;
    header("Location: berandaa.php");
    exit();
} else {
    echo "Username atau password salah";
}
?>

<?php
include 'user.php';

if (isset($_POST['login'])) {
    $user = new User();
    $user->loginUser($_POST['email'], $_POST['password']);
}
?>

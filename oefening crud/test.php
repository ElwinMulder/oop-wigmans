<?php
include 'user.php';

$user = new User();

// Test of de connectie werkt
$user->dbConnect();
echo "Database connectie succesvol!";

// Of test de login of registratie:
# $user->registerUser("Piet", "piet@example.com", "test123");
# $user->loginUser("piet@example.com", "test123");
?>

<?php include 'user.php'; ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
</head>
<body>

<div class="container">
    <h2>Registreren</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Naam" required>
        <input type="email" name="email" placeholder="E-mailadres" required>
        <input type="password" name="password" placeholder="Wachtwoord" required>
        <button type="submit" name="register">Account aanmaken</button>
    </form>

    <div class="switch">
        <p>Heb je al een account? <a href="index.php">Log in</a></p>
    </div>

    <?php
    if (isset($_POST['register'])) {
        $user = new User();
        $user->registerUser($_POST['name'], $_POST['email'], $_POST['password']);
    }
    ?>
</div>

</body>
</html>

<style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
            width: 320px;
        }
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            padding: 8px;
            margin: 8px 0;
        }
        button {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        .switch {
            text-align: center;
            margin-top: 10px;
        }
        .switch a {
            color: #007bff;
            text-decoration: none;
        }
    </style>

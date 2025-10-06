<?php include 'user.php'; ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login & Registreren</title>
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
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
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
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <input type="email" name="email" placeholder="E-mailadres" required>
        <input type="password" name="password" placeholder="Wachtwoord" required>
        <button type="submit" name="login">Inloggen</button>
    </form>

    <div class="switch">
        <p>Geen account? <a href="register.php">Registreer hier</a></p>
    </div>
</div>

</body>
</html>

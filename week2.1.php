<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht</title>
</head>
<body>
<form method="POST">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Verzenden">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "user gebruikersnaam: " . $username . "<br>";
        echo "user wachtwoord: " . $password . "<br>";
    }
    ?>
</body>
</html>
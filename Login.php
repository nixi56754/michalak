<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="formularzLogowania">
        <h2>Logowanie</h2>
        <form action="logowanie.php" method="post">
            <div class="uzytkownikDane">
                <input type="text" name="login"  id="Login">
                <label>Login</label>
            </div>
            <div class="uzytkownikDane">
                <input type="text" name="haslo" id="Haslo">
                <label>Hasło</label>
                <?php
                    session_start();
                    if(isset($_SESSION['zalogowano'])){
                        echo "<p>Haslo lub login jest niepoprawny</p>";
                    }
                ?>
            </div>
            <input type="submit" value="Zaloguj" name="zalogoj" id="zaloguj">
            <input type="submit" value="Powrót" name="powrot" id="Powrot">
        </form>
    </div>
</body>
</html>

<script src="Login.js"></script>
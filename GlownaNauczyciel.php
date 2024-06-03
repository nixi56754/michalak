<?php
session_start();
if($_SESSION['zalogowano']=='false'){
    header('location: startowa.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="GlownaNauczyciel.css">
</head>
<body>
    <header>
        <span id="najedz">O nas</span>
        <h2>Sprawdziany.pl</h2>
        <div id="infoDiv">
            <p>Informacje o twórcach :</p> 
            <p>Bejgrowicz Mateusz 2TP</p> 
            <p>Kalinowski Kacper 2TP</p>
        </div>
        <form action="wyloguj.php" method="post">
            <input type="submit" value="Wyloguj sie" id="wyloguj">
        </form>
    </header>
    <main>
        <div></div>
        <div id="sprawdziany">
            <form action="pytania.php" method="POST">
                <br>
                <label for="SQL"><b>SQL</b></label> 
                <br>
                <input type="hidden" name="typ" value="sql">
                <input type="submit" value="sql" name="sql">
                <br>
                
            </form>
            <form action="pytania.php" method="POST">
                <br>
                <label for="C++"><b>C++</b></label> 
                <br>
                <input type="hidden" name="typ" value="c++">
                <input type="submit" value="c++" name="c++">
                <br>
            </form>
            <form action="pytania.php" method="POST">
                <br>
                <label for="PHP"><b>PHP</b></label> 
                <br>
                <input type="hidden" name="typ" value="php">
                <input type="submit" value="php"name="php">
                <br>
            </form>
            <form action="pytania.php" method="POST">
                <br>
                <label for="HTML"><b>HTML</b></label> 
                <br>
                <input type="hidden" name="typ" value="html">
                <input type="submit" name="html" value="html">

                <br>
            </form>
            <form action="pytania.php" method="POST">
                <br>
                <label for="JS"><b>JS</b></label> 
                <br>
                 <input type="hidden" name="typ" value="js">
                <input type="submit" value="js" name="js">
                <br>
            </form>
            <br>
            <button onclick="S()" id="stworz">Dodaj nowe pytanie</button>
        </div>
    </main>
</body>
</html>

<script src="GlownaNauczyciel.js"></script>
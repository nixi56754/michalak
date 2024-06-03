<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Startowa.css">
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['zalogowano'])){
        unset($_SESSION['zalogowano']);
    }
    ?>
    <header>
        <span id="najedz">O nas</span>
        <h2>Sprawdziany.pl</h2>
        <div id="infoDiv">
            <p>Informacje o twórcach :</p> 
            <p>Bejgrowicz Mateusz 2TP</p> 
            <p>Kalinowski Kacper 2TP</p>
        </div>
    </header>
    <main>
        <h1>Wybierz kim jestes</h1>
        <div>
            <section id="uczen">
                <h3>Uczeń</h3>
                <img src="Uczen.png" alt="Uczen" id="zdjecie1" onclick="F()">
            </section>
            <section id="nauczyciel">
                <h3>Nauczyciel</h3>
                <img src="Nauczyciel.png" alt="Nauczyciel" id="zdjecie2" onclick="S()">
            </section>
        </div>
    </main>
</body>
</html>
 
<script src="Startowa.js"></script>

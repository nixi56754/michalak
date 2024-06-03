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
    <link rel="stylesheet" href="DodawaniePytan.css">
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
    </header>
    <main>
        <div></div>
        <div>
            <form action="dodaj.php" method="post">
                <label for="tresc"><b>Podaj tresc:</b></label> <br>
                <input type="text" name="tresc" id="tresc" required> <br>
                <br>
                <label for="a"><b>Podaj odpA:</b></label> <br>
                <input type="text" name="a" id="a" required> 
                <input type="checkbox" name="ais" id="" > <br>
                <br>
                <label for="b"><b>Podaj odpB:</b></label> <br>
                <input type="text" name="b" id="b" required> 
                <input type="checkbox" name="bis" id=""> <br>
                <br>
                <label for="c"><b>Podaj odpC:</b></label> <br>
                <input type="text" name="c" id="c" required> 
                <input type="checkbox" name="cis" id="" ><br>
                <br>
                <label for="d"><b>Podaj odpD</b></label> <br>
                <input type="text" name="d" id="d" required> 
                <input type="checkbox" name="dis" id="" > <br> 
                <br>
                <label for="typ"><b>Wybierz typ:</b></label> <br>
                <select name="typ" id="typ" required>
                    <option value="sql">sql</option>
                    <option value="c++">c++</option>
                    <option value="php">php</option>
                    <option value="html">html</option>
                    <option value="js">js</option>
                </select> <br> 
                <br>
                <input type="submit" value="wyslij" name="wys">
            </form>
            <br>
            <button onclick="f()">powrot</button>
        </div>
    </main>
</body>
</html>

<script src="DodawaniePytan.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
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
       <?php
            session_start();
            echo $_SESSION['pyt'];
       ?>   
    </main>
</body>
</html>
 
<script src="Test.js"></script>
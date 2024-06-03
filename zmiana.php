<link rel="stylesheet" href="zmiena.css">
<?php
    session_start();
    require('dane.php');
    if($_SESSION['zalogowano']=='false'){
        header('location: startowa.php');
        exit;
    }
        
    
        $pol= new mysqli($host, $uzytkownik, $haslodob, $baza);

        if (isset($_POST['usun'])) {
            $id = (int)($_POST['usun']);
            $sql = "DELETE FROM `pytania` WHERE id = $id";
            $wynik = $pol->query($sql);
        
            echo "<link rel='stylesheet' href='wynik.css'>";

    echo "<header>";
    echo "<span id='najedz'>O nas</span>
    <h2>Sprawdziany.pl</h2>
    <div id='infoDiv'>
        <p>Informacje o twórcach :</p> 
        <p>Bejgrowicz Mateusz 2TP</p> 
        <p>Kalinowski Kacper 2TP</p>
    </div>
    <form action='GlownaUczen.html'>        
    </form>";
    echo "</header>";

    echo "<main>";
    echo "<h1>";
    echo "Pytanie o ID $id zostało usunięte";
    echo "</h1>";
    echo "<p><a href='GlownaNauczyciel.php'>Powrót do listy pytań</a></p>";
    echo "</main>";

    echo "<script src='wynik.js'></script>";
            
        }
        

?>

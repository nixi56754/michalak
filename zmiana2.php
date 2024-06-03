<link rel="stylesheet" href="zmiena2.css">
<?php
session_start();
require('dane.php');
$pol= new mysqli($host, $uzytkownik, $haslodob, $baza);

    if($_SESSION['zalogowano']=='false'){
        header('location: startowa.php');
        exit;
    }
if (isset($_POST['edit'])) {
    $id = (int)($_POST['edit']);
    $sql = "SELECT * FROM `pytania` WHERE id = '$id'";
    $wynik = $pol->query($sql);
    $pytanie = $wynik->fetch_row();


    if ($pytanie) {
        echo "
        <header>
        <span id='najedz'>O nas</span>
        <h2>Sprawdziany.pl</h2>
        <div id='infoDiv'>
            <p>Informacje o twórcach :</p> 
            <p>Bejgrowicz Mateusz 2TP</p> 
            <p>Kalinowski Kacper 2TP</p>
        </div>
    </header>
    <main>
        <form action='zmiana2.php' method='post'>
            <input type='hidden' name='id' value='{$pytanie[0]}'>
            <label>Treść: <input type='text' name='tresc' value='{$pytanie[1]}'></label><br>
            <label>Odpowiedź A: <input type='text' name='odpowiedz1' value='{$pytanie[2]}'></label><br>
            <label>Odpowiedź B: <input type='text' name='odpowiedz2' value='{$pytanie[3]}'></label><br>
            <label>Odpowiedź C: <input type='text' name='odpowiedz3' value='{$pytanie[4]}'></label><br>
            <label>Odpowiedź D: <input type='text' name='odpowiedz4' value='{$pytanie[5]}'></label><br>
            <label>A: <input type='text' name='odp1' value='{$pytanie[6]}'></label><br>
            <label>B: <input type='text' name='odp2' value='{$pytanie[7]}'></label><br>
            <label>C: <input type='text' name='odp3' value='{$pytanie[8]}'></label><br>
            <label>D: <input type='text' name='odp4' value='{$pytanie[9]}'></label><br>
            <label>Typ: <input type='text' name='typ' value='{$pytanie[10]}'></label><br>
            <input type='submit' name='zapisz' value='Zapisz zmiany'>
        </form>
        </main>";
    
    }
} 

if (isset($_POST['zapisz'])) {
    $id = (int)($_POST['id']);
    $tresc = $_POST['tresc'];
    $odpowiedz1 = $_POST['odpowiedz1'];
    $odpowiedz2 = $_POST['odpowiedz2'];
    $odpowiedz3 = $_POST['odpowiedz3'];
    $odpowiedz4 = $_POST['odpowiedz4'];
    $odp1 = $_POST['odp1'];
    $odp2 = $_POST['odp2'];
    $odp3 = $_POST['odp3'];
    $odp4 = $_POST['odp4'];
    $typ = $_POST['typ'];

    $sql = "UPDATE `pytania` SET tresc='$tresc', odpowiedz1='$odpowiedz1', odpowiedz2='$odpowiedz2', odpowiedz3='$odpowiedz3', odpowiedz4='$odpowiedz4', odp1='$odp1', odp2='$odp2', odp3='$odp3', odp4='$odp4', typ='$typ' WHERE id='$id'";
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
    echo "Pytanie o ID $id zostało zaktualizowane";
    echo "</h1>";
    echo "<p><a href='GlownaNauczyciel.php'>Powrót do listy pytań</a></p>";
    echo "</main>";

    echo "<script src='wynik.js'></script>";
}



?>

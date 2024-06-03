<?php
require('dane.php');
session_start();
if(isset($_POST['zalogoj'])){
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $pol = new mysqli($host, $uzytkownik, $haslodob, $baza);
    $sql = "SELECT * FROM login WHERE login='$login'";
    $wynik = $pol->query($sql);
    if ($wynik->num_rows == 1) {
        $hash = $wynik->fetch_assoc();
        $hasloh = $hash['haslo'];
        if (password_verify($haslo, $hasloh)) {
            $_SESSION['zalogowano']='true';
            header('location: GlownaNauczyciel.php');
            exit;
        }
        else{
            $_SESSION['zalogowano']='false';
            header('location: Login.php');
           exit;
        }
        }
    else{
        $_SESSION['zalogowano']='false';
        header('location: Login.php');
        exit;
    }
}
if(isset($_POST['powrot'])){
    header('location: startowa.php');
}

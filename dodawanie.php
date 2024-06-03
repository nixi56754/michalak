<?php
require('dane.php');
session_start();
if($_SESSION['zalogowano']=='false'){
    header('location: startowa.php');
    exit;
}
if(isset($_POST['klik'])){
    $login=$_POST['log'];
    $haslo=$_POST['has'];
    $pol = new mysqli($host, $uzytkownik, $haslodob, $baza);
    $hashed = password_hash($haslo, PASSWORD_DEFAULT);  
    $sql="INSERT INTO login (login, haslo) VALUES ('$login', '$hashed'); ";
    $wynik=$pol->query($sql);

}

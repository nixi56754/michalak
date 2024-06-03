<?php
require('dane.php');
session_start();
if($_SESSION['zalogowano']=='false'){
    header('location: startowa.php');
    exit;
}



if(isset($_POST['wys'])){
    $tresc=$_POST['tresc'];
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    if(isset($_POST['ais'])){
        $ais=1;
    }
    else{
        $ais=0;
    }
    if(isset($_POST['bis'])){
        $bis=1;
    }
    else{
        $bis=0;
    }
    if(isset($_POST['cis'])){
        $cis=1;
    }
    else{
        $cis=0;
    }
    if(isset($_POST['dis'])){
        $dis=1;
    }
    else{
        $dis=0;
    }
    $typ=$_POST['typ'];
    $pol = new mysqli($host, $uzytkownik, $haslodob, $baza);
    $sql="INSERT INTO `pytania` (`tresc`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `odp1`, `odp2`, `odp3`, `odp4`, `typ`) 
    VALUES ( '$tresc', '$a', '$b', '$c', '$d', '$ais', '$bis', '$cis', '$dis', '$typ');";
    $wynik=$pol->query($sql);
    header('location: DodawaniePytan.php');

}






?>
<?php
session_start();
require("dane.php");
$pol = new mysqli($host, $uzytkownik, $haslodob, $baza);
    $kt=$_SESSION['kt'];
    $g=(int)$kt;
    if($g!=1){
        $g++;
        $_SESSION['kt']=$g;
    }
    
    $_SESSION['dane']="pyt$g";
    $dan=$_SESSION['dane']; 
   
    $jakie=$_SESSION[$dan];
   
    if($g==3){
        header('location: wynik.php');
        exit;
    }
    $sql="SELECT * from pytania where id=$jakie";
    $wynik=$pol->query($sql);
    $op=0;
    while($wiersz=$wynik->fetch_row()){
        $op+=$wiersz[6];
        $op+=$wiersz[7];
        $op+=$wiersz[8];
        $op+=$wiersz[9];
    }
    if($op>1){
        header('location: naspyt2.php');
    }
    else{
        header('location: naspyt.php');
        exit;
    }
    

?>

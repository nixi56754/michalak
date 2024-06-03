<?php
require('dane.php');
session_start();
if(isset($_POST['nastepny'])){
    $pol = new mysqli($host, $uzytkownik, $haslodob, $baza);
    $dan=$_SESSION['dane'];
    $kt=$_SESSION['kt'];
    $jakie=$_SESSION[$dan];
    $g=(int)$kt;
    $sql="SELECT * from pytania where id=$jakie";
    $wynik=$pol->query($sql);
    if(isset($_POST['odpa'])){
        $odpa=1;
    }
    else{
        $odpa=0;
    }


    if(isset($_POST['odpb'])){
        $odpb=1;
    }
    else{
        $odpb=0;
    }


    if(isset($_POST['odpc'])){
        $odpc=1;
    }
    else{
        $odpc=0;
    }


    if(isset($_POST['odpd'])){
        $odpd=1;
    }
    else{
        $odpd=0;
    }
   
    if($g==1){
        $g++;
        $_SESSION['kt']=$g;
    }
    while($wiersz=$wynik->fetch_row()){
        if($wiersz[6]==$odpa and $wiersz[7]==$odpb and $wiersz[8]==$odpc and $wiersz[9]==$odpd){
            $w2=$_SESSION['pkt'];
            $w=(int)$w2;
            $w++;
            $_SESSION['pkt']=$w;
            header('location: check.php');
            exit;
            
        }
        else{
            header('location: check.php');
            exit;

        }

       

        
        
    }
   
}
                        header('location: check.php');
                        exit;




?>

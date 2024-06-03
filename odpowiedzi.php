<?php
require('dane.php');
session_start();
if(isset($_POST['nastepny'])){
    $pol = new mysqli($host, $uzytkownik, $haslodob, $baza);
    $dan=$_SESSION['dane'];
    $kt=$_SESSION['kt'];
    $jakie=$_SESSION[$dan];
    $g=(int)$kt;
    $p="pyt$g";
    $odpp=$_POST[$p];
    $odp=(string)$odpp;
    $sql="SELECT * from pytania where id=$jakie";
    $wynik=$pol->query($sql);
    if($g==1){
        $g++;
        $_SESSION['kt']=$g;
    }
    while($wiersz=$wynik->fetch_row()){
        if($odp=='a'){
            if($wiersz[6]=='1'){
                $w2=$_SESSION['pkt'];
                $w=(int)$w2;
                $w++;
                $_SESSION['pkt']=$w;
                header('location: check.php');
                exit;
            }
        }
        else
            if($odp=='b'){
                if($wiersz[7]=='1'){
                    $w2=$_SESSION['pkt'];
                    $w=(int)$w2;
                    $w++;
                    $_SESSION['pkt']=$w;
                    header('location: check.php');
                    exit;
                }

            }
            else
                if($odp=='c'){
                    if($wiersz[8]=='1'){
                        $w2=$_SESSION['pkt'];
                        $w=(int)$w2;
                        $w++;
                        $_SESSION['pkt']=$w;
                        header('location: check.php');
                        exit;
                    }


                }
                else{
                    if($wiersz[9]=='1'){
                        $w2=$_SESSION['pkt'];
                        $w=(int)$w2;
                        $w++;
                        $_SESSION['pkt']=$w;
                        header('location: check.php');
                        exit;
                    }
                    
                        
                    

                }

        
        
    }
   
}
                        header('location: check.php');
                        exit;




?>

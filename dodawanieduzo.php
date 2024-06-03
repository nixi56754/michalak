<?php
require('dane.php');
session_start();
if($_SESSION['zalogowano']=='false'){
    header('location: startowa.html');
    exit;
}
    $pol = new mysqli($host, $uzytkownik, $haslodob, $baza);
    $e = array();
    $e[0]='0';
    $e[1]='1';
    $e[2]='0';
    $e[3]='0';
    
    
    $w=1;
    for( $i=1;$i<500;$i++){
        shuffle($e);
        if($w==6){
            $w=1;
        }
        if($w==1){
            $sql="INSERT INTO `pytania` ( `tresc`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `odp1`, `odp2`, `odp3`, `odp4`, `typ`) 
            VALUES ( 'Question $i', 'Option a$i', 'Option b$i', 'Option c$i', 'Option d$i', '$e[0]', '$e[1]', '$e[2]', '$e[3]', 'sql');";
        }
        else
            if($w==2){
                $sql="INSERT INTO `pytania` ( `tresc`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `odp1`, `odp2`, `odp3`, `odp4`, `typ`) 
                VALUES ( 'Question $i', 'Option a$i', 'Option b$i', 'Option c$i', 'Option d$i', '$e[0]', '$e[1]', '$e[2]', '$e[3]', 'c++');";
            }
            else
                if($w==3){
                    $sql="INSERT INTO `pytania` ( `tresc`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `odp1`, `odp2`, `odp3`, `odp4`, `typ`) 
                    VALUES ( 'Question $i', 'Option a$i', 'Option b$i', 'Option c$i', 'Option d$i', '$e[0]', '$e[1]', '$e[2]', '$e[3]', 'php');";
                }
                else
                    if($w==4){
                        $sql="INSERT INTO `pytania` ( `tresc`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `odp1`, `odp2`, `odp3`, `odp4`, `typ`) 
                        VALUES ( 'Question $i', 'Option a$i', 'Option b$i', 'Option c$i', 'Option d$i', '$e[0]', '$e[1]', '$e[2]', '$e[3]', 'html');";
                    }
                    else{
                        $sql="INSERT INTO `pytania` ( `tresc`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `odp1`, `odp2`, `odp3`, `odp4`, `typ`) 
                        VALUES ( 'Question $i', 'Option a$i', 'Option b$i', 'Option c$i', 'Option d$i', '$e[0]', '$e[1]', '$e[2]', '$e[3]', 'js');";
                    }
                        $w++;
                    $wynik=$pol->query($sql);
    }

   
    




?>

124
Question 50
Option 50a
Option 50b
Option 50c
Option 50d
0
1
0
0
2
id	tresc	odpowiedz1	odpowiedz2	odpowiedz3	odpowiedz4	odp1	odp2	odp3	odp4	typ	

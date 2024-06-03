<?php

session_start();
require("dane.php");
    $pol = new mysqli($host, $uzytkownik, $haslodob, $baza);
    $dan=$_SESSION['dane'];
    $kt=$_SESSION['kt'];
    $kt1=(int)$kt;
    $jakie=$_SESSION[$dan];
    $sql="SELECT * from pytania where id=$jakie";
    $wynik=$pol->query($sql);
    while($wiersz=$wynik->fetch_row()){
        $_SESSION['pyt']="            
        <div id='$jakie' name='' value='$jakie' class=''>
            <form action='odpowiedzi2.php' method='post'>
                <h3 name='pytanie' id='pytanie'>$wiersz[1]</h3> <br>
                <label for=''>$wiersz[2]</label>
                <input type='checkbox' name='odpa' id='$jakie' value='a' >    <br>
                <label for=''>$wiersz[3]</label>
                <input type='checkbox' name='odpb' id='$jakie' value='b' >   <br>
                <label for=''>$wiersz[4]</label>
                <input type='checkbox' name='odpc' id='$jakie' value='c' >    <br>
                <label for=''>$wiersz[5]</label>
                <input type='checkbox' name='odpd' id='$jakie' value='d' >    <br>
                <input type='hidden' name='hid$kt' value='$kt'> <br>
                <input type='submit' value='nastepne pytanie' name='nastepny'>
            </form>
        </div>";
       
       
    } 


header('location: test.php');
exit;



?>

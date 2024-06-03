<?php
    session_start();
    $w=$_SESSION['pkt'];
    $t=(int)$w;
    $r=$w/40;
    $r=$r*100;
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
    <input type='submit' value='Powrot' id='powrot'>        
    </form>";
    echo "</header>";

    echo "<main>";
    echo "<h1>";
    echo  "Uzyskałeś wynik: $w co daje $r%";
    echo "</main>";
    echo "</h1>";

    echo "<script src='wynik.js'></script>";
?>
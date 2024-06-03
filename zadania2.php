<?php
session_start();
if(isset($_POST['roz'])){
    if(isset($_POST['sql'])){
        $_SESSION['sql']="sql";
    }
    if(isset($_POST['c++'])){
        $_SESSION['c++']="c++";
    }
    if(isset($_POST['php'])){
        $_SESSION['php']="php";
    }
    if(isset($_POST['html'])){
        $_SESSION['html']="html";
    }
    if(isset($_POST['js'])){
        $_SESSION['js']="js";
    }
    
}
header("location: generowanie.php");
?>

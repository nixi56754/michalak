<?php
session_start();
unset($_SESSION['zalogowano']);
header('location: Startowa.php');

?>

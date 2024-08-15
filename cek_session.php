<?php
 /**
     * NIM : 2257401047
     * NAMA : RESA CANTIKA PRATIWI
     * KELAS MI22B
     */ 
session_start();
if (!isset($_SESSION['user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>
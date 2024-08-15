<?php
     /**
     * NIM : 2257401047
     * NAMA : RESA CANTIKA PRATIWI
     * KELAS : MI22B
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>
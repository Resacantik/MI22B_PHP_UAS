<?php 
    /**
     * NIM : 2257401047
     * NAMA : RESA CANTIKA PRATIWI
     * KELAS : MI22B
     */ 
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "uas_resacantikapratiwi";

    $koneksi    = mysqli_connect($host, $user, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("Koneksi Gagal Karena : ". mysqli_connect_error());
    }
?>
<?php
    include_once("konfigurasi.php");

    $sql = "INSERT INTO mhs(NIM, NAMA, ALAMAT, TGL_LAHIR, JENISKEL) VALUES('1122334455','dika','abiansemal','2003-07-18','L');";
    $res = mysqli_query($koneksi, $sql);
    if (!$res) {
        die("penambahan data gagal");
    }
    echo "penambahan data sukses";
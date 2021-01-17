<?php

include 'koneksi.php';

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO orang (nama, alamat) VALUES ('$nama','$alamat')";
    echo $nama.$alamat;
    if (mysqli_query($conn,$sql)) {
        echo "Berhasil Memasukkan Data";
    } else {
        echo "Error Memasukkan Data <br/>".mysqli_error($conn);
    }
}
<?php

include 'koneksi.php';

$sql = "SELECT * FROM orang";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $link_delete = "<a class='hapusData' href='delete.php?id=".$row['id']."'>Delete</a>";
        $link_update = "<a class='updateData' href='update.php?id=".$row['id']."' nama='".$row['nama']."' alamat='".$row['alamat']."'>Update</a>";
        echo $row['id'].", Nama : ".$row['nama'].", Alamat : ".$row['alamat'].". | $link_update | $link_delete</br>";
    }
}
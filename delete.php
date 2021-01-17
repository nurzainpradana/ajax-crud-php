<?php

include 'koneksi.php';
echo $_GET['id'];
$sql = "DELETE FROM orang WHERE id='".$_GET['id']."'";
$result = mysqli_query($conn, $sql);
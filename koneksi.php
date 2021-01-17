<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_ajax_crud_php";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection Failed :" .mysqli_connect_error());
    }
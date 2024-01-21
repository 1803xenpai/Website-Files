<?php
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $database = "pers_info";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if ($conn->connect_error)
    {
        die("Connection failed ".$conn->connect_error);
    }
?>
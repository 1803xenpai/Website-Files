<?php
    
echo "<link rel='stylesheet' href='desi.css'>";
echo "<link rel='shortcut icon' href='images/logo (2).png' type='image/x-icon'>";
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $add = $_POST['add'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $database = "pers_info";

    $conn = mysqli_connect($servername,$username,$password,$database);

    $query = "SELECT * FROM log_in WHERE username='".$uname."' ";
    $result = $conn->query($query);
    $numrows = $result->num_rows;

    if ($numrows==0)
    {
        $query1 = "INSERT INTO sign_in SET fullname = '".$fullname."',  email = '".$email."', age = '".$age."', address = '".$add."'";
        $query2 = "INSERT INTO log_in SET username = '".$uname."', password = '".$pass."'";
        mysqli_query($conn, $query1);
        mysqli_query($conn, $query2);
        mysqli_close($conn);
        echo"<div class='bgreg'>";
        echo "<marquee scrollamount='30' loop='infinite'> User ".$uname." has successfully registered</marquee>";
        echo "<div>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<a href='entrance.php' class='relogin'>Would you like to Login?</a>";
        echo"</div>";
        echo"</div>";
    }else{
        echo "Invalid Input";
    }
?>
<?php
echo "<link rel='stylesheet' href='desi2.css'>";
echo "<link rel='shortcut icon' href='images/logo (2).png' type='image/x-icon'>";
echo"<title>Delete USer</title>";
    $uname = $_POST['uname'];

    require 'connect.php';

    $query = "DELETE FROM log_in WHERE username='".$uname."'";
    mysqli_query($conn, $query);
    mysqli_close($conn);

    
    echo"<div class='bgreg'>";
        echo "<marquee scrollamount='30' loop='infinite'> User ".$uname." has successfully deleted from Database.</marquee>";
        echo "<div>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<a href='entrance.php' class='relogin'>Would you like to go back?</a>";
        echo"</div>";
        echo"</div>";
?>
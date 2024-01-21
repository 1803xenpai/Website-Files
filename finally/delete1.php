<?php
echo "<link rel='stylesheet' href='desi2.css'>";
echo "<link rel='shortcut icon' href='images/logo (2).png' type='image/x-icon'>";

//DELETE---------->
echo "<div class='formbg4'>";
echo"<div class='choice'>";
echo "<form class='del' action='delete.php' method='post'>";
    echo "<select name='uname' size='6'>";

    require 'connect.php';

    $query = "SELECT username FROM log_in";
    $result = $conn->query($query);
    $numrows = $result->num_rows;

    while ($rows = $result->fetch_assoc())
    {
        echo "<option  >".$rows['username']."</option>";
    }
  
    echo "</select>";
    echo "<br/>";
    echo "<br/>";
    echo "<input type='submit' class='del2' value='Delete'>";
echo "</form>";
echo "</div>";
echo "</div>";
?>
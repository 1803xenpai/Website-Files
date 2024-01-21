    <?php
    //Forgot password connection
    
     echo "<link rel='stylesheet' href='desi.css'>";
     echo "<link rel='shortcut icon' href='images/logo (2).png' type='image/x-icon'>";
    
        $uname = $_POST['uname'];
        $newpass = $_POST['newpass'];
       
        $confirm = $_POST['confirm'];

        require 'connect.php';

        $query = "SELECT * FROM log_in WHERE username='".$uname."' ";
        $result = $conn->query($query);
        $num_rows = $result->num_rows;

        if ( $num_rows!=0)
        {
            if ($newpass!=$confirm)
            {
                
                echo "<a href='forgotpass.php'>would you like to go back TO REGISTRATION?</a>";
                echo '<script>alert("PASSWORD DID NOT MATCH!!!!!!!!!!!")</script>'; 
            }
            else {
                $query1 = "UPDATE log_in SET password = '".$newpass."' WHERE username='".$uname."'";
                mysqli_query($conn,$query1);
                mysqli_close($conn);

                echo "<a href='entrance.php'>would you like to go back TO LOG IN?</a>";
                echo "User ".$uname." has successfully changed password";
                
            }
        }
        else
        {
            echo "User ".$uname."does not exist";
            echo "<a href='forgotpass.php'>would you like to go back TO REGISTRATION?</a>";
        }
        
    ?>
        
 <?php
        $uname = $_POST['uname'];
        
        $pass = $_POST['pass'];
       
       
        require 'connect.php';

        $query = "SELECT * FROM log_in WHERE username='".$uname."' AND password='".$pass."'";
        $result = $conn->query($query);
        $numrows = $result->num_rows;

        if ( $numrows==0)
        {

            echo "User does not exist!!!!!";

        }
            
        else{
            echo "Welcome ".$uname;
        }
        
    ?>
        
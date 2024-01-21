 <?php
         echo "<link rel='stylesheet' href='home.css'>";
         echo "<link rel='shortcut icon' href='images/icon.png' type='image/x-icon'>";
         echo" <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />";
      
        session_start();
        $uname = $_POST['uname'];
        
        $pass = $_POST['pass'];
       
       
        require 'connect.php';

        $query = "SELECT * FROM log_in WHERE username='".$uname."' AND password='".$pass."'";
        $result = $conn->query($query);
        $numrows = $result->num_rows;

        if ( $numrows==0)
        {

            echo "User does not exist!!!!!";

            echo "<a href='entrance.php'>would you like to go back?</a>";
        }
            
        else{
            header("Location: http://localhost:8080/finally/homepage.php");
        }
        


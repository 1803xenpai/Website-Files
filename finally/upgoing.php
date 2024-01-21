<?php
        session_start();
    //     $uname = $_SESSION['uname'];
    //    $_SESSION['uname'] = $uname;
        
        // $servername = "localhost";
        // $username = "root";
        // $password = "admin";
        // $database = "pers_info";
    
        // $conn = mysqli_connect($servername,$username,$password,$database);
    
        // if ($conn->connect_error)
        // {
        //     die("Connection failed ".$conn->connect_error);
        // }

 
  
        // echo"nsojsdnl".$uname; // 

        echo "<link rel='stylesheet' href='upgoing.css'>";
        echo "<link rel='shortcut icon' href='images/icon.png' type='image/x-icon'>";
        echo" <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />";

        echo"<head>";
        
        echo "<title>Ongoing Anime</title>";
        echo "</head>";
        echo "<body>";
        echo"<div class='navigate'>";
        echo "<div class='top-page'>";
        echo"<header>";
        echo "<a  href='homepage.php'><i class='fas fas fa-film' id='i1'></i></a>";
        echo "<div>";
        echo "<a  href='homepage.php'><h3 class='logo-text'>AniList</h3></a>";
        echo "</div>";
        echo "<i class='fas fas fa-user' id='i2'></i>";
        echo "<h3 class='user-greet'>Enjoy the experience ...</h3>";
         echo"<label id='dark-change'></label>";

         echo "<div class='sun'>";
            echo'<h5>Light/Dark Mode</h5>';
            echo '</div>';
            
        echo "<header>";
        echo "</div>";
        echo "<div class='topnav'>";
            echo "<a href='home.php.php'>Home</a>";
           
            echo "<a  href='rank.php'>Rank</a>";
            echo "<a  href='ongoing.php'>Ongoing</a>";
            echo "<a class='active' href='upgoing.php'>Upcoming</a>";
            echo "<a href='about.php'>About</a>";
            echo "<a href='entrance.php'> <i class='fas fas fa-sign-out'></i>out</a>";
            echo "</div>";

        echo "</div>";
            echo "<main>";

            echo '<div class="sidenav">';
                echo '<a href="https://www.youtube.com/watch?v=AwY-j4ZV570">Hokkaido Gals are Super Adorable PV</a>';
                echo '<a href="https://www.youtube.com/watch?v=CYcrmsdZuyw">Dragon Ball Daima PV</a>';
                echo '<a href="https://www.youtube.com/watch?v=mCupsOKY3ys">Solo Leveling PV</a>';
                echo "<a href='https://www.youtube.com/watch?v=qLz7F7VlBfY'>Suicide Squad Isekai PV</a>";
                echo '<a href="https://www.youtube.com/watch?v=UhSY43hBnwI">Mr. Villains Day Off PV</a>';
                echo '<a href="#c6"></a>';
                echo '<a href="#c7"></a>';
                echo "<a href='#c8'></a>";
                echo '<a href="#c9"></a>';
                echo "<a href='#c10'></a>";
                echo '</div>';
                echo '';
                echo '<div class="main">';
                
            echo '</div>';
           
            echo '<p id="c1"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<h2>Ongoing Anime List</h2>';
            echo '<a href=""><div class="row">';
            echo '<div class="column" >';
            echo '<img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/78/Hokkaido_Gals_Vol_1.jpg/220px-Hokkaido_Gals_Vol_1.jpg">';
            echo '<h2>Hokkaido Gals Are Super Adorable!</h2>';
            echo '</br>';
            echo '<p>he first episode of Hokkaido Gals are Super Adorable will air in the early hours of January 9, 2024 in Japan – or 10:30 am on January 8 on the East Coast and 3:30 pm in the UK. Originally, the show was meant to premiere in 2023 but it was delayed several times throughout the year.</p>';
            echo '</br>';
            echo '<a class="c1"> 	Romantic comedy</a>';
            echo '</div></a>';

            echo '<p id="c2"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href=""><div class="column2">';
            echo '<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f2d333fb-2ec5-4fc5-a6f4-715ea58e488f/dgdfpun-59bc0e2c-4390-4cc0-90d3-4bc5e0092bc9.jpg/v1/fill/w_1280,h_1810,q_75,strp/dragon_ball_daima_by_pedrovpart_dgdfpun-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTgxMCIsInBhdGgiOiJcL2ZcL2YyZDMzM2ZiLTJlYzUtNGZjNS1hNmY0LTcxNWVhNThlNDg4ZlwvZGdkZnB1bi01OWJjMGUyYy00MzkwLTRjYzAtOTBkMy00YmM1ZTAwOTJiYzkuanBnIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.vaXLvx8EHNM4elwPjVbRF989UT2M5ahjqY8bCvaEQos">';
            echo '<h2>Dragon Ball Daima</h2>';
            echo '</br>';
            echo '<p> Dragon Ball Daimas release date and episode count were revealed by Toei Animations localization director on Oct. 26. In an interview with the Spanish media outlet Produ, Daniel Castañeda revealed that the Dragon Ball Daima release date window is October 2024</p>';
            echo '</br>';
            echo '<a class="c2">Adventure, Fantasy, Comedy, Martial arts</a>';
            echo '</div></a>';

            echo '<p id="c3"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href=""><div class="column3">';
            echo '<img src="https://sportshub.cbsistatic.com/i/2023/09/10/c119f91f-e28f-485f-b37f-12a0acbe0208/solo-leveling.jpg?auto=webp&width=1000&height=1413&crop=0.708:1,smart">';
            echo '<h2>Solo Leveling</h2>';
            echo '</br>';
            echo '<p>When is Solo Levelings release date? Fans wont have long to wait before they see Jin-woo/Shun Mizushino become the greatest hunter alive. Crunchyroll has confirmed that the first episode of Solo Leveling will officially be dropping in January 2024; basically a late Christmas present from A-1 Pictures.</p>';
            echo '</br>';
            echo '<a class="c3">	Action, fantasy</a>';
            echo '</div></a>';


            echo '<p id="c4"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href=""><div class="column4">';
            echo '<img src="https://m.media-amazon.com/images/M/MV5BNjJhOWNkZTgtODBlMy00ZjBjLWFhNTItNDYxOWUwMTgzNDQwXkEyXkFqcGdeQXVyNTk1ODMyNjA@._V1_.jpg">';
            echo "<h2>Suicide Squad</h2>";
            echo '</br>';
            echo '<p>Manga artist Akira Amano will provide the original character drafts. The series is set to premiere in 2024. The opening theme song is "Another World" performed by Tomoyasu Hotei.</p>';
            echo '</br>';
            echo "<a class='c4'>Isekai, Superhero Fiction</a>";
            echo '</div></a>';


            echo '<p id="c5"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href=""><div class="column5">';
            echo '<img src="https://upload.wikimedia.org/wikipedia/en/3/39/Mr._Villain%27s_Day_Off_vol._1_cover.jpg">';
            echo '<h2>Mr Villains Day Off </h2>';
            echo '</br>';
            echo '<p>The series follows master spy Twilight, who must disguise himself as psychiatrist Loid Forger and build a mock family in order to investigate political leader Donovan Desmond. Unbeknownst to him, his wife, Yor, is actually an assassin known as the Thorn Princess, while his daughter, Anya, has telepathic abilities.</p>';
            echo '</br>';
            echo '<a class="c5">Action, Detective/Mystery</a>';
            echo '</div></a>';


           
            echo '</div>';
            echo '</main>';
        echo"<script src='home.js'></script>";

        echo "</body>";
?>   
         
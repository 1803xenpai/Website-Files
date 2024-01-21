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

        echo "<link rel='stylesheet' href='rank.css'>";
        echo "<link rel='shortcut icon' href='images/icon.png' type='image/x-icon'>";
        echo" <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />";

        echo"<head>";
        
        echo "<title> Popularity List</title>";
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
            echo "<a href='homepage.php'>Home</a>";
           
            echo "<a  class='active' href='rank.php'>Rank</a>";
            echo "<a href='ongoing.php'>Ongoing</a>";
            echo "<a href='upgoing.php'>Upcoming</a>";
            echo "<a href='about.php'>About</a>";
            echo "<a href='entrance.php'> <i class='fas fas fa-sign-out'></i>out</a>";
            echo "</div>";

        echo "</div>";
            echo "<main>";

            echo '<div class="sidenav">';
                echo '<a href="#c1">Jujutsu Kaisen</a>';
                echo '<a href="#c2">One Piece</a>';
                echo '<a href="#c3">Dragon Ball Super</a>';
                echo "<a href='#c4'>Freiren: Beyond Journey's End</a>";
                echo '<a href="#c5">Spy X Family</a>';
                echo '<a href="#c6">The Eminence in Shadow</a>';
                echo '<a href="#c7">Undead Unluck</a>';
                echo "<a href='#c8'>Dr.Stone</a>";
                echo '<a href="#c9">Goblin Slayer</a>';
                echo "<a href='#c10'>Ragna Crimson</a>";
                echo '</div>';
                echo '';
                echo '<div class="main">';
                
            echo '</div>';
            echo '<p id="c1"></p>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=jujutsu%20kaisen"><div class="row">';
            echo '<div class="column" >';
            echo '<img src="https://images.justwatch.com/poster/306336521/s592/season-2">';
            echo '<h2>Jujutsu Kaisen </h2>';
            echo '</br>';
            echo '<p>Jujutsu Kaisen follows the story of Yuji Itadori, an ordinary boy who crosses paths with Megumi Fushiguro, a Jujutsu Sorcerer searching for a powerful Cursed Object known as Ryomen Sukunas finger. Unintentionally, Yujis friends unseal the Cursed Object, attracting dangerous Curses to their location.</p>';
            echo '</br>';
            echo '<a class="c1"> Adventure fiction, Dark fantasy, Supernatural fiction</a>';
            echo '</div></a>';

            echo '<p id="c2"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=one%20piece"><div class="column2">';
            echo '<img src="https://comicvine.gamespot.com/a/uploads/scale_small/11161/111610434/9002817-6125859241-97840.jpg">';
            echo '<h2>One Piece</h2>';
            echo '</br>';
            echo '<p> The series focuses on Monkey D. Luffy—a young man made of rubber after unintentionally eating a Devil Fruit—who sets off on a journey from the East Blue Sea to find the deceased King of the Pirates Gol D. Rogers ultimate treasure known as the "One Piece", and take over his prior title.</p>';
            echo '</br>';
            echo '<a class="c2"> Shonen, Action, Comedy, Fantasy</a>';
            echo '</div></a>';

            echo '<p id="c3"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=dragon%20ball%20super"><div class="column3">';
            echo '<img src="https://images.justwatch.com/poster/308834614/s592/season-1">';
            echo '<h2>Dragon Ball Super</h2>';
            echo '</br>';
            echo '<p>Dragon Ball tells the tale of a young warrior by the name of Son Goku, a young peculiar boy with a tail who embarks on a quest to become stronger and learns of the Dragon Balls, when, once all 7 are gathered, grant any wish of choice.</p>';
            echo '</br>';
            echo '<a class="c3">Adventure, Fantasy, Comedy, Martial arts</a>';
            echo '</div></a>';


            echo '<p id="c4"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=sousou%20no%20frieren"><div class="column4">';
            echo '<img src="https://m.media-amazon.com/images/M/MV5BMjVjZGU5ZTktYTZiNC00N2Q1LThiZjMtMDVmZDljN2I3ZWIwXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_FMjpg_UX1000_.jpg">';
            echo "<h2>Frieren: Beyond Journey's End</h2>";
            echo '</br>';
            echo '<p>The story follows elven mage Frieren, a former member of the party of adventurers who defeated the Demon King and restored harmony to the world after a ten-year quest. In the past, the heroic group included Frieren, human hero Himmel, dwarven warrior Eisen and human priest Heiter.</p>';
            echo '</br>';
            echo "<a class='c4'>Shonen manga, Fantasy</a>";
            echo '</div></a>';


            echo '<p id="c5"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=spy%C3%97family"><div class="column5">';
            echo '<img src="https://staticg.sportskeeda.com/editor/2022/08/07439-16617835648368-1920.jpg">';
            echo '<h2>Spy X Family</h2>';
            echo '</br>';
            echo '<p>The series follows master spy Twilight, who must disguise himself as psychiatrist Loid Forger and build a mock family in order to investigate political leader Donovan Desmond. Unbeknownst to him, his wife, Yor, is actually an assassin known as the Thorn Princess, while his daughter, Anya, has telepathic abilities.</p>';
            echo '</br>';
            echo '<a class="c5">Action, Detective/Mystery</a>';
            echo '</div></a>';


            echo '<p id="c6"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=eminence%20of%20shadow"><div class="column6">';
            echo '<img src="https://external-preview.redd.it/the-eminence-in-shadow-2nd-season-updated-visual-v0-o2c5j-eiM3a4srTP48zcFZJqGaB1oh9WR94q8QgLi2w.jpg?auto=webp&s=b815da8000add28d6e77a181b24bbaa4e50c1f1d">';
            echo '<h2>The Eminence in Shadow</h2>';
            echo '</br>';
            echo '<p> In modern-day Japan, a boy named Minoru Kageno aspires to be a mastermind, exerting power from the shadows. During his clandestine training, an unforeseen accident occurs when he gets hit by a truck, leading to his untimely demise. To his surprise, he finds himself reborn in a fantastical realm as Cid Kagenou.</p>';
            echo '</br>';
            echo '<a class="c6"> ActionAction, ComedyComedy, Fantasy</a>';
            echo '</div></a>';


            echo '<p id="c7"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=undead%20unlock"><div class="column7">';
            echo '<img src="https://m.media-amazon.com/images/M/MV5BZWMyMzU5ODEtZjViYy00ZGM5LWIzNjItOTUxNzA0OGJhNTc3XkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_.jpg">';
            echo '<h2>Undead Unluck </h2>';
            echo '</br>';
            echo '<p>Fuuko Izumi is an 18-year-old girl who is cursed with the power of Unluck. Anyone who touches her directly receives an extreme case of bad luck. Fed up, she decides to commit suicide. Before she can, she meets Undead, a being who cannot die and regenerates from any injury.</p>';
            echo '</br>';
            echo '<a class="c7">Adventure, Comedy, Supernatural</a>';
            echo '</div></a>';


            echo '<p id="c8"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=dr%20stone"><div class="column8">';
            echo '<img src="https://cdn.myanimelist.net/images/anime/1236/138696.jpg">';
            echo '<h2>Dr. Stone</h2>';
            echo '</br>';
            echo '<p>In 2019, a mysterious flash suddenly petrifies ostensibly on all humans. The human race is frozen in stone for 3,700 years until in April 5738, when 16-year-old prodigy Senku Ishigami is suddenly revived to find himself in a world where all traces of human civilization have been eroded by time.</p>';
            echo '</br>';
            echo '<a class="c8"> Animation, Action, Adventure, Comedy, Sci-Fi </a>';
            echo '</div></a>';

            echo '<p id="c9"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=goblin%20slayer"><div class="column9">';
            echo '<img src="https://cdn.myanimelist.net/images/anime/1100/138338.jpg">';
            echo '<h2>Goblin Slayer</h2>';
            echo '</br>';
            echo '<p>n a fantasy world, a lone hero makes his living by exterminating all goblins he encounters. But one day he meets a friend, and his life begins to become more intense. A young priestess has formed her first adventuring party, but almost immediately they find themselves in distress.</p>';
            echo '</br>';
            echo '<a class="c9"> Animation, Action, Adventure, Fantasy, Horror</a>';
            echo '</div></a>';


            echo '<p id="c10"></p>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<a href="https://www.bilibili.tv/en/search-result?q=ragna%20crimson"><div class="column10">';
            echo '<img src="https://cdn.myanimelist.net/images/anime/1661/137709.jpg">';
            echo '<h2>Ragna Crimson</h2>';
            echo '<p>In this action-packed dark fantasy, humanity lives under the threat of annihilation by immensely powerful dragons. The dragon hunter Ragna embarks on a revenge-fueled quest to eliminate that threat once and for all! Set on victory at any cost, Ragna joins forces with Crimson, a powerful dragon and traitor to his kind.</p>';
            echo '</br>';
            echo '<a class="c10">Action, Adventure, Drama, Fantasy, Mystery</a>';
            echo '</div></a>';
            
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '</div>';
            echo '</main>';
        echo"<script src='home.js'></script>";

        echo "</body>";
?>   
         
<?php
    session_start();
?>

<DOCTYPE.html>
    <html>
        <head>
        <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiAad47OOkSsKSfS82dybYog6VPRPYU5Z_smVniGxz6Ks7mnveO6_hKyk2Jmq71slaQNg&usqp=CAU" type="image/x-icon">
          
            <title>Sign in/Sign up Area</title>
            <link rel="stylesheet" href="styletrue.css">
              <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
      
        </head>
        <body>
        <!-- main -->
       
            <div class="container">
                <div class="forms-container">
                    <div class="signs2">
                    <div class="panels-container">
                    <div class="panel left-panel">
                        <div class="content2" id='content2'>
                            <h3>New Here?  ||  Already a User?</h3>
                            <p class='sign'>Ready to get full experience?   </p>
                           
                            <button class="btn transparent" id="sign-up-button" onclick="toggleForm()">Sign up/Sign in</button>
                           
                        </div>
                              </div>
                    <div class="panel right-panel">
                    <div class="content2" id="content2">
                           
                        </div>
                           </div>
                </div>
            </div>
                    <div class="signin_signup">
                        <form action='home.php' class="sign-in-form" id="sign-in-form" method="post" >
                            <h2 class="title">Sign in</h2>
                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='uname' placeholder="Username">
                            </div>
        <!-- SIGN in -->
                            <div class="input-field">
                                <i class="fas fas fa-lock"></i>
                                <input type="password" name='pass' id="pass" placeholder="Password">
                                <br><br>      
                                <div class="show-pass">
                                <input type="checkbox" onclick="myFunction()">&nbsp&nbspShow Password
                                </div>
                            </div>
                            <br>
                            <input type="reset" class='btn solid'>
                            <input type="submit" class="btn solid" value="Login" >
                            <a href="forgotpass.php" class="forpass">Forgot Password? </a>
                            <a href="delete1.php" class="forpass">Delete Account? </a>
                            <!-- <p class="social-text">Or Sign in with social platform</p>
                            <div class="social-media">
? SOCIAL ICONS        <a href="#" class="social-icon">  -->
                                    <!-- <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div> -->
                        </form>
                        </div>

                        <div class="signup_signup">
                        <form action='registercon.php' class="sign-up-form" id="sign-up-form" method="post">
                            <h2 class="title">Sign Up</h2>
                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='fullname' placeholder="Fullname">
                            </div>
        <!-- SIGN uP -->
                            <div class="input-field">
                                <i class="fas fas fa-envelope"></i>
                                <input type="email" name='email' placeholder="Email">
                            </div>

                            <div class="input-field">
                                <i class="fas fas fa-child"></i>
                                <input type="text" name='age' placeholder="age">
                            </div>

                            <div class="input-field">
                                <i class="fas fas fa-home"></i>
                                <input type="text" name='add' placeholder="Address">
                            </div>

                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='uname' placeholder="Username">
                            </div>
        <!-- SIGN up -->
                            <div class="input-field">
                                <i class="fas fas fa-lock"></i>
                                <input type="password" name='pass' id="pass2" placeholder="Password">
                                <br><br>      
                                <div class="show-pass">

                                <input type="checkbox" onclick="myFunction2()">&nbsp&nbspShow Password
                                </div>
                            </div>
                            <br>
                            <input type="submit" class="btn solid" id="btn-reg" value="Register">
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>
            <script src="move.js"></script>
            <script src="hide.js"></script>
            <script src="showpass.js"></script>
            <script src="showpass2.js"></script>
       
        
               
            
        </body>
    </html>
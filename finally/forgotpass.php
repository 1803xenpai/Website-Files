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
                            <h3>Want to Change Password?</h3>
                            <p class='sign'> Click the button below to go back </p>
                        <div id='backlogin'>
                        <a href="entrance.php" class='backlogin'>< Back to Log in</a>
                        </div>
                        </div>
                              </div>
                    <div class="panel right-panel">
                    <div class="content2" id="content2">
                           
                        </div>
                           </div>
                </div>
            </div>
                    <div class="signin_signup">
                        <form action='success.php' class="sign-in-form" id="sign-in-form" method="post" >
                            <h2 class="title">Change Password</h2>
                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='uname' placeholder="Username">
                            </div>
        <!-- SIGN in -->
                            <div class="input-field">
                                <i class="fas fas fa-lock"></i>
                                <input type="password" name='newpass' id="pass" placeholder="New Password">
                                    <br>
                                <div class="show-pass">
                                <input type="checkbox" onclick="myFunction()">&nbsp&nbspShow Password
                                </div>
                            </div>
                            <br>
                            <div class="input-field">
                                
                            <i class="fas fas fa-lock"></i>
                                <input type="password" name='confirm' id="pass2" placeholder="Confirm Password">
                                <br><br> 
                                <div class="show-pass">

                                <input type="checkbox" onclick="myFunction2()">&nbsp&nbspShow Password
                                </div>
                            <br>
                            </div>  
                            <br>
                            
                            <input type="submit" class="btn solid" id='btn-solid' value="Set as New Password" >
                           
                            <!-- <p class="social-text">Or Sign in with social platform</p>
                            <div class="social-media">
 <SOCIAL ICONS        <a href="#" class="social-icon">  -->
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

                        </form>
                    </div>
                    </div>
                    </div>
                    <script src="moving.js"></script>
                    <script src="showpass2.js"></script>
                    <script src="showpass.js"></script>
               
            
        </body>
    </html>
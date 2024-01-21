<DOCTYPE.html>
    <html>
        <head>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiAad47OOkSsKSfS82dybYog6VPRPYU5Z_smVniGxz6Ks7mnveO6_hKyk2Jmq71slaQNg&usqp=CAU" type="image/x-icon">
          
          <title>Sign in/Sign up Area</title>
          <link rel="stylesheet" href="styletrue.css">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
       </head>
        <body>
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
        </body>
    </html>
<body>
            <link rel="stylesheet" href="css/loginstyle.css"> <!--Import CSS-->
                <div class = "header">
                    <img src="images\studiologo.png" width="100px" height="90px" alt="logo" class="logo">
                    <h2>companyName</h2>
                </div>
                <form method="POST" action="loginProcess.php" name="loginform">
                  <div class="box">
                      <div class="box-title">
                        <img src="images\loginlogo.png" width="40px" height="35px" alt="logo">
                        <h3>User Login</h3>
                      </div>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Email" name="uname" class="input-box"
                        value="<?php if (isset($cu)){ echo  $cu;} ?>" required>

                        <label for="password"> <b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" class="input-box"
                        value="<?php if (isset($cp)){ echo  $cp;} ?>" required>

                        <div class="container">
                            <button type="submit" name="submit" class="loginbtn">Login</button>
                            <button type="reset" class="cancelbtn">Clear</button>
                        </div>
                    <a href="register.php" class="final">Not a user yet? Sign up now!</a> <br><br>
                    <a href="forgetpassword.php" class="final">forget password</a>
                </div>
                </form>


<?php include('footer.php') ?>
</body>
<?php
    include('./config/settings.php');
    require_once('./config/function.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>ResetPassword</title>
    <link rel="stylesheet" href="css/resetpassword.css"/>   <!--Import CSS-->
</head>
<body>
     <div class="header">
        <a href="index.php" class="logo"><img src="images\logo.png"></a> 
        <a href="index.php" class="logo">&emsp;&emsp;&emsp;&emsp;explore us</a>
        <h3><?php echo $companyName?></h3>
     </div>
     <div class="title">
        <h2>Reset Password<h2>
     </div>
     <div class="box">
        <div class="resetlogo">
            <img src="images\newpassword.jpg" width="60px" height="60px" alt="logo"> 
        </div>
<?php
    if (isset($_GET["token"]) && isset($_GET["userid"]) && ($_GET["action"]=="reset")){
            
            $token = $_GET["token"];
            $email = $_GET["userid"];
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $curDate = date("Y-m-d H:i:s");
            mysqli_select_db($conn,"webproject"); ///select database as default
            $sql = "SELECT * FROM `tbl_password_reset` WHERE `token`='".$token."' AND `email`='".$email."' ";
            $query = mysqli_query($conn,$sql);
            $row = mysqli_num_rows($query);

            if(mysqli_num_rows($query) == 0){
                echo '<div class=invalid-text> <h2>Invalid Link</h2>
                <p>The reset token is invalid/expired. Either you did not reset the password in time, 
                or you have already used the key in which case it is deactivated.</p> </div>';
            }
            else{
                $row = mysqli_fetch_assoc($query);
                $expDate = $row['expDate'];
                if ($expDate >= $curDate){
                ?>
                    <form method="post" action="" name="update">
                    <input type="hidden" name="action" value="update" />
                    <br />
                    <label><strong>Enter New Password:</strong></label><br />
                    <input type="password" name="pass1" maxlength="15" placeholder="New Password" class="input-box" required />
                    <br />
                    <label><strong>Re-Enter New Password:</strong></label><br />
                    <input type="password" name="pass2" maxlength="15" placeholder="Confirm Password" class="input-box" required/>
                    <input type="hidden" name="email" value="<?php echo $email;?>"/>
                    <button type="submit" value="Reset Password">Reset Password</button>
                    </form>
                    <?php
                }else{
                        echo  '<div class=invalid-text><h2>Link Expired</h2>
                        <p>The link is expired. Please request again in order to change your password.<br /><br /></p> </div>';
                    }
                }
		
            }//done validate

                if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
                    $error = "";
                    $pass1 = mysqli_real_escape_string($conn,$_POST["pass1"]);
                    $pass2 = mysqli_real_escape_string($conn,$_POST["pass2"]);
                    $email = $_POST["email"];
                    $curDate = date("Y-m-d H:i:s");
                if ($pass1!=$pass2){
                    $error.= "<p class='warning-text'>Password do not match, <br />both password should be same.<br /></p>";
                }
                if($error!=""){
                    echo "<div class='error'>".$error."</div><br />";
                }else{
                mysqli_query($conn, "UPDATE `tbluser` SET `password`='".$pass1."' WHERE `email`='".$email."';");
                mysqli_query($conn,"DELETE FROM `tbl_password_reset` WHERE `email`='".$email."';");
                goto2("login.php","Congratulations! Your password has been updated successfully.");
                    }		
                }
        ?>
    </div>
</body>
</html>
<?php include ('footer.php'); ?>
        
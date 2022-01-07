<?php
    include('./config/settings.php');
    require_once('./config/function.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>ChangePassword</title>
    <link rel="stylesheet" href="css/forgetpassword.css"/>   <!--Import CSS-->
</head>
<body>
    <div class="header">
        <a href="index.php" class="logo"><img src="images\logo.png"></a> 
        <a href="index.php" class="logo">&emsp;&emsp;&emsp;&emsp;explore us</a>
        <h3><?php echo $companyName?></h3>
    </div>
    <div class="title">
    <h2 >Forgot Password<h2>
    </div>
    <div class="box">
    <form action="" method="POST" name="reset">
        <div class="resetlogo">
            <img src="images\resetlogo.jpg" width="65px" height="60px" alt="logo"> 
        </div>
        <table cellspacing='5' align='center'>
        <tr>
            <td class="box-title">Enter your Email Address:</td>
        </tr>
        <tr>
            <td><input type='text' name='userid' placeholder="Email Address" class="input-box" required/></td>
        </tr>
        <tr>
            <td><button type='submit' name='submit' value='Submit'>Submit</button></td>
        </tr>
        </table>
    </form>
<?php
if(isset($_POST["userid"]) && (!empty($_POST["userid"]))){
    $userid = $_POST['userid'];
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result = mysqli_query($conn,"SELECT `UserID` FROM `tbluser` WHERE `UserID`= '".$userid."'");
    if(mysqli_num_rows($result) > 0){
            $expFormat = mktime(date("H"), date("i")+5, date("s"), date("m") ,date("d"), date("Y"));
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $expDate = date("Y-m-d H:i:s",$expFormat);
            $token = generateRandomString($length = 10);
            // Insert Temp Table
            mysqli_query($conn, "INSERT INTO `tbl_password_reset` (`email`, `token`, `expDate`)
                                VALUES ('".$userid."', '".$token."', '".$expDate."');");
            $output='<p class="link-text">User found, please click on the following link to reset your password within 5 minutes.</p>';
            $output.='<p class="link-text"><a href="resetpassword.php?token='.$token.'&userid='.$userid.'&action=reset">Reset Now, click on me!</a></p>';		
            echo $output;
    }
    else{
		goto2("forgetpassword.php","The email address is not exists, please try again.");
	}
}?>

    </div>
</body>
<?php include ('footer.php'); ?>
</html>






<?php 
    include('./config/settings.php');
    require_once('./config/function.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="css/registerstyle.css"/>   <!--Import CSS-->
</head>
<body>
<?php
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        $userid = $_POST['email'];
        $usertype = $_POST['usertype'];
        $password    = $_POST['password'];
        $name    = $_POST['uname'];
        $address1 = $_POST['add1'];
        $address2 = $_POST['add2'];
        $postcode = $_POST['postcode'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
      //  $picture =  $_POST['avatar'];
        $filename = $_FILES["avatar"]["name"];
        $tempname = $_FILES["avatar"]["tmp_name"];   
        $folder = "./images/".$filename;  
        move_uploaded_file($tempname, $folder);

        date_default_timezone_set("Asia/Kuala_Lumpur");
        $create_datetime = date("Y-m-d H:i:s");

        $query    = "INSERT into `tbluser` (`UserID` , `UserType`, `Password`, `Name`, `Address1`, `Address2`,
                                            `PostCode`, `State`, `City`, `Country`, `Email`, `created_time`, `avatar` )
                     VALUES ('".$userid."', '".$usertype."','".$password."','".$name."','".$address1."','".$address2."',
                     '".$postcode."','".$state."','".$city."','".$country."','".$userid."','".$create_datetime."','".$filename."')";
        
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result   = mysqli_query($conn, $query);
        if ($result) {
            goto2("login.php","You are registered successfully.");
        } else {
            goto2("login.php","Register Failed, Please try again");
        }
    } else {
?> 
    <div class="header">
        <a href="index.php" class="logo"><img src="images\logo.png"></a> 
        <a href="index.php" class="logo">&emsp;&emsp;&emsp;&emsp;explore us</a>
        <h3>companyName</h3>
    </div>
    <div class="rightcircle"></div><div class="rightline"></div>
    <form class="form" action="" method="post"  enctype="multipart/form-data">
        <h1 class="register-title">Registration</h1>
    <div class="register-container">
        <label for="email" class="login-label"><b>Email*</b></label>
        <input type="text" class="login-input" name="email" placeholder="Email Address" required size=30> <br>
        <label for="uname" class="login-label"><b>Username*</b></label>
        <input type="text" class="login-input" name="uname" placeholder="Username" required size=30> <br>
        <label for="password" class="login-label"><b>Password*</b></label>
        <input type="password" class="login-input" name="password" placeholder="Password" required size=30> <br>
        <label for="add1" class="login-label"><b>Address line 1</b></label>
        <input type="text" class="login-input" name="add1" size=30> <br>
        <label for="add2" class="login-label"><b>Address line 2</b></label>
        <input type="text" class="login-input" name="add2" size=30> <br>
        <label for="postcode" class="login-label"><b>PostCode</b></label>
        <input type="text" class="login-input" name="postcode" size=30> <br>
        <label for="city" class="login-label"><b>City</b></label>
        <input type="text" class="login-input" name="city" size=30> <br>
        <label for="state" class="login-label"><b>State</b></label>
        <input type="text" class="login-input" name="state" size=30> <br>
        <label for="country" class="login-label"><b>Country</b></label>
        <input type="text" class="login-input" name="country" size=30>
        <label for="avatar" class="login-label"><b>User Avatar</b></label>
        <input type="file" class="login-input" name="avatar" value="">     
        <label for="usertype" class="login-label"><b>UserType</b></label>
        <select name="usertype" id="usertype" class="login-input"> <br>
            <option value="0">Select the Usertype</option>
            <!-- repeat value taken from db -->
            <?php
            mysqli_select_db($conn,"webproject"); ///select database as default
            $sql ="select * from tblcategory";  // sql command
            $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
            while($row=mysqli_fetch_assoc($result)){   ?> 
                <option value="<?php echo $row['UserType'];?>"><?php echo $row['UserType'];?></option>
            <?php }  
                ?>
       </select>
        <input type="submit" name="submit" value="Register" class="register-button">
        <p class="link">Already have an account? <a href="login.php">Login here!</a></p>
    </div>   
    </form>
            
<?php
    }
?>
<?php
   include('footer.php');
?>
</body>
</html>

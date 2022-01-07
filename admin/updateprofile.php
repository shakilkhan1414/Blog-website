<?php session_start(); ?>
<?php 
    include('../config/variable.php');
    include('../config/db.php');
    include('../config/function.php');
    include('../config/session.php'); 
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Update User Info</title>
    <link rel="stylesheet" href="../css/updateregister.css"/>   <!--Import CSS-->
</head>
<body>
<?php
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        $id=$_GET['userid'];
        $Password    = $_POST['Password'];
        $Name    = $_POST['Name'];
        $Address1 = $_POST['Address1'];
        $Address2 = $_POST['Address2'];
        $PostCode = $_POST['PostCode'];
        $City = $_POST['City'];
        $State = $_POST['State'];
        $Country = $_POST['Country'];

        $filename = $_FILES["avatar"]["name"];
        $tempname = $_FILES["avatar"]["tmp_name"];   
        $filename = trim($filename);
        $folder = "../images/".$filename;  
        move_uploaded_file($tempname, $folder);

        $sql ="UPDATE `tbluser` SET `Password`='".$Password."',`Name`='".$Name."',  
        `Address1`='".$Address1."',  `Address2`='".$Address2."',  `PostCode`='".$PostCode."',  `City`='".$City."',  
        `State`='".$State."', `Country`='".$Country."', `avatar`='".$filename."'
        WHERE (`UserID`='".$id."') LIMIT 1";  // sql command
        
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
      //mysqli_fetch_assoc($result); 
       goto2("../logout.php", "User profile is successfully updated, please login again.");
} else {
    $id=$_GET['userid'];
    $sql ="select * from tbluser where UserID='".$id."'";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    $row=mysqli_fetch_assoc($result); 
?> 
    <div class="header">
        <a href="index.php" class="logo"><img src="../images/logo.png"></a> 
        <a href="index.php" class="logo">&emsp;&emsp;&emsp;&emsp;explore us</a>
        <h3>The Symmetry Studio</h3>
    </div>
    <div class="rightcircle"></div><div class="rightline"></div>
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <h1 class="register-title">Update User Info</h1>
    <div class="register-container">
        <label for="Name" class="login-label"><b>Username*</b></label>
        <input type="text" class="login-input" name="Name" placeholder="Username" value="<?php echo $row['Name'];?>" required size=30></input> <br><br>
        <label for="Password" class="login-label"><b>Password*</b></label>
        <input type="Password" class="login-input" name="Password" placeholder="Password" value="<?php echo $row['Password'];?>" required size=30> <br>
        <label for="Address1" class="login-label" ><b>Address line 1</b></label>
        <input type="text" class="login-input" name="Address1" size=30 value="<?php echo $row['Address1'];?>"> <br>
        <label for="Address2" class="login-label"><b>Address line 2</b></label>
        <input type="text" class="login-input" name="Address2" size=30 value="<?php echo $row['Address2'];?>"> <br>
        <label for="PostCode" class="login-label"><b>PostCode</b></label>
        <input type="text" class="login-input" name="PostCode" size=30 value="<?php echo $row['PostCode'];?>"> <br>
        <label for="City" class="login-label"><b>City</b></label>
        <input type="text" class="login-input" name="City" size=30 value="<?php echo $row['City'];?>"> <br>
        <label for="State" class="login-label"><b>State</b></label>
        <input type="text" class="login-input" name="State" size=30 value="<?php echo $row['State'];?>"> <br>
        <label for="Country" class="login-label"><b>Country</b></label>
        <input type="text" class="login-input" name="Country" size=30 value="<?php echo $row['Country'];?>">
        <label for="Avatar" class="login-label"><b>Avatar</b></label>
        <input type="file" class="login-input" name="avatar" value="<?php echo $row['avatar'];?>">     
        <input type="submit" name="submit" value="Submit" class="register-button">
        </div> 

    </form>
            
<?php
    }
?>
</body>
<?php
   include('../footer.php');
?>

</html>
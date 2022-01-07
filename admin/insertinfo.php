<?php session_start(); ?>

<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>

<link rel="stylesheet" href="../css/info.css">
<link rel="stylesheet" href="../css/style.css">
<style>
  th{
    text-align: left;
    width:20%;
  }
</style>

<html>
<body>
  <div class="header">
        <a href="../index.php" class="logo"><img src="../images/logo.png"></a> 
        <a href="../index.php" class="logo">&emsp;&emsp;&emsp;&emsp;explore us</a>
        <h3><b>The Symmetry Studio</b></h3>
  </div>
  <a href="viewinfo.php" class="add-label"><-Back</a>
<?php 

if (isset($_POST['Save'])){
 //echo " you have try to save ";
        $i1=$_POST['infoid'];
        $i2=$_POST['CompanyName'];
        $i3=$_POST['CompanyDescription'];
        $i4=$_POST['Characteristics1'];
        $i5=$_POST['CharacterDesc1'];
        $i6=$_POST['Characteristics2'];
        $i7=$_POST['CharacterDesc2'];
        $i8=$_POST['Characteristics3'];
        $i9=$_POST['CharacterDesc3'];
        $i10=$_POST['Desc1title'];
        $i11=$_POST['Desc1'];
        $i12=$_POST['Desc2title'];
        $i13=$_POST['Desc2'];
        $sql ="INSERT INTO `aboutus` (`infoID`, `CompanyName`, `CompanyDescription`, `Characteristics1`,
                                      `Char_Description1`, `Characteristics2`, `Char_Description2`,
                                      `Characteristics3`, `Char_Description3`, `Description1title`, 
                                      `Description1`, `Description2title`, `Description2`) 
        VALUES ('".$i1."', '".$i2."', '".$i3."', '".$i4."', '".$i5."', '".$i6."', '".$i7."', '".$i8."', '".$i9."',
                '".$i10."', '".$i11."', '".$i12."', '".$i13."')";  // sql insert command
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

        if(!$result){
          goto2("insertinfo.php"," Current info-id is in-use.");  
        }
       // mysqli_fetch_assoc($result); 
        goto2("viewinfo.php"," New company info is successfully Inserted");
} else {
  
?>
<form action="insertinfo.php" method="POST">
  <table>
  <tr><th>
  <label for="InfoID" class="add-label">Info ID:</label></th>
  <td><input type="text"  id="infoid" name="infoid" class="add-input"></td></tr>
  <tr><th>
  <label for="CompanyName" class="add-label"> Company Name:</label></th>
  <td><TEXTAREA  name="CompanyName" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="CompanyDescription" class="add-label"> Company Description:</label></th>
  <td><TEXTAREA  name="CompanyDescription" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="Characteristics1" class="add-label"> Characteristics1: </label></th>
  <td><TEXTAREA  name="Characteristics1" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="CharacterDesc1" class="add-label"> Characteristics Description 1:</label></th>
  <td><TEXTAREA  name="CharacterDesc1" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="Characteristics2" class="add-label"> Characteristics2: </label></th>
  <td><TEXTAREA  name="Characteristics2" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="CharacterDesc2" class="add-label"> Characteristics Description 2:</label></th>
  <td><TEXTAREA  name="CharacterDesc2" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="Characteristics3" class="add-label"> Characteristics3: </label></th>
  <td><TEXTAREA  name="Characteristics3" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="CharacterDesc3" class="add-label"> Characteristics Description 3:</label></th>
  <td><TEXTAREA  name="CharacterDesc3" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="Desc1title" class="add-label"> Description title 1:</label></th>
  <td><TEXTAREA  name="Desc1title" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="Desc1" class="add-label"> Description 1: </label></th>
  <td><TEXTAREA  name="Desc1" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="Desc2title" class="add-label"> Description title 2:</label></th>
  <td><TEXTAREA name="Desc2title" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
  <tr><th>
  <label for="Desc2" class="add-label"> Description 2: </label></th>
  <td><TEXTAREA name="Desc2" row="5" cols="30" class="add-input"></TEXTAREA></td></tr>
</table>
  <button type="submit" name="Save" value="Save" class="add-button">Add information</button>
</form>
<?php
?>

<?php } 
?>

<?php include('../footer.php'); ?>


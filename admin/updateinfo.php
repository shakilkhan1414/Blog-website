<?php session_start();?>
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
        $id=$_GET['infoid'];  //error  type="text" disabled 
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
        $sql ="UPDATE `aboutus` SET `CompanyName`='".$i2."' , `CompanyDescription`='".$i3."',`Characteristics1`='".$i4."',  
        `Char_Description1`='".$i5."',  `Characteristics2`='".$i6."',  `Char_Description2`='".$i7."',  `Characteristics3`='".$i8."',  
        `Char_Description3`='".$i9."', `Description1title`='".$i10."',  `Description1`='".$i11."',  `Description2title`='".$i12."', 
        `Description2`='".$i13."'     
        WHERE (`infoID`='".$id."')";  // sql command

              // $sql = "UPDATE `aboutus` SET `CompanyName`= '{$i2}', `CompanyDescription`='{$i3}', `Characteristics`='{$i4}',
              // `Description`='{$i5}', `Description1title`='{$i6}',  `Description1`='{$i7}',  `Description2title`='{$i8}',
              // `Description2`='{$i9}'  
              // WHERE `infoID` = '{$id}'";
        
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
      //mysqli_fetch_assoc($result); 
       goto2("viewinfo.php"," AboutUs is successfully updated");
} else {
    $id=$_GET['infoid'];
    $sql ="select * from aboutus where infoid='".$id."'";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    $row=mysqli_fetch_assoc($result); 

?>
<form action="updateinfo.php?infoid=<?php echo $id; ?>" method="POST">
  <table>
  <tr><th>
  <label for="InfoID" class="add-label">Info ID:</label></th>
  <td><input type="text"  id="infoid" name="infoid" class="add-input" value="<?php echo $id; ?> "></td></tr>
  <tr><th>
  <label for="CompanyName" class="add-label"> Company Name:</label></th>
  <td><TEXTAREA  name="CompanyName" row="5" cols="30" class="add-input"><?php echo $row['CompanyName'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="CompanyDescription" class="add-label"> Company Description:</label></th>
  <td><TEXTAREA  name="CompanyDescription" row="5" cols="30" class="add-input"><?php echo $row['CompanyDescription'];?></TEXTAREA></td></tr>
  <tr><th>  
  <label for="Characteristics1" class="add-label"> Characteristics1: </label></th>
  <td><TEXTAREA  name="Characteristics1" row="5" cols="30" class="add-input"><?php echo $row['Characteristics1'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="CharacterDesc1" class="add-label"> Characteristics Description 1:</label></th>
  <td><TEXTAREA  name="CharacterDesc1" row="5" cols="30" class="add-input"><?php echo $row['Char_Description1'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="Characteristics2" class="add-label"> Characteristics2: </label></th>
  <td><TEXTAREA  name="Characteristics2" row="5" cols="30" class="add-input"><?php echo $row['Characteristics2'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="CharacterDesc2" class="add-label"> Characteristics Description 2:</label></th>
  <td><TEXTAREA  name="CharacterDesc2" row="5" cols="30" class="add-input"><?php echo $row['Char_Description2'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="Characteristics3" class="add-label"> Characteristics3: </label></th>
  <td><TEXTAREA  name="Characteristics3" row="5" cols="30" class="add-input"><?php echo $row['Characteristics3'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="CharacterDesc3" class="add-label"> Characteristics Description 3:</label></th>
  <td><TEXTAREA  name="CharacterDesc3" row="5" cols="30" class="add-input"><?php echo $row['Char_Description3'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="Desc1title" class="add-label"> Description title 1:</label></th>
  <td><TEXTAREA  name="Desc1title" row="5" cols="30" class="add-input"><?php echo $row['Description1title'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="Desc1" class="add-label"> Description 1: </label></th>
  <td><TEXTAREA  name="Desc1" row="5" cols="30" class="add-input"><?php echo $row['Description1'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="Desc2title" class="add-label"> Description title 2:</label></th>
  <td><TEXTAREA name="Desc2title" row="5" cols="30" class="add-input"><?php echo $row['Description2title'];?></TEXTAREA></td></tr>
  <tr><th>
  <label for="Desc2" class="add-label"> Description 2: </label></th>
  <td><TEXTAREA name="Desc2" row="5" cols="30" class="add-input"><?php echo $row['Description2'];?></TEXTAREA></td></tr>
  </table>

  <p><button type="submit" value="Save" name="Save" class="add-button">Save information</button></p>
</form>

<?php } ?>


<?php include("../footer.php"); ?>

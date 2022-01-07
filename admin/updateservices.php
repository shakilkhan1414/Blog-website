<?php session_start();?>
<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>


<?php 

if (isset($_POST['Save'])){
 //echo " you have try to save ";
        $id=$_GET['ServicesID'];  //error  type="text" disabled 
        $i2=$_POST['ServicesTitle1'];
        $i3=$_POST['ServicesDescription1'];
        $i4=$_POST['ServicesTitle2'];
        $i5=$_POST['ServicesDescription2'];
        $i6=$_POST['ServicesTitle3'];
        $i7=$_POST['ServicesDescription3'];
        $i8=$_POST['ServicesTitle4'];
        $i9=$_POST['ServicesDescription4'];
        $i10=$_POST['ServicesTitle5'];
        $i11=$_POST['ServicesDescription5'];
        $i12=$_POST['ServicesTitle6'];
        $i13=$_POST['ServicesDescription6'];
        
        $sql ="UPDATE `services` SET `ServicesTitle1`='".$i2."' , `ServicesDescription1`='".$i3."', `ServicesTitle2`='".$i4."', `ServicesDescription2`='".$i5."', `ServicesTitle3`='".$i6."', `ServicesDescription3`='".$i7."', `ServicesTitle4`='".$i8."', `ServicesDescription4`='".$i9."', `ServicesTitle5`='".$i10."', `ServicesDescription5`='".$i11."', `ServicesTitle6`='".$i12."', `ServicesDescription6`='".$i13."'
        WHERE (`ServicesID`='".$id."') LIMIT 1";  // sql command

              // $sql = "UPDATE `aboutus` SET `CompanyName`= '{$i2}', `CompanyDescription`='{$i3}', `Characteristics`='{$i4}',
              // `Description`='{$i5}', `Description1title`='{$i6}',  `Description1`='{$i7}',  `Description2title`='{$i8}',
              // `Description2`='{$i9}'  
              // WHERE `infoID` = '{$id}'";
        
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
      //mysqli_fetch_assoc($result); 
       goto2("viewservices.php"," Services is successfully updated");
} else {
    $id=$_GET['ServicesID'];
    $sql ="select * from services where ServicesID='".$id."'";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    $row=mysqli_fetch_assoc($result); 

?>
<form action="updateservices.php?ServicesID=<?php echo $id; ?>" method="POST">
  <label for="ServicesID">Services ID:</label>
  <input type="text" disabled id="ServicesID" name="ServicesID" value="<?php echo $id; ?> "><br><br>

  <label for="ServicesTitle1"> Services title1:</label>
  <TEXTAREA  name="ServicesTitle1" row="4" cols="30"><?php echo $row['ServicesTitle1'];?></TEXTAREA><br><br>
  <label for="ServicesDescription1"> Services Description1:</label>
  <TEXTAREA  name="ServicesDescription1" row="4" cols="30"><?php echo $row['ServicesDescription1'];?></TEXTAREA><br><br>

  <label for="ServicesTitle2"> Services title2:</label>
  <TEXTAREA  name="ServicesTitle2" row="4" cols="30"><?php echo $row['ServicesTitle2'];?></TEXTAREA><br><br>
  <label for="ServicesDescription2"> Services Description2:</label>
  <TEXTAREA  name="ServicesDescription2" row="4" cols="30"><?php echo $row['ServicesDescription2'];?></TEXTAREA><br><br>

  <label for="ServicesTitle3"> Services title3:</label>
  <TEXTAREA  name="ServicesTitle3" row="4" cols="30"><?php echo $row['ServicesTitle3'];?></TEXTAREA><br><br>
  <label for="ServicesDescription3"> Services Description3:</label>
  <TEXTAREA  name="ServicesDescription3" row="4" cols="30"><?php echo $row['ServicesDescription3'];?></TEXTAREA><br><br>

  <label for="ServicesTitle4"> Services title4:</label>
  <TEXTAREA  name="ServicesTitle4" row="4" cols="30"><?php echo $row['ServicesTitle4'];?></TEXTAREA><br><br>
  <label for="ServicesDescription4"> Services Description4:</label>
  <TEXTAREA  name="ServicesDescription4" row="4" cols="30"><?php echo $row['ServicesDescription4'];?></TEXTAREA><br><br>

  <label for="ServicesTitle5"> Services title5:</label>
  <TEXTAREA  name="ServicesTitle5" row="4" cols="30"><?php echo $row['ServicesTitle5'];?></TEXTAREA><br><br>
  <label for="ServicesDescription5"> Services Description5:</label>
  <TEXTAREA  name="ServicesDescription5" row="4" cols="30"><?php echo $row['ServicesDescription5'];?></TEXTAREA><br><br>

  <label for="ServicesTitle6"> Services title6:</label>
  <TEXTAREA  name="ServicesTitle6" row="4" cols="30"><?php echo $row['ServicesTitle6'];?></TEXTAREA><br><br>
  <label for="ServicesDescription6"> Services Description6:</label>
  <TEXTAREA  name="ServicesDescription6" row="4" cols="30"><?php echo $row['ServicesDescription6'];?></TEXTAREA><br><br>

  <p><input type="submit" value="Save" name="Save"></p>
</form>

<?php } ?>


<?php include("../footer.php"); ?>
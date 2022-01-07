<?php
// form -> texbox-> submit-> reload the data

?>

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
        $i1=$_POST['ServicesID'];
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
        
        $sql ="INSERT INTO `services` (`ServicesID`, `ServicesTitle1`, `ServicesDescription1`, `ServicesTitle2`, `ServicesDescription2`, `ServicesTitle3`, `ServicesDescription3`, `ServicesTitle4`, `ServicesDescription4`, `ServicesTitle5`, `ServicesDescription5`, `ServicesTitle6`, `ServicesDescription6`) 
        VALUES ('".$i1."', '".$i2."', '".$i3."', '".$i4."', '".$i5."', '".$i6."', '".$i7."', '".$i8."', '".$i9."', '".$i10."', '".$i11."', '".$i12."', '".$i13."')";  // sql insert command
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
      goto2("viewservices.php"," New services info is successfully Inserted");
} else {
  
?>
<form action="insertservices.php" method="POST">
  <label for="ServicesID">Info ID:</label>
  <input type="text"  id="ServicesID" name="ServicesID" ><br><br>
  <label for="ServicesTitle1"> Services Title1:</label>
  <TEXTAREA  name="ServicesTitle1" row="4" cols="30"></TEXTAREA><br><br>
  <label for="ServicesDescription1"> Services Description1:</label>
  <TEXTAREA  name="ServicesDescription1" row="4" cols="30"></TEXTAREA><br><br>
  
  <label for="ServicesTitle2"> Services Title2:</label>
  <TEXTAREA  name="ServicesTitle2" row="4" cols="30"></TEXTAREA><br><br>
  <label for="ServicesDescription2"> Services Description2:</label>
  <TEXTAREA  name="ServicesDescription2" row="4" cols="30"></TEXTAREA><br><br>

  <label for="ServicesTitle3"> Services Title3:</label>
  <TEXTAREA  name="ServicesTitle3" row="4" cols="30"></TEXTAREA><br><br>
  <label for="ServicesDescription3"> Services Description3:</label>
  <TEXTAREA  name="ServicesDescription3" row="4" cols="30"></TEXTAREA><br><br>

  <label for="ServicesTitle4"> Services Title4:</label>
  <TEXTAREA  name="ServicesTitle4" row="4" cols="30"></TEXTAREA><br><br>
  <label for="ServicesDescription4"> Services Description4:</label>
  <TEXTAREA  name="ServicesDescription4" row="4" cols="30"></TEXTAREA><br><br>

  <label for="ServicesTitle5"> Services Title5:</label>
  <TEXTAREA  name="ServicesTitle5" row="4" cols="30"></TEXTAREA><br><br>
  <label for="ServicesDescription5"> Services Description5:</label>
  <TEXTAREA  name="ServicesDescription5" row="4" cols="30"></TEXTAREA><br><br>

  <label for="ServicesTitle6"> Services Title6:</label>
  <TEXTAREA  name="ServicesTitle6" row="4" cols="30"></TEXTAREA><br><br>
  <label for="ServicesDescription6"> Services Description6:</label>
  <TEXTAREA  name="ServicesDescription6" row="4" cols="30"></TEXTAREA><br><br>

  <input type="submit" name="Save" value="Save">
</form>
<?php
?>

<?php } ?>


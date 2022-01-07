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
        $i1=$_POST['pricingID'];  //error  type="text" disabled 
        $i2=$_POST['planName1'];
        $i3=$_POST['planValue1'];
        $i4=$_POST['planDescriptionA1'];
        $i5=$_POST['planDescriptionA2'];
        $i6=$_POST['planDescriptionA3'];
        $i7=$_POST['planDescriptionA4'];
        $i8=$_POST['planDescriptionA5'];
        $i9=$_POST['planDescriptionA6'];
        $i10=$_POST['planName2'];
        $i11=$_POST['planValue2'];
        $i12=$_POST['planDescriptionB1'];
        $i13=$_POST['planDescriptionB2'];
        $i14=$_POST['planDescriptionB3'];
        $i15=$_POST['planDescriptionB4'];
        $i16=$_POST['planDescriptionB5'];
        $i17=$_POST['planDescriptionB6'];
        $i18=$_POST['planName3'];
        $i19=$_POST['planValue3'];
        $i20=$_POST['planDescriptionC1'];
        $i21=$_POST['planDescriptionC2'];
        $i22=$_POST['planDescriptionC3'];
        $i23=$_POST['planDescriptionC4'];
        $i24=$_POST['planDescriptionC5'];
        $i25=$_POST['planDescriptionC6'];
        $sql ="INSERT INTO `pricing` (`planName1`, `planValue1`, `planDescriptionA1`,`planDescriptionA2`,`planDescriptionA3`,
                                      `planDescriptionA4`,`planDescriptionA5`,`planDescriptionA6`, `planName2`,
                                      `planValue2`, `planDescriptionB1`,`planDescriptionB2`,`planDescriptionB3`,
                                      `planDescriptionB4`,`planDescriptionB5`,`planDescriptionB6`, `planName3`,
                                      `planValue3`, `planDescriptionC1`,`planDescriptionC2`,`planDescriptionC3`,
                                      `planDescriptionC4`,`planDescriptionC5`,`planDescriptionC6`) 
        VALUES ('".$i1."', '".$i2."', '".$i3."', '".$i4."', '".$i5."', '".$i6."', '".$i7."', '".$i8."', '".$i9."',
                '".$i10."', '".$i11."', '".$i12."', '".$i13."', '".$i14."', '".$i15."''".$i16."', '".$i17."', '".$i18."',
                 '".$i19."', '".$i20."','".$i21."', '".$i22."', '".$i23."', '".$i24."', '".$i25."')";  // sql insert command
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
      goto2("viewpricing.php"," New plan details succesfully added");
} else {
  
?>
<form action="insertpricing.php" method="POST">
  <label for="pricingID">Item Price ID:</label>
  <input type="text"  id="pricingID" name="pricingID" ><br><br>
  <label for="planName1"> Plan Name 1: </label>
  <TEXTAREA  name="planName1" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planValue1"> Plan Value 1: </label>
  <TEXTAREA  name="planValue1" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionA1"> Description 1: </label>
  <TEXTAREA  name="planDescriptionA1" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionA2"> Description 2: </label>
  <TEXTAREA  name="planDescriptionA2" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionA3"> Description 3: </label>
  <TEXTAREA  name="planDescriptionA3" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionA4"> Description 4: </label>
  <TEXTAREA  name="planDescriptionA4" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionA5"> Description 5: </label>
  <TEXTAREA  name="planDescriptionA5" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionA6"> Description 6: </label>
  <TEXTAREA  name="planDescriptionA6" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planName2"> Plan Name 2: </label>
  <TEXTAREA  name="planName2" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planValue2"> Plan Value 2: </label>
  <TEXTAREA  name="planValue2" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionB1"> Description 1: </label>
  <TEXTAREA  name="planDescriptionB1" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionB2"> Description 2: </label>
  <TEXTAREA  name="planDescriptionB2" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionB3"> Description 3: </label>
  <TEXTAREA  name="planDescriptionB3" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionB4"> Description 4: </label>
  <TEXTAREA  name="planDescriptionB4" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionB5"> Description 5: </label>
  <TEXTAREA  name="planDescriptionB5" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionB6"> Description 6: </label>
  <TEXTAREA  name="planDescriptionB6" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planName3"> Plan Name 3: </label>
  <TEXTAREA  name="planName3" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planValue3"> Plan Value 3: </label>
  <TEXTAREA  name="planValue3" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionC1"> Description 1: </label>
  <TEXTAREA  name="planDescriptionC1" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionC2"> Description 2: </label>
  <TEXTAREA  name="planDescriptionC2" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionC3"> Description 3: </label>
  <TEXTAREA  name="planDescriptionC3" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionC4"> Description 4: </label>
  <TEXTAREA  name="planDescriptionC4" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionC5"> Description 5: </label>
  <TEXTAREA  name="planDescriptionC5" row="4" cols="30"></TEXTAREA><br><br>
  <label for="planDescriptionC6"> Description 6: </label>
  <TEXTAREA  name="planDescriptionC6" row="4" cols="30"></TEXTAREA><br><br>
  
  <input type="submit" name="Save" value="Save">
</form>
<?php
?>

<?php } ?>


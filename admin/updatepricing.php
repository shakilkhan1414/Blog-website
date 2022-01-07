<?php session_start();?>
<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>


<?php 

if (isset($_POST['Save'])){
 
        $id=$_GET['pricingID'];  //error  type="text" disabled 
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
        $sql ="UPDATE `pricing` SET `planName1`='".$i2."' , `planValue1`='".$i3."',`planDescriptionA1`='".$i4."',`planDescriptionA2`='".$i5."',
        `planDescriptionA3`='".$i6."',`planDescriptionA4`='".$i7."',`planDescriptionA5`='".$i8."',`planDescriptionA6`='".$i9."',
        `planName2`='".$i10."',  `planValue2`='".$i11."',  `planDescriptionB1`='".$i12."',`planDescriptionB2`='".$i13."',`planDescriptionB3`='".$i14."',
        `planDescriptionB4`='".$i15."',`planDescriptionB5`='".$i16."',`planDescriptionB6`='".$i17."',  `planName3`='".$i18."',  
        `planValue3`='".$i19."', `planDescriptionC1`='".$i20."',`planDescriptionC2`='".$i21."',`planDescriptionC3`='".$i22."',
        `planDescriptionC4`='".$i23."',`planDescriptionC5`='".$i24."',`planDescriptionC6`='".$i25."'    
        WHERE (`pricingID`='".$id."') LIMIT 1";  

              
        
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
      //mysqli_fetch_assoc($result); 
       goto2("viewpricing.php"," Pricing is successfully updated");
} else {
  $id=$_GET['pricingID'];
  $sql ="select * from pricing where pricingID ='".$id."'";  // sql command
  mysqli_select_db($conn,"webproject"); ///select database as default
  $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

  $row=mysqli_fetch_assoc($result); 

?>
<form action="updatepricing.php?pricingID=<?php echo $id; ?>" method="POST">
  <label for="pricingID"><b>Price ID: </b> </label><br>
  <input type="text" disabled id="pricingID" name="pricingID" value="<?php echo $id; ?> "><br><br>

  <label for="planName1"><b> Plan Name 1: </b> </label><br>
  <TEXTAREA  name="planName1" row="4" cols="30"><?php echo $row['planName1'];?></TEXTAREA><br><br>
  <label for="planValue1"> Plan Value 1: </label><br>
  <TEXTAREA  name="planValue1" row="4" cols="30"><?php echo $row['planValue1'];?></TEXTAREA><br><br>
  <label for="planDescriptionA1"> Description 1: </label><br>
  <TEXTAREA  name="planDescriptionA1" row="4" cols="30"><?php echo $row['planDescriptionA1'];?></TEXTAREA><br><br>
  <label for="planDescriptionA2"> Description 2: </label><br>
  <TEXTAREA  name="planDescriptionA2" row="4" cols="30"><?php echo $row['planDescriptionA2'];?></TEXTAREA><br><br>
  <label for="planDescriptionA3"> Description 3: </label><br> 
  <TEXTAREA  name="planDescriptionA3" row="4" cols="30"><?php echo $row['planDescriptionA3'];?></TEXTAREA><br><br>
  <label for="planDescriptionA4"> Description 4: </label><br> 
  <TEXTAREA  name="planDescriptionA4" row="4" cols="30"><?php echo $row['planDescriptionA4'];?></TEXTAREA><br><br>
  <label for="planDescriptionA5"> Description 5: </label><br> 
  <TEXTAREA  name="planDescriptionA5" row="4" cols="30"><?php echo $row['planDescriptionA5'];?></TEXTAREA><br><br>
  <label for="planDescriptionA6"> Description 6: </label><br> 
  <TEXTAREA  name="planDescriptionA6" row="4" cols="30"><?php echo $row['planDescriptionA6'];?></TEXTAREA><br><br>
  <br><br>
  <label for="planName2"><b> Plan Name 2: </b> </label><br>
  <TEXTAREA  name="planName2" row="4" cols="30"><?php echo $row['planName2'];?></TEXTAREA><br><br>
  <label for="planValue2"> Plan Value 2: </label><br>
  <TEXTAREA  name="planValue2" row="4" cols="30"><?php echo $row['planValue2'];?></TEXTAREA><br><br>
  <label for="planDescriptionB1"> Description 1: </label><br>
  <TEXTAREA  name="planDescriptionB1" row="4" cols="30"><?php echo $row['planDescriptionB1'];?></TEXTAREA><br><br>
  <label for="planDescriptionB2"> Description 2: </label><br> 
  <TEXTAREA  name="planDescriptionB2" row="4" cols="30"><?php echo $row['planDescriptionB2'];?></TEXTAREA><br><br>
  <label for="planDescriptionB3"> Description 3: </label><br> 
  <TEXTAREA  name="planDescriptionB3" row="4" cols="30"><?php echo $row['planDescriptionB3'];?></TEXTAREA><br><br>
  <label for="planDescriptionB4"> Description 4: </label><br> 
  <TEXTAREA  name="planDescriptionB4" row="4" cols="30"><?php echo $row['planDescriptionB4'];?></TEXTAREA><br><br>
  <label for="planDescriptionB5"> Description 5: </label><br> 
  <TEXTAREA  name="planDescriptionB5" row="4" cols="30"><?php echo $row['planDescriptionB5'];?></TEXTAREA><br><br>
  <label for="planDescriptionB6"> Description 6: </label><br> 
  <TEXTAREA  name="planDescriptionB6" row="4" cols="30"><?php echo $row['planDescriptionB6'];?></TEXTAREA><br><br>
  <br><br>
  <label for="planName3"><b> Plan Name 3: </b> </label><br>
  <TEXTAREA  name="planName3" row="4" cols="30"><?php echo $row['planName3'];?></TEXTAREA><br><br>
  <label for="planValue3"> Plan Value 3: </label><br>
  <TEXTAREA  name="planValue3" row="4" cols="30"><?php echo $row['planValue3'];?></TEXTAREA><br><br>
  <label for="planDescriptionC1"> Description 1: </label><br>
  <TEXTAREA  name="planDescriptionC1" row="4" cols="30"><?php echo $row['planDescriptionC1'];?></TEXTAREA><br><br>
  <label for="planDescriptionC2"> Description 2: </label><br> 
  <TEXTAREA  name="planDescriptionC2" row="4" cols="30"><?php echo $row['planDescriptionC2'];?></TEXTAREA><br><br>
  <label for="planDescriptionC3"> Description 3: </label><br> 
  <TEXTAREA  name="planDescriptionC3" row="4" cols="30"><?php echo $row['planDescriptionC3'];?></TEXTAREA><br><br>
  <label for="planDescriptionC4"> Description 4: </label><br> 
  <TEXTAREA  name="planDescriptionC4" row="4" cols="30"><?php echo $row['planDescriptionC4'];?></TEXTAREA><br><br>
  <label for="planDescriptionC5"> Description 5: </label><br> 
  <TEXTAREA  name="planDescriptionC5" row="4" cols="30"><?php echo $row['planDescriptionC5'];?></TEXTAREA><br><br>
  <label for="planDescriptionC6"> Description 6: </label><br> 
  <TEXTAREA  name="planDescriptionC6" row="4" cols="30"><?php echo $row['planDescriptionC6'];?></TEXTAREA><br><br>
  

  <p><input type="submit" value="Save" name="Save"></p>
</form>

<?php } ?>


<?php include("../footer.php"); ?>

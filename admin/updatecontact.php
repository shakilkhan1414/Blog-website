<?php session_start();?>
<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>


<?php 

if (isset($_POST['Save'])){
 
        $id=$_GET['contactID'];  //error  type="text" disabled 
        $i2=$_POST['contactDetails'];
        $i3=$_POST['contactLocation'];
        $i4=$_POST['contactPhone'];
        $i5=$_POST['contactFax'];
        $i6=$_POST['contactEmail'];
        $i7=$_POST['MapsLatitude'];
        $i8=$_POST['MapsLongitude'];
       
        $sql ="UPDATE `contact` SET `contactDetails`='".$i2."' , `contactLocation`='".$i3."',`contactPhone`='".$i4."',`contactFax`='".$i5."',
        `contactEmail`='".$i6."' , `MapsLatitude`='".$i7."' , `MapsLongitude`='".$i8."'
        WHERE (`contactID`='".$id."') LIMIT 1";  

              
        
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
      //mysqli_fetch_assoc($result); 
       goto2("viewcontact.php"," Contact Info is successfully updated");
} else {
  $id=$_GET['contactID'];
  $sql ="select * from contact where contactID ='".$id."'";  // sql command
  mysqli_select_db($conn,"webproject"); ///select database as default
  $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  $row=mysqli_fetch_assoc($result); 

?>
<form action="updatecontact.php?contactID=<?php echo $id; ?>" method="POST">
  <label for="contactID"><b>Price ID: </b> </label><br>
  <input type="text" disabled id="contactID" name="contactID" value="<?php echo $id; ?> "><br><br>

  <label for="contactDetails"><b> Details: </b> </label><br>
  <TEXTAREA  name="contactDetails" row="4" cols="30"><?php echo $row['contactDetails'];?></TEXTAREA><br><br>
  <label for="contactLocation"> Location: </label><br>
  <TEXTAREA  name="contactLocation" row="4" cols="30"><?php echo $row['contactLocation'];?></TEXTAREA><br><br>
  <label for="contactPhone"> Phone Number: </label><br>
  <TEXTAREA  name="contactPhone" row="4" cols="30"><?php echo $row['contactPhone'];?></TEXTAREA><br><br>
  <label for="contactFax"> Fax Number: </label><br>
  <TEXTAREA  name="contactFax" row="4" cols="30"><?php echo $row['contactFax'];?></TEXTAREA><br><br>
  <label for="contactEmail"> Email: </label><br> 
  <TEXTAREA  name="contactEmail" row="4" cols="30"><?php echo $row['contactEmail'];?></TEXTAREA><br><br>
  <label for="MapsLatitude"> Maps Latitude: </label>
  <TEXTAREA  name="MapsLatitude" row="4" cols="30"><?php echo $row['MapsLatitude'];?></TEXTAREA><br><br>
  <label for="MapsLongitude"> Maps Longitude: </label>
  <TEXTAREA  name="MapsLongitude" row="4" cols="30"><?php echo $row['MapsLongitude'];?></TEXTAREA><br><br>

  <p><input type="submit" value="Save" name="Save"></p>
</form>

<?php } ?>


<?php include("../footer.php"); ?>

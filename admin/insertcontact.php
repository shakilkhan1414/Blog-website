<?php session_start();?>
<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
?>

<?php 

if (isset($_POST['Save'])){
 //echo " you have try to save ";
        $i1=$_POST['contactID'];  //error  type="text" disabled 
        $i2=$_POST['contactDetails'];
        $i3=$_POST['contactLocation'];
        $i4=$_POST['contactPhone'];
        $i5=$_POST['contactFax'];
        $i6=$_POST['contactEmail'];
        $i7=$_POST['MapsLatitude'];
        $i8=$_POST['MapsLongitude'];
        
        $sql ="INSERT INTO `contact` (`contactID`, `contactDetails`, `contactLocation`,`contactPhone`,
                                      `contactFax`, `contactEmail`,`MapsLatitude`, `MapsLongitude`)
                                       
        VALUES ('".$i1."', '".$i2."', '".$i3."', '".$i4."', '".$i5."', '".$i6."', '".$i7."', '".$i8."')";  // sql insert command
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
      goto2("viewcontact.php"," New plan details succesfully added");
} else {
  
?>
<form action="insertcontact.php" method="POST">
  <label for="contactID">Contact option ID:</label>
  <input type="text"  id="contactID" name="contactID"><br><br>
  <label for="contactDetails"> Details: </label>
  <TEXTAREA  name="contactDetails" row="4" cols="30"></TEXTAREA><br><br>
  <label for="contactLocation"> Location: </label>
  <TEXTAREA  name="contactLocation" row="4" cols="30"></TEXTAREA><br><br>
  <label for="contactPhone"> Phone Number: </label>
  <TEXTAREA  name="contactPhone" row="4" cols="30"></TEXTAREA><br><br>
  <label for="contactFax"> Fax Number: </label>
  <TEXTAREA  name="contactFax" row="4" cols="30"></TEXTAREA><br><br>
  <label for="contactEmail"> Email: </label>
  <TEXTAREA  name="contactEmail" row="4" cols="30"></TEXTAREA><br><br>
  <label for="MapsLatitude"> Maps Latitude: </label>
  <TEXTAREA  name="MapsLatitude" row="4" cols="30"></TEXTAREA><br><br>
  <label for="MapsLongitude"> Maps Longitude: </label>
  <TEXTAREA  name="MapsLongitude" row="4" cols="30"></TEXTAREA><br><br>
  <input type="submit" name="Save" value="Save">
</form>
<?php
?>

<?php } ?>


<?php session_start();?>
<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>

<?php 


if (isset($_GET['memberId'])){
 //echo " you have try to save ";
        $id=$_GET['memberId'];
      
        $sql ="DELETE FROM `tblmember` WHERE (`memberId`='".$id."')";  // sql command

        $sqlDeleteImg="DELETE FROM `tblimg` WHERE (`memberId`='".$id."')"; 
        $sqlDeleteLinks="DELETE FROM `socialmedia` WHERE (`memberId`='".$id."')";

        mysqli_select_db($conn,"webproject"); ///select database as default
        
        $result=mysqli_query($conn,$sqlDeleteImg);
        $result=mysqli_query($conn,$sqlDeleteLinks);
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
      goto2("viewmember.php"," Selected info is successfully Deleted");
} 
else
        echo "Member not found";
?>

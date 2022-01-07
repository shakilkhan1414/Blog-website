<?php session_start();?>
<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>

<?php 


if (isset($_GET['ServicesID'])){
 //echo " you have try to save ";
        $id=$_GET['ServicesID'];
      
        $sql ="DELETE FROM `services` 
        WHERE (`ServicesID`='".$id."') ";  // sql command
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
      goto2("viewservices.php"," Selected services is successfully Deleted");
} 
else
        echo "info id not found";
<?php session_start();?>
<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>

<?php 


if (isset($_GET['infoid'])){
 //echo " you have try to save ";
        $id=$_GET['infoid'];
      
        $sql ="DELETE FROM `aboutus` 
        WHERE (`infoID`='".$id."') ";  // sql command
//echo $sql;
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
       // mysqli_fetch_assoc($result); 
      goto2("viewinfo.php"," Selected info is successfully Deleted");
} 
else
        echo "info id not found";
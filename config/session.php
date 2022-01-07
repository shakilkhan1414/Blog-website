<?php
if (file_exists('config/function.php')==1){ 
  require_once('config/function.php');
}
else{
  require_once('../config/function.php');
}


if (isset($_SESSION['UserID'])){
    //echo  $_SESSION['mylogin'];
  //  goto2("index.php","You have login");
}else{
   // echo " no value defined";
   
   goto2("../login.php","Please log on before using");

}
?>


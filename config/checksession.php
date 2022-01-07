<?php

session_start();
if (isset($_SESSION['Interface'])&&(isset($_SESSION['UserID']))){
    //echo  $_SESSION['interface'];
    goto2($_SESSION['Interface'],"Welcome back to the Portal");

}



?>
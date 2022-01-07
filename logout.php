<?php
include('./config/function.php');

session_start();
session_destroy();
goto2("login.php","You have logged out, See you again!.");
?>
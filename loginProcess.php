<?php 
    require_once('./config/function.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_REQUEST['uname'];
        $password=$_REQUEST['password'];

        if(isset($_REQUEST['check'])){
            setcookie('username', $username, time() + (86400 * 30), "/");
            setcookie('password', $password, time() + (86400 * 30), "/");
        }

        if(logincheck($username,$password)){
            if($_SESSION['type']=='User'){
                header("Location: index.php");
            }
            else if($_SESSION['type']=='Administrator'){
                header("Location: admin/admin.php");
            }
            
            }
            else{
                echo "Failed !";
            }
        }   

?>
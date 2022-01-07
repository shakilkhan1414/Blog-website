<?php
//if ($conn->connect_error){
    require_once('setting.php');


function getConnection(){
    $conn=mysqli_connect(server,user,password,database);
    if(!$conn){
        die("coneection Failed ".mysqli_connect_error());
    }
    return $conn;
}

?>

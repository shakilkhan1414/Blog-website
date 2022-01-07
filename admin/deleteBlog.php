<?php 
    include '../config\function.php';

    $id=$_REQUEST['id'];
    if(deleteBlog($id)){
        header('Location: viewBlog.php');
    }
    else{
        echo 'Failed!';
    }

?>
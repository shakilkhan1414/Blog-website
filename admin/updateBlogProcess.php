<?php 
    include '../config/function.php';

    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        
       

        $conn=getConnection();

        $id=$_REQUEST['id'];
        $blog_title=process_input($_REQUEST['blog_title']);
        $author_name=process_input($_REQUEST['author_name']);
        $primary_content=process_input($_REQUEST['primary_content']);
        $secondary_content=process_input($_REQUEST['secondary_content']);

        $featured_image=$_FILES['featured_image']['name'];
        $secondary_image=$_FILES['secondary_image']['name'];

        if($featured_image!=''){

            $featured_image_name = $_FILES['featured_image']['name'];
            $featured_image_tmp_name = $_FILES['featured_image']['tmp_name'];

            // $secondary_image_name = $_FILES['secondary_image']['name'];
            // $secondary_image_tmp_name = $_FILES['secondary_image']['tmp_name'];

            move_uploaded_file($featured_image_tmp_name,"../images/blog/".$featured_image_name);
            
            $imgsql1="update blog set featured_image='$featured_image_name' where id='$id'";
            $conn->query($imgsql1);

        }

        if($secondary_image!=''){

            $secondary_image_name = $_FILES['secondary_image']['name'];
            $secondary_image_tmp_name = $_FILES['secondary_image']['tmp_name'];

            move_uploaded_file($secondary_image_tmp_name,"../images/blog/".$secondary_image_name);
            
            $imgsql2="update blog set secondary_image='$secondary_image_name' where id='$id'";
            $conn->query($imgsql2);
            
        }

        $sql="update blog set blog_title='$blog_title',author_name='$author_name',primary_content='$primary_content',secondary_content='$secondary_content' where id='$id'";
        if ($conn->query($sql)) {
            header('location: viewBlog.php');
        }
        else{
            echo "Failed!";
        }
    }

?>
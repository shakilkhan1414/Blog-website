<?php 
    include '../config/function.php';

    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $blog_title=process_input($_REQUEST['blog_title']);
        $author_name=process_input($_REQUEST['author_name']);
        $primary_content=process_input($_REQUEST['primary_content']);
        $secondary_content=process_input($_REQUEST['secondary_content']);
        $date=date("Y-m-d");

        $featured_image_name = $_FILES['featured_image']['name'];
        $featured_image_size = $_FILES['featured_image']['size'];
        $featured_image_tmp_name = $_FILES['featured_image']['tmp_name'];

        $secondary_image_name = $_FILES['secondary_image']['name'];
        $secondary_image_size = $_FILES['secondary_image']['size'];
        $secondary_image_tmp_name = $_FILES['secondary_image']['tmp_name'];

        move_uploaded_file($featured_image_tmp_name,"../images/blog/".$featured_image_name);

        move_uploaded_file($secondary_image_tmp_name,"../images/blog/".$secondary_image_name);

        $data=[
            'blog_title'=>$blog_title,
            'author_name'=>$author_name,
            'primary_content'=>$primary_content,
            'secondary_content'=>$secondary_content,
            'date'=>$date,
            'featured_image_name'=>$featured_image_name,
            'secondary_image_name'=>$secondary_image_name
        ];

        if (insertBlog($data)){
            header("location: viewBlog.php");
        }
        else{
            echo "Failedvbbv!";
        }

        
    }

?>
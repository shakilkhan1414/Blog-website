<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Insert New Blog</title>
    <style>
        .add{
            margin-top: 30px;
            width: 60%;
        }
        .navigation {
        background-color: #1d2024;
        width: 100%;
        z-index: 99;
        margin-bottom: 0;
        padding: 10px;
        }

        .navigation .logo {
        padding: 0;
        height: auto;
        margin-top: 0;
        }

        .navigation .logo img {
        height: auto;
        width: 140px;
        }

        .navigation .navigation-menu li.active a {
        color: #57cbcc;
        }

        .navigation .navigation-menu li a {
        font-size: 16px;
        color: #737f8a;
        }

        .navigation .navigation-menu li a:hover, .navigation .navigation-menu li a:focus {
        background: transparent;
        color: #57cbcc;
        }

        .navbar-toggle {
        border: 1px solid #fff;
        border-radius: 0;
        }

        .navbar-toggle span {
        background: #fff;
        }
        #usertitle p{
            color: #737f8a;
        }
    </style>
</head>
<body>

<header id="navigation" class="navbar navigation">
    <div class="container">
      <div class="navbar-header">
        <!-- responsive nav button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- /responsive nav button -->
  
        <!-- logo -->
        <a class="navbar-brand logo" href="admin.php">
          <!-- <img src="images/logo.png" alt="Website Logo" /> -->
          <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
              </g>
            </g>
          </svg>
        </a>
		<div id="usertitle">
		<p>Welcome back to portal! <?php echo $_SESSION['username'] ?></p>
		</div>
        <!-- /logo -->
      </div>
      <!-- main nav -->
      <nav class="collapse navbar-collapse navbar-right" role="Navigation">
        <ul id="nav" class="nav navbar-nav navigation-menu">
          <li><a data-scroll href="admin.php">Home</a></li>
          <li><a data-scroll href="../index.php#about">About Us</a></li>
          <li><a data-scroll href="../index.php#services">Services</a></li>
          <li><a data-scroll href="../index.php#portfolio">Portfolio</a></li>
          <li><a data-scroll href="../index.php#our-team">Team</a></li>
          <li><a data-scroll href="../index.php#pricing">Pricing</a></li>
          <li><a data-scroll href="../index.php#blog">Blog</a></li>
          <li><a data-scroll href="../index.php#contact-us">Contact</a></li>
		  <li><a data-scroll href="../logout.php"><b>Logout</b></a></li>
        </ul>
      </nav>
      <!-- /main nav -->
    </div>
  </header>






<div class='container add'>
<a class="btn btn-success" href="viewBlog.php">Back</a>
    <h1>Insert New Blog</h1>
    <form method='post' action='insertBlogProcess.php' enctype="multipart/form-data">
        <div class="form-group">
            <label for="blog_title">Blog Title</label>
            <input type="text" class="form-control" name="blog_title" required>
        </div>
        <div class="form-group">
            <label for="author_name">Author</label>
            <input type="text" class="form-control" name="author_name" required>
        </div>
        <div class="form-group">
            <label for="featured_image">Featured Image</label>
            <input type="file" class="form-control" name="featured_image" required>
        </div>
        <div class="form-group">
            <label for="primary_content">Primary Content</label>
            <textarea class="form-control" name="primary_content" id="primary_content" cols="30" rows="10" required></textarea>
        </div>
        <div class="form-group">
            <label for="secondary_image">Secondary Image</label>
            <input type="file" class="form-control" name="secondary_image" required>
        </div>
        <div class="form-group">
            <label for="secondary_content">Secondary Content</label>
            <textarea class="form-control" name="secondary_content" id="secondary_content" cols="20" rows="10" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <br><br>
</div>
</body>
</html>
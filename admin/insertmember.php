<html class="no-js">
<head>
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      color: #dde2e3ff;
    }
  </style>
</head>
<body>
<h2>Add New Member</h2>
<?php session_start();?>
<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
?>


<?php 

if (isset($_POST['Save'])){
        $id=$_POST['memberId'];
        $info2=$_POST['memberName']; 
        $info3=$_POST['position']; 
        $info4=$_POST['desc']; 
        $link1=$_POST['fbLink'];
        $link2=$_POST['twitterLink'];
        $link3=$_POST['youtubeLink'];
        $link4=$_POST['printerestLink'];
        //get image name
        $imgName=$_FILES['pic']['name'];
        //set directory 
        $img_dir='../images/'.basename($imgName);

        //sql insert member info command
        $sql ="INSERT INTO `tblMember` (`memberId`, `memberName`, `memberPosition`, `desc`) 
        VALUES ('".$id."', '".$info2."', '".$info3."', '".$info4."')";  
        //sql insert image info command
        $sqlInsertImg ="INSERT INTO `tblImg` (`imgName`, `img_dir`, `memberId`) 
        VALUES ('".$imgName."', '".$img_dir."', '".$id."')"; 
        //sql insert links command
        $sqlInsertLink ="INSERT INTO `socialmedia` (`memberId`, `fbLink`, `twitterLink`, `youtubeLink`, `printerestLink`) 
        VALUES ('".$id."', '".$link1."', '".$link2."', '".$link3."', '".$link4."')";  
        
        mysqli_select_db($conn,"webproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  //insert member info into mysql
        $uploadImg=mysqli_query($conn,$sqlInsertImg); //insert image info into mysql
        $insertLink=mysqli_query($conn,$sqlInsertLink);
        
        move_uploaded_file($_FILES['pic']['tmp_name'], $img_dir); //move the uploaded image to desired directory
        
        goto2("viewmember.php","New member is inserted successfully");
} else {
  
?>
<div style="margin-left: 10px">
<form action="insertMember.php" method="POST" enctype="multipart/form-data">
  <label for="memberId">Member ID:</label>
  <?php 
  $sqlGenerateId="SELECT * from tblMember ORDER BY memberId desc limit 1"; 
  mysqli_select_db($conn,"webproject"); ///select database as default
  $sqlResult=mysqli_query($conn, $sqlGenerateId); 
  $row=mysqli_fetch_assoc($sqlResult);
  $id=generateId($row['memberId']);
  ?>
  
  <input style="margin-left:37px" type="text" id="memberId" name="memberId" value="<?php echo $id?>"><br><br>

  <label for="memberName">Member Name:</label>
  <input style="margin-left:15px" type="text"  id="memberName" name="memberName" ><br><br>

  <label for="position">Position: </label>
  <input style="margin-left:52px" type="text"  id="position" name="position" ><br><br>

  <label for="selfDescription">Self Description:</label>
  <TEXTAREA name="desc" row="10" cols="30"></TEXTAREA><br><br>
</div>

<table>
  <td style="background-color: #748d9fff; vertical-align: text-top; width:300px">
  <label for="pic" style="font-size: 24; margin-left:10px">Profile Image: </label><br><br>
  <input style="margin:10px" type="file" name="pic"><br><br>
  </td>
  <td style="background-color: #7d888dff; width:500px">
  <label for="sm" style="font-size: 24; margin-left:10px">Social Media:</label><br><br>
  <div style="margin-left: 10px">
  <label for="fb">Facebook link: </label>
  <input style="margin-left:10px" type="text"  name="fbLink" size="50"><br><br>
  <label for="twitter">Twitter link: </label>
  <input style="margin-left:23px" type="text"  id="twitterLink" name="twitterLink" size="50"><br><br>
  <label for="youtube">YouTube link: </label>
  <input style="margin-left:17px" type="text"  id="youtubeLink" name="youtubeLink" size="50"><br><br>
  <label for="prin">Pinterest link: </label>
  <input style="margin-left:5px" type="text"  id="printerestLink" name="printerestLink" size="50"><br><br>
</div>
</td>
</table>
  

  
  <input class="btn btn-main" style="margin: 10px" type="submit" name="Save" value="Save">
</form>

<?php } ?>
</body>

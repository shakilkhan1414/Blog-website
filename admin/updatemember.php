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
<h2>Update Team Members Info</h2>
<?php session_start();?>
<?php 
require_once('../config/setting.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>


<?php 

if (isset($_POST['Save'])){
  $id=$_GET['memberId'];
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

  $sql="UPDATE `tblMember` SET `memberName`='".$info2."', `memberPosition`='".$info3."', `desc`='".$info4."' 
  WHERE (`memberId`='".$id."') LIMIT 1";  // sql command
  //sql update image info command
  $sqlUpdateImg ="UPDATE `tblImg` SET `imgName`='".$imgName."', `img_dir`='".$img_dir."' 
  WHERE (`memberId`='".$id."') LIMIT 1"; 
  //sql update links command
  $sqlUpdateLink ="UPDATE `socialmedia` SET `fbLink`='".$link1."', `twitterLink`='".$link2."', `youtubeLink`='".$link3."', `printerestLink`='".$link4."' WHERE (`memberId`='".$id."') LIMIT 1"; 

  mysqli_select_db($conn,"webproject"); ///select database as default
  $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  $updateImg=mysqli_query($conn,$sqlUpdateImg);
  $updateLinks=mysqli_query($conn,$sqlUpdateLink);

  move_uploaded_file($_FILES['pic']['tmp_name'], $img_dir); //move the uploaded image to desired directory

 goto2("viewmember.php","This member info is successfully updated");
} else {
$id=$_GET['memberId'];
$sql ="SELECT
tblmember.memberId,
tblmember.memberName,
tblmember.memberPosition,
tblmember.`desc`,
tblimg.imgName,
socialmedia.fbLink,
socialmedia.twitterLink,
socialmedia.youtubeLink,
socialmedia.printerestLink
FROM
tblmember
INNER JOIN tblimg ON tblimg.memberId = tblmember.memberId
INNER JOIN socialmedia ON socialmedia.memberId = tblmember.memberId WHERE tblmember.memberId='".$id."'";  // sql command
mysqli_select_db($conn,"webproject"); ///select database as default
$result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql

$row=mysqli_fetch_assoc($result); 

?>
<form action="updateMember.php?memberId=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
<label for="memberID">Member ID:</label>
<input type="text"  style="margin-left:37px" disabled name="memberId" value="<?php echo $id; ?> "><br><br>

<label for="memberName">Member Name:</label>
<input type="text" style="margin-left:15px" name="memberName" value="<?php echo $row['memberName'];?>"><br><br>

<label for="position">Position:</label>
<input type="text" style="margin-left:52px" name="position" value="<?php echo $row['memberPosition'];?>"><br><br>

<label for="selfDescription">Self Description:</label>
<TEXTAREA  name="desc" row="5" cols="50"><?php echo $row['desc'];?></TEXTAREA><br><br>


<table>
  <td style="background-color: #748d9fff; vertical-align: text-top; width:300px">
  <label for="pic" style="font-size: 24; margin-left:10px">Profile Image: </label><br><br>
  <img src=<?php echo "'../images/".$row['imgName']."'"?> style="height:200px"> 
  <input style="margin:10px" type="file" name="pic"><br><br>
  </td>
  <td style="background-color: #7d888dff; vertical-align: text-top; width:500px">
  <label for="sm" style="font-size: 24; margin-left:10px">Social Media:</label><br><br>
  <div style="margin-left: 10px">
  <label for="fb">Facebook link: </label>
  <input style="margin-left:10px" type="text"  name="fbLink" size="50" value="<?php echo $row['fbLink'];?>"><br><br>
  <label for="twitter">Twitter link: </label>
  <input style="margin-left:23px" type="text"  id="twitterLink" name="twitterLink" size="50" value="<?php echo $row['twitterLink'];?>"><br><br>
  <label for="youtube">YouTube link: </label>
  <input style="margin-left:17px" type="text"  id="youtubeLink" name="youtubeLink" size="50" value="<?php echo $row['youtubeLink'];?>"><br><br>
  <label for="prin">Pinterest link: </label>
  <input style="margin-left:10px" type="text"  id="printerestLink" name="printerestLink" size="50" value="<?php echo $row['printerestLink'];?>"><br><br>
</div>
</td>
</table>

<p><input class="btn btn-main" type="submit" value="Save" name="Save"></p>
</form>

<?php } ?>


<?php include("../footer.php"); ?>
</body>
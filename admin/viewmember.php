<html class="no-js">
<head>
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="../css/style.css">
  <style>
    table,th,td,tr {
      border: 3px solid grey;
      border-collapse: collapse;
      color: white;
    }
  </style>
</head>
<?php session_start();?>
<?php 
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>

<body>
<a href="admin.php"><-Back</a>
<h2 style="margin-left: 20px">View Team Members</h2>

<a href="insertMember.php" class="btn btn-main" style="margin-bottom:20px; margin-left:20px;">Add New Member</a>
<table style="margin-left:auto; margin-right:auto">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Profile Image</th>
    <th>Position</th>
    <th>Self Description</th>
  </tr>
  <?php
    $no=1;
    $sql ="SELECT
    tblmember.memberId,
    tblmember.memberName,
    tblmember.memberPosition,
    tblmember.`desc`,
    tblimg.imgName
    FROM
    tblmember
    INNER JOIN tblimg ON tblimg.memberId = tblmember.memberId ORDER BY tblmember.memberId";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){ 
    ?>
  <tr>
    <td><?php echo  $no; ?></td>
    <td><?php echo $row['memberName'] ; ?></td>
    <td><img src=<?php echo "'../images/".$row['imgName']."'"?> style="object-fit:cover; object-position: center; width: 100px; height:100px"></td>
    <td><?php echo $row['memberPosition'] ; ?></td>
    <td style="width: 600px"><?php echo $row['desc'] ; ?></td>
    <td style="text-align: center"><p><a href="updateMember.php?memberId=<?php echo  $row['memberId'] ; ?>" class="btn btn-main">Update Member </a> </p></td>
    <td><p><a href="deleteMember.php?memberId=<?php echo  $row['memberId'] ; ?>" class="btn btn-delete" style="background-color:maroon">Delete Member </a> </p></td>
  </tr>
  <?php $no++;
 } ?>
</table>


<?php include("../footer.php"); ?>
</body>
</html>
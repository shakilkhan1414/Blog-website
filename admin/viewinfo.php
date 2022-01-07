<?php session_start();?>
<?php 
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
require_once('../config/session.php'); 
?>
<link rel="stylesheet" href="../css/info.css">
<link rel="stylesheet" href="../css/style.css">
<html>
<body>
  <div class="header">
        <a href="../index.php" class="logo"><img src="../images/logo.png"></a> 
        <a href="../index.php" class="logo">&emsp;&emsp;&emsp;&emsp;explore us</a>
        <h3><b>The Symmetry Studio</b></h3>
  </div>
  <a href="admin.php" class="add-label"><-Back</a>
<?php
$selected = "";
if(isset($_POST['submit']))
{		
    $id = $_POST['submit'];
    $insert = mysqli_query($conn,"UPDATE `webcontents` SET `infoID` = '".$id."'");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        $msg = "Template selected successfully.";
        alert1($msg);
    }
}
?>

<?php
    $sql ="select * from aboutus";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){
    $id=$row['infoID'];
    ?>
    <div class="information-container">
    <p><b>Information ID: <?php echo $row['infoID']; echo displayselected($row['infoID']) ;?></b></p>
      <table style="text-align:left" >
    <tr>
    <th>Characteristics1:</th>
      <td ><?php echo $row['Characteristics1'] ; ?></td>
    </tr>
    <tr>
    <th>Characteristics Description 1: </th>
      <td><?php echo $row['Char_Description1'] ; ?></td>
    </tr>
    <th>Characteristics2:</th>
      <td><?php echo $row['Characteristics2'] ; ?></td>
    </tr>
    <tr>
    <th>Characteristics Description 2: </th>
      <td><?php echo $row['Char_Description2'] ; ?></td>
    </tr>
    <th>Characteristics3:</th>
      <td><?php echo $row['Characteristics3'] ; ?></td>
    </tr>
    <tr>
    <th>Characteristics Description 3: </th>
      <td><?php echo $row['Char_Description3'] ; ?></td>
    </tr>
    <tr>
    <th>CompanyName</th>
      <td><?php echo $row['CompanyName'] ; ?></td>
    </tr>
    <tr>
    <th>CompanyDescription</th>
      <td><?php echo $row['CompanyDescription'] ; ?></td>
    </tr>
    <tr>
    <th>Description1title</th>
      <td><?php echo $row['Description1title'] ; ?></td>
    </tr>
    <tr>
    <th>Description1</th>
      <td><?php echo $row['Description1'] ; ?></td>
    </tr>
    <tr>
    <th>Description2title</th>
      <td><?php echo $row['Description2title'] ; ?></td>
    </tr>
    <tr>
    <th>Description2</th>
      <td><?php echo $row['Description2'] ; ?> </td>
    </tr>  
    <p><button class="button1"><a href="updateinfo.php?infoid=<?php echo  $row['infoID'] ; ?>">Update AboutUs </a></button> &ensp;
      <button class="button2"><a href="deleteinfo.php?infoid=<?php echo  $row['infoID'] ; ?>">Delete Info </a></p></button>
        </table>
        <form method="POST">
            <button class="button3" type="submit" name="submit" value="<?php echo  $row['infoID'] ; ?>">Choose this information</button>
        </form>
      
      </div>
      <hr>
    <?php
    
  }
  ?>
</body>
</html>
<button class=button4><a href="insertinfo.php">Insert New Info </a> </button>

<?php include('../footer.php'); ?>
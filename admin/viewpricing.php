<?php session_start();?>
<?php 
require_once('../config/settings.php');
require_once('../config/db.php');
require_once('../config/function.php');
include('../config/session.php'); 
?>

<?php
if(isset($_POST['submit']))
{		
    $id = $_POST['submit'];

    $insert = mysqli_query($conn,"UPDATE `webcontents` SET `pricingID` = '".$id."'");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        $msg = "Success";
        alert1($msg);
    }
}
?>
 <div>
                    <h2 class="sidebar-title">ID search</h2>
                        <b>Insert ID</b>
                        <br><br>
                        <form action="viewpricesearch.php" method="GET">
                            <input type="text" name="searching" />
                            <input type="submit" value="Cari" />
                        </form>
                    </div>  
<?php
    $sql ="select * from pricing";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){
    $id=$row['pricingID'];
    ?>
    <p><b>Pricing ID: <?php echo $row['pricingID'] ; ?></b></p>
      <table style="text-align:left">
    <tr>
    <th>Plan Name 1: </th>
      <td><?php echo $row['planName1'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Value 1: </th>
      <td><?php echo $row['planValue1'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description A (1): </th>
      <td><?php echo $row['planDescriptionA1'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description A (2): </th>
      <td><?php echo $row['planDescriptionA2'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description A (3): </th>
      <td><?php echo $row['planDescriptionA3'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description A (4): </th>
      <td><?php echo $row['planDescriptionA4'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description A (5): </th>
      <td><?php echo $row['planDescriptionA5'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description A (6): </th>
      <td><?php echo $row['planDescriptionA6'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Name 2: </th>
      <td><?php echo $row['planName2'] ; ?></td>
    </tr>
    <th>Plan Value 2: </th>
      <td><?php echo $row['planValue2'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description B (1): </th>
      <td><?php echo $row['planDescriptionB1'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description B (2): </th>
      <td><?php echo $row['planDescriptionB2'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description B (3): </th>
      <td><?php echo $row['planDescriptionB3'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description B (4): </th>
      <td><?php echo $row['planDescriptionB4'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description B (5): </th>
      <td><?php echo $row['planDescriptionB5'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description B (6): </th>
      <td><?php echo $row['planDescriptionB6'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Name 3: </th>
      <td><?php echo $row['planName3'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Value 3: </th>
      <td><?php echo $row['planValue3'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description C (1): </th>
      <td><?php echo $row['planDescriptionC1'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description C (2): </th>
      <td><?php echo $row['planDescriptionC2'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description C (3): </th>
      <td><?php echo $row['planDescriptionC3'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description C (4): </th>
      <td><?php echo $row['planDescriptionC4'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description C (5): </th>
      <td><?php echo $row['planDescriptionC5'] ; ?></td>
    </tr>
    <tr>
    <th>Plan Description C (6): </th>
      <td><?php echo $row['planDescriptionC6'] ; ?></td>
    </tr>
    <p><a href="updatepricing.php?pricingID=<?php echo  $row['pricingID'] ; ?>">Update Pricing </a> &ensp;
        <a href="deletepricing.php?pricingID=<?php echo  $row['pricingID'] ; ?>">Delete Pricing </a></p>
        </table>
        <form method="POST">
            <button type="submit" name="submit" value="<?php echo  $row['pricingID'] ; ?>">Confirm</button>
        </form>
      <hr>
    <?php
    
  }
  ?>

  

<a href="insertpricing.php">Add plan and details </a>

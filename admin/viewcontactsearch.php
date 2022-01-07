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

    $insert = mysqli_query($conn,"UPDATE `webcontents` SET `contactID` = '".$id."'");

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
                        <form action="viewcontactsearch.php" method="GET">
                            <input type="text" name="searching" />
                            <input type="submit" value="Cari" />
                        </form>
                    </div>  
<?php

$searching = $_GET['searching'];

    $sql ="select * from contact WHERE contactID = '". $searching ."'";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){
      $id=$row['contactID'];
      ?>
      <p><b>Contact Option ID: <?php echo $row['contactID'] ; ?></b></p>
        <table style="text-align:left">
      <tr>
      <th>Details: </th>
        <td><?php echo $row['contactDetails'] ; ?></td>
      </tr>
      <tr>
      <th>Location: </th>
        <td><?php echo $row['contactLocation'] ; ?></td>
      </tr>
      <tr>
      <th>Phone Number: </th>
        <td><?php echo $row['contactPhone'] ; ?></td>
      </tr>
      <tr>
      <th>Fax Number: </th>
        <td><?php echo $row['contactFax'] ; ?></td>
      </tr>
      <tr>
      <th>Email Address: </th>
        <td><?php echo $row['contactEmail'] ; ?></td>
      </tr>
      <tr>
      <th> Longitude: </th>
        <td><?php echo $row['MapsLongitude'] ; ?></td>
      </tr>
      <th> Latitude: </th>
        <td><?php echo $row['MapsLatitude'] ; ?></td>
      </tr>
      <p><a href="updatecontact.php?contactID=<?php echo  $row['contactID'] ; ?>">Update Contact </a> &ensp;
          <a href="deletecontact.php?contactID=<?php echo  $row['contactID'] ; ?>">Delete Contact </a></p>
          </table>
          <form method="POST">
              <button type="submit" name="submit" value="<?php echo  $row['contactID'] ; ?>">Confirm</button>
          </form>
      <hr>
    <?php
    
  }
  ?>

  

<a href="insertcontact.php">Add contact option and details </a>

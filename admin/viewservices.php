<?php 
include ('../config/function.php');

?>

<?php
if(isset($_POST['submit']))
{		
    $id = $_POST['submit'];

    $insert = mysqli_query($conn,"UPDATE `webcontents` SET `ServicesID` = '".$id."'");

    if(!$insert)
    {
        echo mysqli_error($conn);
    }
    else
    {
        $msg = "Template selected successfully.";
        alert1($msg);
    }
}
?>
   
<?php
    $sql ="select * from services";  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){
    $id=$row['ServicesID'];
    ?>
    <p><b>Services ID: <?php echo $row['ServicesID'] ; ?></b></p>
      <table style="text-align:left">
    <tr>
    <th>Services Title1 :</th>
      <td><?php echo $row['ServicesTitle1'] ; ?></td>
    </tr>
    <tr>
    <th>Services Description1 : </th>
      <td><?php echo $row['ServicesDescription1'] ; ?></td>
    </tr>
    <tr>
    <th>Services Title2 :</th>
      <td><?php echo $row['ServicesTitle2'] ; ?></td>
    </tr>
    <tr>
    <th>Services Description2 : </th>
      <td><?php echo $row['ServicesDescription2'] ; ?></td>
    </tr>
    <tr>
    <th>Services Title3 :</th>
      <td><?php echo $row['ServicesTitle3'] ; ?></td>
    </tr>
    <tr>
    <th>Services Description3 : </th>
      <td><?php echo $row['ServicesDescription3'] ; ?></td>
    </tr>
    <tr>
    <th>Services Title4 :</th>
      <td><?php echo $row['ServicesTitle4'] ; ?></td>
    </tr>
    <tr>
    <th>Services Description4 : </th>
      <td><?php echo $row['ServicesDescription4'] ; ?></td>
    </tr>
    <tr>
    <th>Services Title5 :</th>
      <td><?php echo $row['ServicesTitle5'] ; ?></td>
    </tr>
    <tr>
    <th>Services Description5 : </th>
      <td><?php echo $row['ServicesDescription5'] ; ?></td>
    </tr>
    <tr>
    <th>Services Title6 :</th>
      <td><?php echo $row['ServicesTitle6'] ; ?></td>
    </tr>
    <tr>
    <th>Services Description6 : </th>
      <td><?php echo $row['ServicesDescription6'] ; ?></td>
    </tr>
    <p><a href="updateservices.php?ServicesID=<?php echo  $row['ServicesID'] ; ?>">Update Services </a> &ensp;
        <a href="deleteservices.php?ServicesID=<?php echo  $row['ServicesID'] ; ?>">Delete Services </a></p>
        </table>
        <form method="POST">
            <button type="submit" name="submit" value="<?php echo  $row['ServicesID'] ; ?>">Choose this information</button>
        </form>
      <hr>
    <?php
    
  }
  ?>

  

<a href="insertservices.php">Insert New Info </a>

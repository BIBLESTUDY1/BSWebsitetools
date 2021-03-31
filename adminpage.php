
<?php
require_once('includes/adminheader.php');
session_start();
if(!$_SESSION['anything']){
    header('location: admin.php');

}

$conn = mysqli_connect('remotemysql.com','hz0qMHSAYw','nfTYN9usvY','hz0qMHSAYw');
$query = "SELECT * FROM `members`";
$result = mysqli_query($conn,$query);


  ?>

<html>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <?php
while($row = mysqli_fetch_assoc($result))
{

?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['fname'] ?></td>
      <td><?php echo $row['lname'] ?></td>
      <td><?php echo $row['email'] ?></td>
    </tr>
   
  </tbody>
  <?php 
      }
       ?>
</table>




</body>
</html>
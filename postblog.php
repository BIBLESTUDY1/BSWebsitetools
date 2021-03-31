<?php 
require_once('includes/adminheader.php');
session_start();
if(!$_SESSION['anything']){
    header('location: admin.php');
}
?>
<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'biblestudy');
if(isset($_POST['submit'])){
    $bloggername = $_POST['bloggername'];
    $content = $_POST['content'];
    $files = $_FILES['file'];

    

    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png', 'jpg', 'jpeg');

    if(in_array($filecheck,$fileextstored)){
        $destinationfile = 'upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);

        $q = "INSERT INTO `post_blog`(`bloggername`,`content`,`image_1`) VALUES ('$bloggername','$content','$destinationfile')";
        $query = mysqli_query($con,$q);

       echo "<div class='alert alert-success'>Submitted successfully</div>";
    }else{
        echo "<div class='alert alert-danger'>Not submitted</div>";
    }
}
?>
<html>
<head>
</head>
<body>

<div class="col-lg-12">
<form action="postblog.php" method="POST" enctype="multipart/form-data" autocomplete="off">
  <div class="form-group">
    <label for="exampleInputEmail1" style="color:black">Name:</label>
    <input type="text" id="bloggername" name="bloggername" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name" required>
    
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea type="text" class="form-control" id="content" name="content" rows="3" required></textarea>
  </div>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="file" name="file" required>
  <label class="custom-file-label" for="customFile">Choose image</label>
</div>
<br/>
<br/>

<br/>
<br/>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>


</body>
</html>

<?php 
if($_POST)
{
include 'db/admindb.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sUser=mysqli_real_escape_string($conn,$username);
$sPass=mysqli_real_escape_string($conn,$password);

$query="SELECT * from admin where username='$sUser' and password='$sPass'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
  session_start();
  $_SESSION['anything']='something';
  header('location: adminpage.php');
}

}
 ?>
<html><head>
<title>Bible Study - Login</title>
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    </head>
    <body>

<div class="container" style="margin-top:50px">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>ADMIN Login </strong></h3>
      <div style="float:right; font-size: 80%; position: relative; top:-25px"></div>
  </div>
  
  <div class="panel-body">
   <form role="form" method="POST">
   <div id="add_err2"></div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="username" id="username" class="form-control " placeholder="Username" tabindex="5" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="6" required>
					</div>
				</div>
			</div>
     <button type="submit" id="login" class="btn btn-primary">Submit</button>
  
  
 
</form>
<br/>
<br/>

                    <hr style="margin-top:10px;margin-bottom:10px;" >
  
  </div>
</div>
</div>
</div>

</body>
</html>






















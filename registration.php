<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bible Study - Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/business-casual.css" rel="stylesheet">
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
	
	<!-- Script -->
	<script type="text/javascript">
        $(document).ready(function () {

            $("#register").click(function () {

                fname = $("#fname").val();
                lname = $("#lname").val();
                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                            window.location.href = "login.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');                    

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');
												 
						} else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');
												 
						} else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

</head>

<body>

    
  
  
    <!-- /.container -->

    <center><img src="imgs/logo.png" width="15%" height="5%" ></center>
    <div class="container" style="margin-top:50px">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Create an account</strong></h3>
      <div style="float:right; font-size: 80%; position: relative; top:-25px"></div>
  </div>
  
  <div class="panel-body">
   <form role="form">
   <div id="add_err2"></div>
            <div class="row">
    			<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" tabindex="1">
					</div>
				</div>
               
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="lname" id="lname" class="form-control " placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control " placeholder="Email" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="6">
					</div>
				</div>
			</div>
                                    
        
                                    
                                    <button type="submit" id="register" class="btn btn-primary">Submit</button>
  
  <hr style="margin-top:10px;margin-bottom:10px;" >
  
 
</form>
  </div>
</div>
</div>
</div>
    <!-- Bootstrap Core JavaScript -->


</body>

</html>



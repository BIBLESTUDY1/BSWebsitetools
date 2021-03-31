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

    <title>Bible Study - Login</title>
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/business-casual.css" rel="stylesheet">

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

            $("#login").click(function () {

                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "pcheck.php",
                    data: "email=" + email + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {
 $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Authenticated</strong> \ \
                                                 </div>');

                            window.location.href = "blog.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Authentication</strong> failed \ \
                                                 </div>');                    

                        }else {
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

<center><img src="imgs/logo.png" width="15%" height="5%" ></center>
<div class="container" style="margin-top:50px">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Login </strong></h3>
      <div style="float:right; font-size: 80%; position: relative; top:-25px"></div>
  </div>
  
  <div class="panel-body">
   <form role="form">
   <div id="add_err2"></div>
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
                                    
        
                                    
                                    <button type="submit" id="login" class="btn btn-primary">Submit</button>
  
  
 
</form>
<br/>
<br/>
<div class="form-group col-lg-12">
                    <a href="registration.php"><button type="submit" class="btn btn-default">Not a memeber? Create an Account</button></a>
                    </div>
                    <hr style="margin-top:10px;margin-bottom:10px;" >
  
  </div>
</div>
</div>
</div>


   

    <!-- Bootstrap Core JavaScript -->


</body>

</html>

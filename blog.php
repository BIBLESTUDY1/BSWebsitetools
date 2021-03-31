<?php

require_once('includes/header.php');
session_start();

if(isset($_SESSION['login'])){
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];


?>


<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:7px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3" style="margin-top:14px">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="https://yorktonrentals.com/wp-content/uploads/2017/06/usericon.png" class="w3-circle" style="height:116px;width:125px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><strong>Welcome,</strong> <?php echo $fname; echo " "; echo $lname;?></p>
         
         <br>
         <br>
         
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
        <a href="logout.php" ><button type="submit" onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>Logout</button></a>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Logged out successfully..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-gamepad fa-fw w3-margin-right"></i> Games</button>
          <div id="Demo2" class="w3-hide w3-container">
           <a href="quiz.php" ><p><i class="fa fa-puzzle-piece fa-fw w3-margin-right"></i> Quiz</p></a>
            <p>...</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-book fa-fw w3-margin-right"></i> Daily Reading</button>
          <div id="Demo2" class="w3-hide w3-container">
           <a href="quiz.php" ><p><i class="fa  fa-fw w3-margin-right"></i></p></a>
            <p>...</p>
          </div>
          <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-youtube-play fa-fw w3-margin-right"></i> Bible Stories</button>
          <div id="Demo2" class="w3-hide w3-container">
           <a href="quiz.php" ><p><i class="fa  fa-fw w3-margin-right"></i></p></a>
            <p>...</p>
          </div>
         
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Upcoming events:</p>
          <p>
          New interesting events will be added shortly...
            <span class="w3-tag w3-small w3-theme-l5"></span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>Find out more...</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9">
    
     <?php 
     $con = mysqli_connect('localhost','root','','biblestudy');
     
     $displayquery = "select * from post_blog";
     $querydisplay = mysqli_query($con,$displayquery);
     
     //$row = mysqli_num_rows($querydisplay);
     
     
     while($result = mysqli_fetch_array($querydisplay)) {?>
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4><?php echo $result['bloggername']; ?></h4><br>
        <hr class="w3-clear">
        <p><?php echo $result['content']; ?></p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <center><div class="">
              <img src="<?php echo $result['image_1']; ?>" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div></center>
           
        </div>
        <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="">
            <div class="w3-container w3-padding">
              
              <input contenteditable="true" class="w3-border w3-padding" width="100%" placeholder="comment here...">
              <button type="button" class="w3-button w3-theme w3-round">  Post</button> 
            </div>
          </div>
        </div>
      </div>
      <br/>
      </div>
      <?php } ?>
     
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
   
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->

<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 
<?php 
}else{
  header("location:login.php");
}
?>
<?php require_once('includes/footer.php'); ?>
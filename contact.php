<?php
include('includes/header.php')

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<!-- header top-->

<!-- //header -->

<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="#url">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us </li>
            </ul>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->

 <!-- contact-form -->
 <section class="w3l-contact-main" id="contact">
   <div class="contact-infhny py-5">
     <div class="container py-lg-3">
       <div class="top-map">
         <div class="map-content-9">
           <form id="form" >
             <div class="form-top1">
               <h3 class="title-big text-center mb-2">Let's get in touch</h3>
               <p class="mb-lg-5 mb-4 text-center">Give us a call or drop by anytime, we endeavour to answer all
                 enquiries within 24 hours on business days.</p>
               <div class="form-top">

                 <div class="form-top-left">

                   <input type="text" name="Name" id="Name" placeholder="Name" required="">
                   <input type="text" name="Phone" placeholder="Your phone number" required="">
                   <input type="email" name="Sender" id="Sender" placeholder="Email*" required="">
                   <input type="text" name="Subject" id="Name" placeholder="Subject" required="">
                 </div>
                 <div class="form-top-righ">
                   <textarea name="Message" id="Message" placeholder="Message*" required=""></textarea>
                 </div>
               </div>
               <div class="text-lg-right text-center">
                 <input type="submit" class="btn btn-primary" value="submit">
               </div>
             </div>
           </form>
         </div>
         <div class="cont-details">
           <ul class="address two">
             <li><span class="fa fa-map-marker" aria-hidden="true"></span>Kuwait</li>
             <li><span class="fa fa-envelope" aria-hidden="true"></span><a
                 href="mailto:info@example.com">biblestudybyjohn@gmail.com</a></li>
            
           </ul>
         </div>
       </div>
     </div>
   </div>
   <!-- contact map -->
   
   <!-- //contact map -->
 </section>
 <!-- //contact-form -->
 

 <script>
        $("#form").submit((e)=>{
            e.preventDefault()
            $.ajax({
                url:"https://script.google.com/macros/s/AKfycbzaGefT9Oy0Eubp1X29jpGV8_vLyUDxbv8PKpbJK7gctWcEvvD90JggZyHPk4ruXmZuIw/exec",
                data:$("#form").serialize(),
                method:"post",
                success:function (response){
                    alert("Form submitted successfully")
                    window.location.reload()
                   
                },
                error:function (err){
                    alert("Something Error")
    
                }
            });
        });
    </script>
</body>

</html>
<?php

require_once('includes/header.php');
?>

<body>
<?php

if (isset($_GET["logout"])) {

  if($_GET["logout"] == "true"){
    ?>

<div class="alert alert-success">
<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>You have logged out successfully</strong>
</div>
    <?php
  }
}

?>
 <section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class="owl-one owl-carousel owl-theme">
             <div class="item">
                 <li>
                     <div class="slider-info banner-view bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Then you will call on me and come and pray to me, and I will listen to you.
                                     </h5>
                                     <a class=" mt-sm-5 mt-4" href="#services">
                                     - Jeremiah 29:12</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info  banner-view banner-top1 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>You will pray to him, and he will hear you, and you will fulfill your vows.</h5>
                                     <a class=" mt-sm-5 mt-4" href="#services"> - Job 22:27</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             
         </div>
     </div>
 </section>
 <!-- // banner main-slider -->

<!-- home page block1 -->
<section id="services" class="home-services py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
        <img src="imgs/personal.png" width="20%" height="auto" >
          <h4><a href="#url">Personal Prayer
(വ്യക്തിപരമായ പ്രാർത്ഥന)</a></h4>
          <p>നിങ്ങളുടെ പ്രശ്നങ്ങൾ ഞങ്ങളുമായി പങ്കിടാൻ ഞങ്ങൾ നിങ്ങൾക്കായി പ്രാർത്ഥിക്കും.</p>
          <a href="#read" class="read">Click here</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
        <div class="box-wrap">
        <img src="imgs/group.png" width="20%" height="auto" >
          <h4><a href="#url">Group Prayer
<br/>(ഗ്രൂപ്പ് പ്രാർത്ഥന)</a></h4>
          <p>നൽകിയിരിക്കുന്ന സമയ ഷെഡ്യൂളുകൾ അടിസ്ഥാനമാക്കി നിങ്ങൾക്ക് ഞങ്ങളുടെ ഗ്രൂപ്പ് പ്രാർത്ഥനയിൽ ചേരാം.</p>
          <a href="#read" class="read">Click here</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
        <div class="box-wrap">
        <img src="imgs/reading.png" width="20%" height="auto" >
          <h4><a href="#url">Bible Reading
(ബൈബിൾ വായന)</a></h4>
          <p>നിങ്ങൾക്ക് ഞങ്ങളുടെ ദൈനംദിന ബൈബിൾ വായനാ പദ്ധതിയിലേക്ക് പ്രവേശിക്കാൻ കഴിയും.</p>
          <p><li><a download href="dailyreading.jpeg"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li> download</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //home page block1 -->

 <!-- home page block2 grids -->
  
  <!-- //home page block2 grids -->
  
<!-- home page block3 -->
<section class="w3l-aboutblock py-5" id="about">
    <div class="midd-w3">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 align-self">
                    <h3 class="title-small">"നിന്റെ ദൈവമായ യഹോവ രക്ഷിക്കുന്ന വീരനായി നിന്റെ മദ്ധ്യേ ഇരിക്കുന്നു; അവൻ നിന്നിൽ അത്യന്തം സന്തോഷിക്കും; തന്റെ സ്നേഹത്താൽ അവൻ മിണ്ടാതിരിക്കുന്നു; ഉത്സവദിനത്തിലെപ്പോലെ അവൻ നിന്നിൽ ആനന്ദിക്കും"</h3>

                    <br/>
                    <p><a href="#" class="btn btn-outline-dark  reverse py-2 px-4">Read More</a></p>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                    <div class="position-relative">
                        <video src="video/bibleintro.mp4" alt="" class="img-fluid"></video>
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="video/bibleintro.mp4" allow="autoplay; fullscreen"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // home page block3 -->

<!-- home page block4 -->
<section class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="row">
            <div class="col-lg-6 ">
                <img src="https://biblestudy1.github.io/johnthomas/assets/images/verses.jpg" class="img-fluid radius-image" alt="">
            </div>
            <div class="col-lg-6 align-self mt-lg-0 mt-4">
                <div class="row mb-sm-4 mb-2 pb-3">
                    <div class="col-sm-3 col-4">
                        <span>50+</span>
                        <h4>Participants</h4>
                    </div>
                    
                    <div class="col-sm-3 col-4">
                       <span id="count">
<a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=geodxcq&nd=6&style=50" border="0" alt="visitor counter"></a>
</span>
                        <h4>Users visited</h4>
                    </div>
                </div>
                <p class=""></p>
                <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">About us</a>
            </div>
        </div>
    </div>
</section>
<!-- //home page block4 -->

<!-- home page block5 -->

<!-- //home page block5 -->

<!-- home page block6 -->
<section class="w3l-bottom py-5">
  <div class="container py-md-4 py-3 text-center">
    <div class="row">
      <div class="col-lg-9 col-md-10 mx-auto">
        <div class="subscribe mx-auto">
          <div class="header-section text-center mx-auto">
            <h3 class="title-big">Stay Updated! </h3>
            <p class="my-3"> Thanks for visiting our website!</p>
          </div>
          <form action="#" method="post" class="subscribe-wthree pt-2 mt-md-5">
            <div class="d-md-flex flex-wrap subscribe-wthree-field">
              <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
              <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 

require_once('includes/footer.php');
?>




</body>

</html>
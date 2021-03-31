<footer class="w3l-footer py-5">
  <div class="container pt-lg-5 pt-md-3">
    <div class="footer-grid_section text-center">
      <div class="footer-title mb-3">
        <h2> <a class="navbar-brand" href="index.php">
            <span class=""><img src="imgs/logo.png" width="52%" height="40%" ></span>
          </a></h2>
      </div>
      <div class="footer-text">
        <p>"പ്രശംസിക്കുന്നവനോ: യഹോവയായ ഞാൻ ഭൂമിയിൽ ദയയും ന്യായവും നീതിയും പ്രവർത്തിക്കുന്നു എന്നിങ്ങനെ എന്നെ ഗ്രഹിച്ചറിയുന്നതിൽ തന്നേ പ്രശംസിക്കട്ടെ; ഇതിൽ അല്ലോ എനിക്കു പ്രസാദമുള്ളതു എന്നു യഹോവയുടെ അരുളപ്പാടു"</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4 mb-lg-0 mb-5 footer-top">
        <h4 class="mb-4 w3f_title text-uppercase">Contact Info</h4>
        <div class="footer-style-w3ls mb-3">
          <p>Kuwait</p>
        </div>
        <ul class="list-agileits">
         
          <li><a href="mailto:interior@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
          biblestudybyjohn@gmail.com</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 col-6 footv3-left">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Company</h4>
        <ul class="list-agileits">
          <li class="my-2">
            <a href="about.php">
              About Us
            </a>
          </li>
          <li class="mb-2">
            <a href="mission.php">
              Our mission
            </a>
          </li>
          <li class="my-2">
            <a href="#url">
              Faq's
            </a>
          </li>
          <li class="my-2">
            <a href="team.php">
              Our team
            </a>
          </li>
          <li>
            <a href="contact.php">
              Get In Touch
            </a>
          </li>
        </ul>
      </div>
      

     

      <div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-5">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Account</h4>
        <ul class="list-agileits">
          <li class="my-2">
            <a href="blog.php">
              Blog
            </a>
          </li>
         
        </ul>
      </div>
    </div>

    <!-- copyright -->
    <section class="w3l-footer-29-main w3l-copyright">
      <div class="text-center">
        <p class="copy-footer-29">© 2020 Bible Study. All rights reserved. Design by <a href="https://www.aaronthomas.ml/"
            target="_blank">
            ATJ</a></p>
      </div>
    </section>
    <!-- //copyright -->

  </div>
  <!-- //footer bottom -->

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->

</footer>
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>

<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!-- magnific popup -->

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for banner slider -->

<!-- script for Testimonials-->
<script>
  $(document).ready(function () {
    $('.owl-two').owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for Testimonials-->

<!-- script for services -->
<script>
  $(document).ready(function () {
    $('.owl-news').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        768: {
          items: 2,
          nav: false
        },
        1000: {
          items: 3,
          nav: false
        }
      }
    })
  })
</script>





<!-- //script for services -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>
<?php

include("func/index.php");


$email = $_GET['email'];

if(isset($v)){

$see = mysqli_query($conn,"select * from users where email='$email'");
$fi = mysqli_fetch_array($see);

$uid = $fi['user_id'];

$new_code = rand(1111,9999).rand(0000,9999);


$out = mysqli_query($conn,"delete from verify where user_id='$uid'");

$in = mysqli_query($conn,"insert into verify (user_id,code,verify) values ('$uid','$new_code','0')");


$to = $email;
         $subject = "Githan Verification";
         
          

//header("location: ../verify.php");

}
$err = "<hr>Verification link has been sent to your email. it expires in 24hrs <hr> <a href='verify.php?email=$email&v=$email' class='btn btn-info'>Resend</a></div>";




if(isset($_GET['n'])){

$n = $_REQUEST['n'];
$i = $_REQUEST['i'];

$que = mysqli_query($conn,"select * from verify where user_id='$i' and code='$n' and verify='0' order by id desc limit 1");

if(mysqli_num_rows($que) < 1){


$err = "<div class='alert alert-danger'>Invalid verification link</div>";

}else{


$up = mysqli_query($conn,"update verify set verify='1' where user_id='$i'");
$up = mysqli_query($conn,"update users set is_verified='1' where user_id='$i'");

$err = "<div align='center'><div class='alert alert-success'>You account has been verified</div><hr><a href='dashboard/'>Goto Dashboard</a></div>";

}

}
?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Githan Academy - Welcome</title>
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>

  <script>
  var timeLeft = 3000;
    var elem = document.getElementById('some_div');
    
    var timerId = setInterval(countdown, 1000);
    
    function countdown() {
      if (timeLeft == -1) {
        clearTimeout(timerId);
        doSomething();
      } else {
        elem.innerHTML = timeLeft + ' seconds remaining';
        timeLeft--;
      }
    }
	</script>
</head>

<body>
  <!--header-->
  <section class="w3l-header">
    <header id="site-header" class="">
     
      <div class="header-2hny py-3">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <h1> <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo.jpg" class="img-responsive"  />
    </a></h1>
            <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mx-lg-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"><i class="fa-home fa"></i>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="batches.php"><i class="fa-info-circle fa"></i> Upcoming Batches</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="courses.php"><i class="fa-book fa"></i> Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"><i class='fas fa-headset'></i> Support</a>
                </li>
              </ul>
              <ul class="navbar-nav search-right mt-lg-0 mt-2">
                <li class="nav-item mr-lg-3 mr-4" title="Search"><a href="#search" class="btn search-search">
                    <span class="fa fa-search" aria-hidden="true"></span></a></li>
                <li class="nav-item"><!--a href="#download" class="free-con btn btn-style btn-secondary d-block"
                    data-toggle="modal" data-target="#myModal">Login</a-->
<a href="start/index.php" class="free-con btn btn-style btn-secondary d-block"><i class="fa-user fa"></i> Login</a>
                  <div class="selectpackage">

                 
                  <!-- //modal-popup-->

                </li>
              </ul>

              <!-- //toggle switch for light and dark theme -->
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                <div class="popup">
                  <form action="#" method="GET" class="d-sm-flex">
                    <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                    <button type="submit">Search</button>
                    <a class="close" href="#url">&times;</a>
                  </form>
                </div>
              </div>
              <!-- /search popup -->
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
              <nav class="navigation">
                <div class="theme-switch-wrapper">
                  <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox">
                    <div class="mode-container py-1">
                      <i class="gg-sun"></i>
                      <i class="gg-moon"></i>
                    </div>
                  </label>
                </div>
              </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
          </nav>
        </div>
      </div>
    </header>
    <!--/header-->
  </section>

  <!-- main-slider -->
  
  
  <section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container">
            <h2 class="title" style="font-size:24px;"><?php print $err; ?></h2>
			<div class="some_div" id="some_div" style="color:#fff;"></div>
            <ul class="breadcrumbs-custom-path mt-3 text-center">
                
            </ul>
        </div>
    </div>
  </section>
  <div class="w3l-cwp4-sec py-5">
   

  </div>
  <footer class="w3l-footer-29-main">
    <div class="footer-29-w3l py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="footer-brand-logo" href="index.html"><img src="assets/images/logo.jpg" class="img-responsive" style="height: 95px;"  /></a>
            </div>
            <p>Gethan academy is an online training center on Cisco certified network associate (CCNA) </p>
            <div class="main-social-footer-29 mt-4">
              <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
              <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
              <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
              <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Usefull Links</h6>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Courses</a></li>
              <li><a href="#careers"> Careers</a></li>
              <li><a href="#help">Help</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Courses</h6>
            <ul>
              <li><a href="#medicine">Basics CCNA</a></li>
              <li><a href="#kidney">Networking</a></li>
              <li><a href="#knee">Cable Connection</a></li>
              <li><a href="#eye">Wifi Connection</a></li>
              <li><a href="#surgery">Configuration</a></li>
              <li><a href="#care">Troubleshooting</a></li>

            </ul>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Infomation</h6>
            <p class="mb-3">Online training course</p>
            <p><strong>Email :</strong> <a href="mailto:info@githanacademy.com">info@githanacademy.com</a></p>


          </div>
        </div>
      </div>
    </div>
    <!-- //footer -->

    <!-- copyright -->
    <section class="w3l-copyright">
      <div class="container">
        <div class="row bottom-copies">
          <p class="col-lg-8 copy-footer-29">© 2023 Githan. All rights reserved. Powered by <a
              href="https://martessencellc.com/githan" target="_blank">
              GITHAN Academy</a></p>

          <div class="col-lg-4 footer-list-29">
            <ul class="d-flex text-lg-right">
              <li><a href="#careers"> Careers</a></li>
              <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacymy-lg-0 my-4">Privacy Policy</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>

        </div>
      </div>
    </section>
 <button onClick="topFunction()" id="movetop" title="Go to top">
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

  <!-- //copyright -->
  <!-- Template JavaScript -->

  <!-- script for testimonials -->
  <script>
    $(document).ready(function () {
      $('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
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
  <!-- //script for testimonials -->

  <script src="assets/js/theme-change.js"></script>

  <!-- js for portfolio lightbox -->
  <!-- libhtbox -->
  <script src="assets/js/lightbox-plus-jquery.min.js"></script>
  <!-- libhtbox -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
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
  <!-- //script -->
  <script>
    $(document).ready(function () {
      $('.owl-news').owlCarousel({
        stagePadding: 200,
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
            stagePadding: 40,
            nav: false
          },
          480: {
            items: 1,
            stagePadding: 40,
            nav: true
          },
          667: {
            items: 2,
            stagePadding: 50,
            nav: true
          },
          1000: {
            items: 2,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>                  

</body>

</html>
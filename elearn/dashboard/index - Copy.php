<?php
session_start();
include("../func/index.php");


if(empty($_SESSION['m'])){

header("location: start/");

}else{


}

include("../func/profile.php");

isVerified($user_id, $veri);
isPayment($user_id, $status);

?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php print $row['fullname']; ?></title>
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style-starter.css">
 <style>
 .card {
  box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 100%;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
#p{

  border-radius: 0%;
}
/* Container needed to position the button. Adjust the width as needed */
.containerc {
  position: relative;
  width: 100%;
}

/* Make the image responsive */
.containerc img {
  width: 100%;
  height: auto;
}

/* Style the button and place it in the middle of the container/image */
.containerc .btna {
  position: absolute;
  bottom: 0px;
  right: 1%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: ;
  color: white;
  font-size: 16px;
  padding: 2px 4px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.containerc .btna:hover {
  background-color: black;
}
.b a{
font-size:14px;
margin:0.5em;
}
.w3-black{
margin-top:1em;
}
.w3-black a{
font-size: 16px;
margin-right:1.5em;
}
.notification {
  background-color: ;
  color: white;
  text-decoration: none;
  padding: 5px 15px;
  position: relative;
  display: inline-block;
  border-radius: 0px;
}

.notification:hover {
  background: ;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}
.sto{
}
</style>
</head>

<body>
  <!--header-->
  <section class="w3l-header">
    <header id="site-header" class="">
     
      <div class="header-2hny py-3">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <h1><a class="navbar-brand mr-xl-5" href="index.php">
                <span class="fa fa-server mr-1"></span>Githan Academy
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
                  <a class="nav-link" href="index.php"><i class="fa-home fa"></i> Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="courses.php"><i class="fa-book fa"></i> Explore Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="test.php"><i class="fa-laptop fa"></i> My Tests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../contact.html"><i class='fas fa-headset'></i> Support</a>
                </li>
              </ul>
              <ul class="navbar-nav search-right mt-lg-0 mt-2">
                <li class="nav-item mr-lg-3 mr-4" title="Search"><a href="#search" class="btn search-search">
                    <span class="fa fa-search" aria-hidden="true"></span></a></li>
					
                <li class="nav-item"><a href="#download" class=" btn-secondary d-block"
                    data-toggle="modal" data-target="#myModal"><i class="fa-user-circle fa" style="font-size:30px;"></i> <?php print $row['fullname']; ?></a>
					 <div class="selectpackage">

                    
                  </div>
                </li>
              </ul>
</div>
              <!-- //toggle switch for light and dark theme -->
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                <div class="popup">
                  <form action="" method="GET" class="d-sm-flex">
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
  
  
  <section class="w3l-ab-features" >
    <div class="row">
  <div class="col-md-2" style="padding:0px; width:200px;" >
  
  <div class="card" >
  <div class="containerc">
   <img src="../assets/images/vi.jpg" alt="" id="p">
  <i class="fa fa-camera btna"></i>
</div>
 
  <h1 style="font-size:19px; "><?php print $row['fullname']; ?></h1>
  <p class="" style="font-size:12px;"><strong>Gethan ID: <?php print $user_id; ?></strong></p>
  
 <div class="b"align="left" style="  padding-left:1.5em;">
 <hr>
 <a href="" style=""><i class="fa-dashboard fa"></i> Dashboard</a><hr>
<a href=""><i class="fa-play-circle fa"></i> Continue Learning</a><hr>
<a href=""><i class="fas fa-crown"></i> Upgrade to Premium</a><hr>
<a href=""><i class="fa fa-graduation-cap"></i> My Tests</a>
<hr>
 <a href=""><i class="fa-cog fa"></i> Account Settings</a><hr>
<a href=""><i class="fa-question-circle fa"></i> Help</a><hr>
<a href=""><i class="fa-power-off fa"></i> Log Out</a><br><br>
</div>
</div>
  
  </div>
  <div class="col-md-10" style="padding:0px; ">
  						<div class="col-md-12 py-4" style="background: #F2F9FF;">
						<h2>Welcome to your dashboard</h2>
						<div class="w3-bar w3-black col-md-12" align="center">
  <a onclick="openCity('London')" class="notification"><span><i class="fa-book fa"></i> Start Learning</span> <span class="badge">1</span> </a>
  <a onclick="openCity('Paris')" class="notification"><span><i class="fa-television fa"></i> Upcoming Live</span><span class="badge">3</span></a>
</div>
						</div>
  <div class="col-md-12 py-4">
  	<div id="London" class="city">
  		<div class="col-md-11 sto ">
		<!--subject loop starts from here -->
		<div class="card">
			<div class="card-body">
  				<h2>London</h2>
  					<p>London is the capital of England.</p>
  			</div>
		</div>
				<!--subject loop end  here -->

		
</div>
</div>


<!--this is for upcoming live tab-->
<div id="Paris" class="city" style="display:none">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p>
</div>

</div>
  
  
  </div>  
	</div>
  </section>
  <script>
  function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
}
</script>
  <div class="w3l-cwp4-sec py-5">
   

  </div>
   <footer class="w3l-footer-29-main">
    <div class="footer-29-w3l py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="footer-brand-logo" href="index.html"><span class="fa fa-server mr-1"></span>Gethan Academy</a>
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
          <p class="col-lg-8 copy-footer-29">© <?php print date("Y"); ?> Githan. All rights reserved. Powered by <a
              href="" target="_blank">
              Githan Academy</a></p>

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
  <script src="assets/js/jquery-3.3.1.min.js"></script>

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
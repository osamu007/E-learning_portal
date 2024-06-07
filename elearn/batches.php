<?php
include("func/index.php");

?>
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Batches Githan Academy</title>
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  <!--header-->
  <section class="w3l-header">
    <header id="site-header" class="">
     
      <div class="header-2hny py-3">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <!--h1><a class="navbar-brand mr-xl-5" href="index.html">
                <span class="fa fa-server mr-1"></span>GITHAN Academy
              </a></h1-->
    <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo.jpg" class="img-responsive"  />
    </a>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mx-lg-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php"><i class="fa-home fa"></i>Home <span class="sr-only">(current)</span></a>                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="batches.php"><i class="fa-info-circle fa"></i> Upcoming Batches</a>                </li>
                <li class="nav-item">
                  <a class="nav-link" href="courses.php"><i class="fa-book fa"></i> Courses</a>                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"><i class='fas fa-headset'></i> Support</a>                </li>
              </ul>
              <ul class="navbar-nav search-right mt-lg-0 mt-2">
                <li class="nav-item mr-lg-3 mr-4" title="Search"><a href="#search" class="btn search-search">
                    <span class="fa fa-search" aria-hidden="true"></span></a></li>
                <li class="nav-item"><!--a href="#download" class="free-con btn btn-style btn-secondary d-block"
                    data-toggle="modal" data-target="#myModal">Login</a-->

                  <!-- //modal-popup-->
				  <a href="start/index.php" class="free-con btn btn-style btn-secondary d-block"><i class="fa-user fa"></i> Login</a>
                  <div class="selectpackage">                  </div>
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
  <!--/w3l-breadcrumb-->
  <section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container">
            <h2 class="title">Githan Academy</h2>
            <ul class="breadcrumbs-custom-path mt-3 text-center">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Upcoming Batches </li>
            </ul>
        </div>
    </div>
  </section>
  <!--//w3l-breadcrumb-->
  <!--/about-->
  <!--/w3l-ab-->
  <div class="w3l-cwp4-sec py-5">
    <div class="container py-md-5 py-3">
      <div class="cwp4-two align-items-center">
        <div class="abouthyn-inn text-center">
          <h6 class="sub-titlehny">Upcoming Batches</h6>
          <h3 class="hny-title">This is a great opportunity for you to be part of the upcoming batches</h3>
          <div class="separatorhny"></div>
         
        </div>

      </div>
    </div>
   <section id="" class="col">
<div class="col-md-12" ><br>

<div class="" align="center" style="margin-bottom: 1em;"><h2>Upcoming Batches</h2></div>
<?php
$b = mysqli_query($conn, "select * from batches where status='Active'");
$bcheck = mysqli_num_rows($b);


if($bcheck < 1){
print "<div class='alert alert-danger'><i class='fa fa-info-circle'></i> No Batches </div>";

}else{
?>
<table class="table">
<thead>
	<th>Date</th>
	<th>Details</th>
	<th>Time</th>
	<th></th>
	<th></th>
</thead>
<tbody>
<?php
$color="1";
$bs = mysqli_query($conn, "select * from batches where status='Active'");

	while($brow = mysqli_fetch_array($bs)){
	if($color==1){
    echo '<tr bgcolor="">';
    $color="2";
  } else { 
    echo '<tr bgcolor="#dcdcdc">';
    $color="1";
  }
	?>

		<td><?php print $brow['batch_date'];?></td>
		<td><?php print $brow['batch'];?> - <?php print $brow['course'];?></td>
		<td><?php print $brow['time'];?></td>
		<td><a href="#download" data-toggle="modal" data-target="#myModala" class="btn btn-success"><i class="fa-money fa"></i> Course Fee</a></td>
		<td><a href="#download" data-toggle="modal" data-target="#myModal" class="btn btn-info"><i class="fa-info-circle fa"></i> Enquire now</a></td>
	</tr>
	<?php
	}
	?>
</tbody>
		 
              


</table>
<?php
}
?>



 <div class="selectpackage">

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              &times;</button>
                            <h4 class="modal-title" id="myModalLabel">
                              Make An Enquiries</h4>
                          </div>
                          <div class="modal-body packages">
                            <div class="appointment-form">
                              <form action="" method="post">
                                <div class="fields-grid">
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="text" name="fullname" placeholder="Full Name" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="text" name="phone" placeholder="Enter Mobile" required="">
                                    </div>
                                  </div>

                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="email" name="" placeholder="Email" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

 <select id="" required="" name="batches">
 <?php
 $dp = mysqli_query($conn,"select * from batches where status='active'");
 ?>
                                         <option value="">Batches</option>
									<?php
									while($bo = mysqli_fetch_assoc($dp)){
									?>
									<option value="<?php print $bo['batch']; ?>"><?php print $bo['batch']; ?></option>
									<?php
									}
									?>
                                      </select>                                    </div>
                                  </div>
                                 </div>
                                 <hr>
								 <div class=""><textarea class="form-control" placeholder="Any further details" required></textarea></div>
								  <hr>
                                <div class="appointment-btn text-lg-right">
                                  <button type="submit" class="btn btn-style btn-primary mt-4">Enquire Now</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script>
                      $('#myModal').modal('show');
                    </script>
                  </div>
				  
				   <div class="selectpackage">

                    <div class="modal fade" id="myModala" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              &times;</button>
                            <h4 class="modal-title" id="myModalLabel">
                              Request Fee Cost</h4>
                          </div>
                          <div class="modal-body packages">
                            <div class="appointment-form">
                               <form action="" method="post">
                                <div class="fields-grid">
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="text" name="fullname" placeholder="Full Name" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="text" name="phone" placeholder="Enter Mobile" required="">
                                    </div>
                                  </div>

                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="email" name="" placeholder="Email" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

 <select id="" required="" name="batches">
 <?php
 $dp = mysqli_query($conn,"select * from batches where status='active'");
 ?>
                                         <option value="">Batches</option>
									<?php
									while($bo = mysqli_fetch_assoc($dp)){
									?>
									<option value="<?php print $bo['batch']; ?>"><?php print $bo['batch']; ?></option>
									<?php
									}
									?>
                                      </select>                                    </div>
                                  </div>
                                 </div>
                              
								  <hr>
                                <div class="appointment-btn text-lg-right">
                                  <button type="submit" class="btn btn-style btn-primary mt-4">Request Fees Now</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script>
                      $('#myModala').modal('show');
                    </script>
                  </div>
</div>
<hr>
</section>
  
  <!--/w3l-ab-->
  <!--/w3l-ab-features-->
  
  <!--//-->
   <!--/w3l-faq-block-->
  
  <!--//w3l-faq-block-->
  <!--/team-sec-->
  
  <!-- footer -->
  <footer class="w3l-footer-29-main">
    <div class="footer-29-w3l py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="footer-brand-logo" href="index.html">        <img src="assets/images/logo.jpg" class="img-responsive" style="height: 95px;"  />
</a>
            </div>
            <p>GITHAN Academy is an online training center on Cisco certified network associate (CCNA) </p>
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
            <p><strong>Email :</strong> <a href="mailto:githan@martessensellc.com">githan@martessensellc.com</a></p>
            <p><strong>Mobile :</strong> +1-301-535-8419</a></p>


          </div>
        </div>
      </div>
    </div>
    <!-- //footer -->

    <!-- copyright -->
    <section class="w3l-copyright">
      <div class="container">
        <div class="row bottom-copies">
          <p class="col-lg-8 copy-footer-29">© 2023 Githan Academy. All rights reserved. Powered by <a
              href="http://martessencellc.com/githan/" target="_blank">
              Mart Essence LLC</a></p>

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
    <!-- move top -->
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
  <script src="assets/js/owl.carousel.js"></script>
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

</body>

</html>
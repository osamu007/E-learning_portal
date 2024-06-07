<?php
include("func/index.php");

?>
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GITHAN Academy - Welcome</title>
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 

</head>

<body>
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

                  <!-- //modal-popup-->
				  <a href="start/index.php" class="free-con btn btn-style btn-secondary d-block"><i class="fa-user fa"></i> Login</a>
                  <div class="selectpackage">

                    
                  </div>
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
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view  bg2">
             
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <!--div class="banner-info-bg">
                    <p>CCNA BOSS</p>
                    <h5>Few write up</h5>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="start/register.php"> Get Started</a>
                  </div-->
                </div>
              </div>
            </div>
          </li>
        </div>
        
        
      </div>
    </div>
	<div class="col-md-12 bg-info card-body" align="center">
<h1 style="color:#fff;">Wait no further Build your CCNA skills today</h1>

  </div>
  </section>
  <!-- /main-slider -->
  <!--/grids-->
  
   
  
  <!--//grids--
   <section class="w3l-stats py-lg-0 py-5" id="stats">
    <div class="gallery-innerd container py-lg-0 py-3">
      <div class="row stats-con">
        <div class="col-lg-3 col-6 stats_info counter_grid">
          <span class="fa fa-users"></span>
          <p class="counter">1100</p>
          <h4>Expert Doctors</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid1">
          <span class="fa fa-laptop"></span>
          <p class="counter">1020</p>
          <h4>Health Programs</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <span class="fa fa-smile-o"></span>
          <p class="counter">912</p>
          <h4>Happy Clients</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5">
          <span class="fa fa-trophy"></span>
          <p class="counter">80</p>
          <h4>Success Meets</h4>
        </div>
      </div>
    </div>
  </section>
  <!--/features-->
   <!--//features-->
  <!-- middle --
  <div class="w3l-middle py-5">
    <div class="container py-xl-5 py-lg-3">
      <div class="welcome-left py-3">
        <h6 class="sub-titlehny">Trusted Care.</h6>
        <h4>The right choice for your health care needs.</h4>
        <div class="separatorhny"></div>
        <p class="pr-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. </p>
        <div class="buttons mt-5">
          <a href="about.html" class="btn btn-white btn-primary mr-2">Read More</a>
          <a href="contact.html" class="btn btn-style border-btn ml-2">Get a quote</a>
        </div>
      </div>
    </div>
  </div>
  <!-- //middle -->
  <!--/w3l-cwp4-->
  
  <div class="w3l-cwp4-sec py-5">
    <div class="container py-md-5 py-3">
      <div class="cwp4-two row align-items-center">
        <div class="cwp4-image col-lg-6 pr-lg-5">
          <iframe width="540" height="360" src="https://www.youtube.com/embed/H8W9oMNSuwo?list=PLxbwE86jKRgMpuZuLBivzlM8s2Dk5lXBQ" title="Free CCNA | Network Devices | Day 1 | CCNA 200-301 Complete Course" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="cwp4-text col-lg-6 mt-lg-0 mt-5">
		<div class="card">
         		<div class="card-header card bg bg-blue">
 <h3 class="hny-title " style="color:#996699">
            Our Fundamentals</h3></div>
		  <div class="card-body ">
      <div class="alert alert-info">  <i class="fa-table fa"></i> Standard Batches</div>
		<div class="alert alert-primary">  <i class="fa-book fa"></i> Support Materials</div>
		<div class="alert alert-warning">  <i class="fa-clock-o fa"></i> Flexible Duration</div>
		 <div class="alert alert-success"> <i class="fa-money fa"></i> Affordable Fees </div>
		<div class="alert alert-secondary"> <i class="fa-server fa"></i> Live Projects</div>
		   
        
        </div>
</div>
      </div>
    </div>
</div>
  </div>
  <!--//w3l-grids-->
  
  <section class="w3l-ab-features py-5">
 
  <div align="center">	<h1 style="font-size:25px;">Why Study CCNA with Us?</h1></div>

  
    <div class="container py-md-5 py-3">
      <div class="row features-w3pvt-main" id="features">
        <div class="col-lg-4 col-md-6 feature-gird">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber"></span>
              </div>
            </div>
			
            <div class="col-md-10 col-10 featured_grid_right_info">
             <div class="card-header"> <h4><a class="link-hny" href="#url">Technical </a></h4></div>
			 <div class="card-body">
              We are committed to leveraging our expertise, insight, and people to create best-in-class pathways that prepare people from all backgrounds for industry-leading jobs.</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 feature-gird mt-md-0 mt-4">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber"></span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
             <div class="card-header">   <h4><a class="link-hny" href="#url">Corporate 
</a></h4></div>
             <div class="card-body">We believe in creating bridges between you and the best technology and tools available to provide more inclusive education and opportunities for all.</div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 feature-gird mt-lg-0 mt-md-5 mt-4">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber"></span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <div class="card-header"> <h4><a class="link-hny" href="#url">Employment</a></h4></div>
             <div class="card-body">We focus on providing learners from all backgrounds and experiences the tools they need to prepare for and find a new job or career in tech.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- stats -->
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
</section>
  <!-- //stats -->
  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5 py-3">
      <div class="row bottom-ab-grids align-items-center">

        <div class="col-lg-6 bottom-ab-left">
          <h6 class="sub-titlehny">Networking</h6>
          <h3 class="hny-title">Cisco Certified Network Associate</h3>
          <div class="separatorhny"></div>
          <p class="my-3">Students are getting equiped to handle the world networking and earning a Network certification prepares you for roles such as Network Support Technician, Entry-level Help Desk Technician, or IT Support Specialist. You will learn how networks operate, including the devices, media, and protocols that enable network communication. Develop key skills so you can perform basic troubleshooting, using effective methodologies and help desk best practices.</p>
        </div>
        <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5 pl-lg-4">
          <img src="assets/images/banner1v.jpg" alt="" class="img-fluid">
        </div>

      </div>
    </div>
  </section>

<section>

<div class="col-lg-12 column">
<div class="row">
<div class="col-md-6">   <h6 class="sub-titlehny">Overview</h6>
          <h3 class="hny-title">The perfect balance between Work & Skill.</h3>
          <div class="separatorhny"></div>
          <p class="my-3">With the ever-changing landscape of IT, the demand for highly trained professionals is also on the rise. Whether you are looking forward to a career in the technology field or aiming to climb higher, having foundational knowledge regarding the latest networking technology is essential.</p></div>
<div class="col-md-6"> 

<div class="shadow p-3 mb-5 bg-white rounded">

<form action="enquire.php" enctype="multipart/form-data" method="post">
<h2>Enquire</h2>
<hr>
<div class="form-group">
    <label for="exampleInputEmail1">Fullname</label>

    <input type="text" class="form-control" id=""  placeholder="Fullname" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control"  placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Mobile">
  </div>
  
    <div class="form-group">
    <label for="exampleInputPassword1">Enquiry</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="Enquiry"></textarea>
  </div>
 <hr>
  <button type="submit" class="btn btn-primary">Start you CCNA Career</button>
</form>


</div>



</div>

</div>
</div>
</div>

</section>
  <!-- /blog-posts-->
  <section id="grids5-block" class="w3l-blogluxe-hny py-5">
    <div class="container py-md-5">
      <div class="row grid-view">
        <div class="col-lg-5 pr-lg-5">
          <h6 class="sub-titlehny">Our System</h6>
          <h3 class="hny-title">Instructor Led Training</h3>
          <div class="separatorhny"></div>
          <p class="my-3">you get to learn under the guidance of an industry expert trainer who will clear all your networking doubts and help you have more vital foundational networking skills. Having an instructor on hand to answer questions and demonstrate concepts can significantly enhance your learning experience. </p>

<hr>         </div>
        <div class="col-lg-7 mt-lg-0 mt-4">
          <div class="row grids5-info">
            <div class="col-6">
              <a href="#" class="zoom">
                <img src="assets/images/s1.jpg" alt="" class="img-fluid" />
              </a>
			  <div class="alert-primary alert">Full practical</div>
            </div>
            <div class="col-6">
              <a href="#" class="zoom">
                <img src="assets/images/s2.jpg" alt="" class="img-fluid" />
              </a>
			  <div class="alert alert-info">Materials</div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //blog-Section -->
  <!--//news-grids--
  <section class="w3l-news-sec">
    <div class="news-mainhny py-5">
      <div class="container text-center py-lg-3">
        <div class="title-content text-center mb-lg-5 mb-4">
          <h6 class="sub-titlehny">CCNA </h6>
          <h3 class="hny-title">
            Courses</h3>
          <div class="separatorhny"></div>
        </div>
      </div>
      <div class="owl-news owl-carousel owl-theme">
        <div class="item">
          <div class="news-img position-relative">
            <a href="#"><img src="assets/images/w.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">IT Fundamentals</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/w.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">LTE and Wireless Training</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/w.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">Packet Tracer Network Design</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/w.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">CLI configurations</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/w.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">Network Troubleshooting</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/w.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">VOIP and SIP training</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//news-grids-->
  <!--/w3l-subscribe-->
  <section class="w3l-subscribe-content py-5 bg bg-info">
    <div class="container py-md-4 py-3 text-center">
      <div class="row my-lg-4 mt-4">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="subscribe mx-auto">
            <div class="header-section text-center mx-auto">
              <h6 class="sub-titlehny">Join Us</h6>
              <h3 class="hny-title">Stay Updated! </h3>
              <div class="separatorhny"></div>
              <p class="my-3">Get latest update on courses </p>
            </div>
            <form action="#" method="post" class="subscribe-wthree pt-2 mt-5">
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
  <!--//w3l-subscribe-->
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
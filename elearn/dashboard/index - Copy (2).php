<?php
session_start();
ini_set('memory_limit','1024M');

include("../func/index.php");


if(empty($_SESSION['m'])){

header("location: start/");

}else{


}

include("../func/profile.php");
isVerified($user_id, $veri);
isPayment($user_id, $status);


//check batches
$bas = mysqli_query($conn,"select * from batch_signup where user_id='$user_id' and status='Yes'");
//total batches
$t_batch = mysqli_num_rows($bas);

//new batch paid for
$nbas = mysqli_query($conn,"select * from batch_signup where user_id='$user_id' and status='Yes' and course_completed=''");



//all batches
$abas = mysqli_query($conn,"select * from batches where status='Active'");
//total batches
$a_batch = mysqli_num_rows($abas);
?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php print $row['fullname']; ?> Dashboard</title>
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
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

.button {
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

.a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.button:hover, a:hover {
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
  right: 25%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #000000 ;
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
.form-container {
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.card-wrapper {
  background-color: #6FB7E9;
  width: 100%;
  display: flex;

}
.personal-information {
  background-color: #3C8DC5;
  color: #fff;
  padding: 1px 0;
  text-align: center;
}
h1 {
  font-size: 1.3em;
  font-family: "Roboto"
}
input {
  margin: 1px 0;
  padding-left: 3%;
  font-size: 14px;
}
input[type="text"]{
  display: block;
  height: 50px;
  width: 97%;
  border: none;
}
input[type="email"]{
  display: block;
  height: 50px;
  width: 97%;
  border: none;
}
input[type="submit"]{
  display: block;
  height: 60px;
  width: 100%;
  border: none;
  background-color: #3C8DC5;
  color: #fff;
  margin-top: 2px;
  curson: pointer;
  font-size: 0.9em;
  text-transform: uppercase;
  font-weight: bold;
  cursor: pointer;
}
input[type="submit"]:hover{
  background-color: #6FB7E9;
  transition: 0.3s ease;
}
#column-left {
  width: 46.5%;
  float: left;
  margin-bottom: 2px;
}
#column-right {
  width: 46.5%;
  float: right;
}

@media only screen and (max-width: 480px){

  .form-container {
    margin: 0 2%;
  }
  input {
    font-size: 1em;
  }
  #input-button {
    width: 100%;
  }
  #input-field {
    width: 96.5%;
  }
  h1 {
    font-size: 1.2em;
  }
  input {
    margin: 2px 0;
  }
  input[type="submit"]{
    height: 50px;
  }
  #column-left {
    width: 96.5%;
    display: block;
    float: none;
  }
  #column-right {
    width: 96.5%;
    display: block;
    float: none;
  }
}

@media only screen and (max-width: 480px){

.ti{
display:none;
width: 250px;
height:auto;
position:absolute;
left:0px;
}

}
@media only screen and (min-width: 768px){

.ti{
display: ;
padding:0px; width:200px;
}

}
</style>
</head>

<body>
  <!--header-->
  <section class="w3l-header">
    <header id="site-header" class="">
     
      <div class="header-2hny py-6">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark stroke" style='margin-bottom:0px;'>
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
                  <a class="nav-link" href="#courses.php"><i class="fa-book fa"></i> Explore Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#test.php"><i class="fa-laptop fa"></i> My Tests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class='fas fa-headset'></i> Support</a>
                </li>
              </ul>
              <ul class="navbar-nav search-right mt-lg-0 mt-2">
                <li class="nav-item mr-lg-3 mr-4" title="Search"><a href="#search" class="btn search-search">
                    <span class="fa fa-search" aria-hidden="true"></span></a></li>
					
                <li class="nav-item"><a href="#download" class=" btn-secondary d-block"
                    data-toggle="modal" data-target="#myModal"><i class="fa-user-circle fa" style="font-size:30px;"></i> <?php print $row['fullname']; ?></a>
					
                </li>
              </ul>

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

  <div class="col-md-2.5 ti" style="" >
  
  	<div class="card" >
  		<div class="containerc" style="">
   <!--img src="../assets/images/vi.jpg" alt="" id="p"-->
   					<i class="fa-user-circle fa" style=" font-size:86px; margin-top:0.3em;"></i>
  					<i class="fa fa-camera btna"></i>
		</div>
 
  <h1 style="font-size:19px; "><?php print $row['fullname']; ?></h1>
  <p class="" style="font-size:12px;"><strong>Gethan ID: <?php print $user_id; ?></strong></p>
  
 <div class="b"align="left" style="  padding-left:2em;">
 <hr>
 <a href="index.php" style=""><i class="fa-dashboard fa"></i> Dashboard</a><hr>
<a href=""><i class="fa-play-circle fa"></i> Continue Learning</a><hr>
<a href=""><i class="fas fa-crown"></i> Upgrade to Premium</a><hr>
<a href=""><i class="fa fa-graduation-cap"></i> My Tests</a>
<hr>
 <a href=""><i class="fa-cog fa"></i> Account Settings</a><hr>
<a href=""><i class="fa-question-circle fa"></i> Help</a><hr>
<a href="logout.php"><i class="fa-power-off fa"></i> Log Out</a><br><br>
</div>
</div>
  </div>
 
  <div class="col-md-10" style="padding:0px;">
  						<!--div class="col-md-12 py-4" style="background: #F2F9FF; background:url(../assets/images/c6.png);  background-repeat: no-repeat;
  background-attachment: ;
  background-position: right; "-->
  <div class="col-md-12 py-4" style="background: #F2F9FF;">
						<h2 style="padding-left:1em;">Welcome to your dashboard</h2>
						<div class="w3-bar w3-black col-md-12" align="center">
  <a onClick="openCity('London')" class="notification"><span><i class="fa-book fa"></i> Start Learning</span> <span class="badge">0</span> </a>
  <a onClick="openCity('Paris')" class="notification"><span><i class="fa-television fa"></i> Upcoming Batches</span><span class="badge"><?php print $a_batch; ?></span></a>
  <a onClick="openCity('Lagos')" class="notification"><span><i class="fa-television fa"></i> Learning History</span><span class="badge"><?php print $t_batch; ?></span></a>
</div>
						</div>
  <div class="col-md-12 py-4" style="padding-left:2em;"> 
  	<div id="London" class="city">
  		<div class="col-md-11 sto ">
		
		<!--div class="card bg-danger" align="left" style="border-radius:13px; color:#fff;">
			<div class="card-body" align="center">
						<hr>
			<h2><i class="fa-info-circle fa"></i> Online Class Dashboard will be made available shortly</h2>
			<hr>
			</div>
		</div>
		<!--subject loop starts from here -->
		<div class="card" align="left" style="border-radius:13px;">
			<div class="card-body" align="left">
  				<h4>Beginners in CCNA</h4>
				<div class="row">
				<div class="col-md-3"><img src="../assets/images/c2.png"></div>
				<div class="col-md-5" style="border-right:1px solid #666666; padding:;margin: auto; height:80px;"><strong>Cable Clipping and Connection</strong><br>
				
				<div class="progress">
 					<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">70% Complete</div>
				</div>
				
				</div>
				<div class="col-md-4" style="padding:;margin: auto; height:70px; "><a class="btn-success btn" style="border-radius: 20px; width:230px;color:#fff;" data-toggle="modal" data-target="#myModal"><i class="fa-play-circle fa"></i> Continue Learning</a></div>
				
				</div>
  			</div>
		</div>
				<!--subject loop end  here -->

		<div class="card" align="left" style="border-radius:13px; margin-top:1em;">
			<div class="card-body" align="left">
  				<h4>Beginners in CCNA</h4>
				<div class="row">
				<div class="col-md-3"><img src="../assets/images/c5.png"></div>
				<div class="col-md-5" style="border-right:1px solid #666666; padding:;margin: auto; height:80px;"><strong>Networking 3 Systems</strong><br>
				
				<div class="progress">
 					<div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">30% Complete</div>
				</div>
				
				</div>
				<div class="col-md-4" style="padding:;margin: auto; height:70px;"><a data-toggle="modal" data-target="#myModal" class="btn-success btn" style="border-radius: 20px; width:230px;color:#fff;"><i class="fa-play-circle fa"></i> Continue Learning</a></div>
				
				</div>
  			</div>
		</div> 
</div>
</div>
<!---->
<!-- Modal --
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content--
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Make Payment</h4>
      </div>
      <div class="modal-body">
        
		
		
		
		
		
		
		<form>
    <div class="form-container"> 
     <!-- end of personal-information --
          <input id="column-left" type="text" name="first-name" placeholder="First Name"/>
          <input id="column-right" type="text" name="last-name" placeholder="Surname"/>
          <input id="input-field" type="text" name="number" placeholder="Card Number"/>
          <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
          <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
         
          <div class="card-wrapper"></div>
      
      
    </form>
		
		
		
		<script>
		$('form').card({
    container: '.card-wrapper',
    width: 280,

    formSelectors: {
        nameInput: 'input[name="first-name"], input[name="last-name"]'
    }
});
</script>
		
		
		
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa-check-circle fa"></i> Finish Payment $20.00</button>
      </div>
    </div>

  </div>
</div>
<!--this is for upcoming live tab-->
<div id="Paris" class="city" style="display:none;">
 <div class="col-md-11 sto ">
  <h2>Upcoming Batches</h2>
  <p><?php
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
		<td><a href="#download" data-toggle="modal" data-target="#myModala" class="btn btn-success"><i class="fa-money fa"></i> Register</a></td>
	</tr>
	<?php
	}
	?>
</tbody>
		 
              


</table>
<?php
}
?>


</p></div>
</div>

<div id="Lagos" class="city" style="display:none">
  <h2>No History</h2>
  <p></p>
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
 
   <footer class="w3l-footer-29-main">
    <div class="footer-29-w3l py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="footer-brand-logo" href="index.php"><span class="fa fa-server mr-1"></span>Gethan Academy</a>
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
              <li><a href="#about.html">About</a></li>
              <li><a href="#courses.html">Courses</a></li>
              <li><a href="#careers"> Careers</a></li>
              <li><a href="#help">Help</a></li>
              <li><a href="#contact.html">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Courses</h6>
            <ul>
              <li><a href="#ccna">Basics CCNA</a></li>
              <li><a href="#networking">Networking</a></li>
              <li><a href="#cable">Cable Connection</a></li>
              <li><a href="#wifi">Wifi Connection</a></li>
              <li><a href="#configuration">Configuration</a></li>
              <li><a href="#troubleshooting">Troubleshooting</a></li>

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
              <li><a href="#contact.html">Contact us</a></li>
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
   
  </script>
  <!--//MENU-JS-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
  <script src="assets/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>                  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js"></script>

</body>

</html>
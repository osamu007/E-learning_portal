<?php
include("../func/index.php");

$err = NULL;
if(isset($_POST['fname'])){


$fname = $_REQUEST['fname'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$pwd = $_REQUEST['password'];
$u_id = rand(0000,99999);
$date = date("Y-m-d");

$code = rand(0000,9999).rand(1111,9999);

//check if user already exist

$queue = mysqli_query($conn,"select * from users where email='$email' or mobile='$phone'");

if(mysqli_num_rows($queue) > 0){

$err = "<div class='alert alert-info'><i class='fa fa-info-circle'></i> User already exist</div>";

}else{

$in = mysqli_query($conn,"insert into verify (user_id,code,verify) values ('$u_id','$code','0')");

$on = mysqli_query($conn,"insert into users (fullname,mobile,email,state,zip_code,passw,is_verified,date_in,status,user_id) values ('$fname','$phone','$email','$state','$zip','$pwd','0','$date','0','$u_id')");

if(!$on){

$err = "<div class='alert alert-info'><i class='fa fa-info-circle'></i> Failed to register</div>";

}else{

//sends email
 $to = $email;
         $subject = "Githan Verification";
         
         $message = "Hello $fname,<b> Welcome to Githam Academy </b>
		 <hr><strong>In order for you to proceed please click the link to verify your email</strong><br><a href='https://githanacademy.com/verify.php?n=$code&i=$u_id&email=$email' class='btn btn-primary'>Click to verify email</a><br>If the button above doesn't work, please copy and paste the link below into your browser window: <a href='https://githanacademy.com/verify.php?n=$code&email=$email&i=$u_id'>https://githanacademy.com/verify.php?n=$code&i=$u_id</a>";
         

         
		 $ur_maila = 'info@githanacademy.com';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers = "Bcc: ".$ur_maila."\r\n".
$headers = "Cc: ".$ur_maila. "\r\n".
$headers = 'From: info@githanacademy.com'."\r\n" . //Enter your webmail inside the bos
    'Reply-To: '.$ur_maila.'' . "\r\n" .
	'Content-type: text/html; charset=iso-8859-1' . "\r\n".
    'X-Mailer: PHP/' . phpversion();



mail($to, $subject, $message, $headers);

session_start();
$_SESSION['m'] = $email;

header("location: ../verify.php?email=$email");




}


}


}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Member Registeration</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet --><script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"
        integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
        integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw=="
        crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>

jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<style>
.signinform{

background: url(../assets/images/w.jpg) no-repeat 100%;
}
.progress {
    height: 3px !important;
}
.progress-bar-danger {
    background-color: #e90f10;
}
.progress-bar-warning{
    background-color: #ffad00;
}
.progress-bar-success{
    background-color: #02b502;
}

</style>

    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

</head>

<body>
    <div class="signinform " style="height:auto;">
        <h1></h1>
        <!-- container -->
        <div class="col-md-12" style="height:auto;">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h2>Register</h2>
					<?php print $err; ?>
                    <form action="" method="post">
                         <div class="input-group col-md-12">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="text" placeholder="Fullname" name="fname" required="">
                        </div>
						<div class="input-group col-md-12">
                          
 <input type="tel" name="phone" id="phone" required placeholder="Mobile" autocomplete="off" spellcheck="false"  style="border: 0px;"  >

                        </div>
						
						
						<div class="input-group col-md-12">
                            <span><i class="fas fa-envelope" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Email" name="email" required="">
                        </div>
 <div class="input-group col-md-12">
                             <span><i class="fas fa-map-marker" aria-hidden="true"></i></span>

                           <input type="text" list="state" placeholder='State' name="state" required >
						   
						   <datalist id="state">
						   <option selected="selected" value="">Select State</option>
	<option>Alabama</option>
	<option>Alaska</option>
	<option>Arizona</option>
	<option>Arkansas</option>
	<option>California</option>
	<option>Colorado</option>
	<option>Connecticut</option>
	<option>Delaware</option>
	<option>District Of Columbia</option>
	<option>Florida</option>
	<option>Georgia</option>
	<option >Hawaii</option>
	<option >Idaho</option>
	<option >Illinois</option>
	<option >Indiana</option>
	<option>Iowa</option>
	<option>Kansas</option>
	<option >Kentucky</option>
	<option>Louisiana</option>
	<option>Maine</option>
	<option>Maryland</option>
	<option>Massachusetts</option>
	<option >Michigan</option>
	<option >Minnesota</option>
	<option>Mississippi</option>
	<option>Missouri</option>
	<option >Montana</option>
	<option>Nebraska</option>
	<option>Nevada</option>
	<option>New Hampshire</option>
	<option >New Jersey</option>
	<option>New Mexico</option>
	<option>New York</option>
	<option>North Carolina</option>
	<option>North Dakota</option>
	<option>Ohio</option>
	<option>Oklahoma</option>
	<option>Oregon</option>
	<option>Pennsylvania</option>
	<option>Rhode Island</option>
	<option>South Carolina</option>
	<option>South Dakota</option>
	<option >Tennessee</option>
	<option>Texas</option>
	<option>Utah</option>
	<option>Vermont</option>
	<option>Virginia</option>
	<option>Washington</option>
	<option>West Virginia</option>
	<option>Wisconsin</option>
	<option>Wyoming</option>
</datalist>
                        </div>
						 		<div class="input-group col-md-12">
                            <span><i class="fas fa-calculator" aria-hidden="true"></i></span>
                            <input type="text" placeholder="Zip code" required="" name="zip">
                        </div>
                       <div class="input-group col-md-12" style="margin-bottom:0px; padding-bottom: 0px;">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                        <input id="password"
                        name="password" type="password" 
                        placeholder="Enter your password" >
                        </div>
                        <div id="popover-password" style="margin-top:0px; padding-top: 0px;">
                            <span id="result"></span>
                            <div class="progress">
                                <div id="password-strength" 
                                    class="progress-bar" 
                                    role="progressbar" 
                                    aria-valuenow="40" 
                                    aria-valuemin="0" 
                                    aria-valuemax="100" 
                                    style="width:0%">
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li class="">
                                    <span class="low-upper-case">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Lowercase &amp; Uppercase
                                    </span>
                                </li>
                                <li class="">
                                    <span class="one-number">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Number (0-9)
                                    </span> 
                                </li>
                                <li class="">
                                    <span class="one-special-char">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Special Character (!@#$%^&*)
                                    </span>
                                </li>
                                <li class="">
                                    <span class="eight-character">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Atleast 8 Character
                                    </span>
                                </li>
                            </ul>
                        </div>
                    <hr>
					<script>
					let state = false;
let password = document.getElementById("password");
let passwordStrength = document.getElementById("password-strength");
let lowUpperCase = document.querySelector(".low-upper-case i");
let number = document.querySelector(".one-number i");
let specialChar = document.querySelector(".one-special-char i");
let eightChar = document.querySelector(".eight-character i");

password.addEventListener("keyup", function(){
    let pass = document.getElementById("password").value;
    checkStrength(pass);
});

function toggle(){
    if(state){
        document.getElementById("password").setAttribute("type","password");
        state = false;
    }else{
        document.getElementById("password").setAttribute("type","text")
        state = true;
    }
}

function myFunction(show){
    show.classList.toggle("fa-eye-slash");
}

function checkStrength(password) {
    let strength = 0;

    //If password contains both lower and uppercase characters
    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
        strength += 1;
        lowUpperCase.classList.remove('fa-circle');
        lowUpperCase.classList.add('fa-check');
    } else {
        lowUpperCase.classList.add('fa-circle');
        lowUpperCase.classList.remove('fa-check');
    }
    //If it has numbers and characters
    if (password.match(/([0-9])/)) {
        strength += 1;
        number.classList.remove('fa-circle');
        number.classList.add('fa-check');
    } else {
        number.classList.add('fa-circle');
        number.classList.remove('fa-check');
    }
    //If it has one special character
    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
        strength += 1;
        specialChar.classList.remove('fa-circle');
        specialChar.classList.add('fa-check');
    } else {
        specialChar.classList.add('fa-circle');
        specialChar.classList.remove('fa-check');
    }
    //If password is greater than 7
    if (password.length > 7) {
        strength += 1;
        eightChar.classList.remove('fa-circle');
        eightChar.classList.add('fa-check');
    } else {
        eightChar.classList.add('fa-circle');
        eightChar.classList.remove('fa-check');   
    }

    // If value is less than 2
    if (strength < 2) {
        passwordStrength.classList.remove('progress-bar-warning');
        passwordStrength.classList.remove('progress-bar-success');
        passwordStrength.classList.add('progress-bar-danger');
        passwordStrength.style = 'width: 10%';
    } else if (strength == 3) {
        passwordStrength.classList.remove('progress-bar-success');
        passwordStrength.classList.remove('progress-bar-danger');
        passwordStrength.classList.add('progress-bar-warning');
        passwordStrength.style = 'width: 60%';
    } else if (strength == 4) {
        passwordStrength.classList.remove('progress-bar-warning');
        passwordStrength.classList.remove('progress-bar-danger');
        passwordStrength.classList.add('progress-bar-success');
        passwordStrength.style = 'width: 100%';
    }
}
</script>
                
                        <div class="form-row bottom">
                            <div class="form-check">
                                <label for="remember"> By submitting this form you therefore have  certify that you agree to our <a href="terms.php">Terms and Condition</a> and <a href="policy.php">Policy</a> of Gethan Academy</label>
                            </div>
                        </div>
						<hr>
                        <button class="btn btn-primary btn-block" type="submit">Register  </button>
                    </form>
                    </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer" >
            <p style="color:#fff;">&copy; <?php print date("Y"); ?> Githan Academy. All Rights Reserved | Powered by <a href=""
                    target="blank">Githan</a></p>
        </div>
        <!-- footer -->
    </div>

    <!-- fontawesome v5-->
    <script src="js/fontawesome.js"></script>
<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
</body>

</html>
<?php

include("../func/index.php");

$err = NULL;
if(isset($_POST['email'])){

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$queue = mysqli_query($conn,"select * from users where email='$email' and passw='$pwd'");

if(mysqli_num_rows($queue) < 1){

$err = "<div class='alert alert-danger'><i class='fa fa-info-circle'></i> Wrong combination</div>";

}else{

session_start();
$_SESSION['m'] = $email;

header("location: ../dashboard/");
exit(0);

}

}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<style>
.signinform{

background: url(../assets/images/w.jpg) no-repeat 100%;
}
</style>

</head>

<body>
    <div class="signinform">
        <h1></h1>
        <!-- container -->
        <div class="col-md-12">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h2>Login</h2>
                    <form action="" method="post">
					<?php print $err; ?>
                        <div class="input-group col-md-12">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Username or Email" required="" name="email">
                        </div>
                        <div class="input-group col-md-12">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" required="" name="pwd">
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>
                    <!--p class="continue"><span>or Login with</span></p>
                    <div class="social-login">
                        <a href="#facebook">
                            <div class="facebook">
                                <span class="fab fa-facebook-f" aria-hidden="true"></span>

                            </div>
                        </a>
                        <a href="#twitter">
                            <div class="twitter">
                                <span class="fab fa-twitter" aria-hidden="true"></span>
                            </div>
                        </a>
                        <a href="#google">
                            <div class="google">
                                <span class="fab fa-google" aria-hidden="true"></span>
                            </div>
                        </a>
                    </div-->
                    <p class="account">Don't have an account? <a href="register.php">Sign up</a></p>
					<hr>
					<div align="right"><a href="../" class="btn btn-info">Go to Homepage</a></div>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <p style="color: #fff;">&copy; <?php print date("Y"); ?> Githan Academy. All Rights Reserved | Powered by <a href=""
                    target="blank">Githan</a></p>
        </div>
        <!-- footer -->
    </div>

    <!-- fontawesome v5-->
    <script src="js/fontawesome.js"></script>

</body>

</html>
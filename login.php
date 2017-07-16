<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <title>Swacchta</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/logincss/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/logincss/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/logincss/plugins/animate.css">
    <link rel="stylesheet" href="assets/logincss/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/logincss/plugins/font-awesome/css/font-awesome.min.css">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/logincss/css/pages/page_log_reg_v2.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/logincss/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/logincss/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/logincss/css/custom.css">
</head>

<body class="demo-lightbox-gallery dark">

    <!--=== Header ===-->
    <nav class="one-page-header navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="menu-container page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#intro">
                    <span>S</span>wachhta
                    <!-- <img src="assets/img/logo1.png" alt="Logo"> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        <li class="page-scroll home">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="events.php">Events</a>
                        </li>
                        <li class="page-scroll">
                            <a href="donation.php">Donate</a>
                        </li>
                        <li class="page-scroll">
                            <a href="index.php#upload">Upload</a>
                        </li>
                        <li class="page-scroll">
                            <a href="index.php#contact">Contact</a>
                        </li>
                        <li class="page-scroll">
                            <a href="login.php">Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--=== End Header ===-->

<!--=== Content Part ===-->
<div class="container">
    <!--Reg Block-->
    <div class="reg-block">
        <form action="" method="post" id="sky-form3" class="sky-form contact-style">
        <div class="reg-block-header">
            <h2>Sign In</h2>
            <ul class="social-icons text-center">
                <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
            </ul>
            <p>Don't Have Account? Click <a class="color-green" href="registration.php">Sign Up</a> to registration.</p>
        </div>

        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="Email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="Password"  name="password" class="form-control" placeholder="Password">
        </div>
        <hr>

        <div class="checkbox">
            <label>
                <input type="checkbox">
                <p>Always stay signed in</p>
            </label>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                               <button type="submit" name = "login_submit"class="btn-u btn-block">Log In</button>
            </div>
        </div>
		<?php
			if (isset($_POST["login_submit"])) {


				$email= $_POST["email"];
				$password_1= $_POST["password"];


				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "rhok";
				$conn = mysqli_connect($servername, $username, $password, $database);
				$sql = "select password from user where email = '$email'";


				$result = mysqli_query($conn, $sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

						$pass_chk = $row["password"];
						if(strcmp($pass_chk,$password_1)==0)
						{
							echo "Login Sucessfull";
							mysqli_query($conn, "UPDATE user SET login=1 WHERE email= '$email' ");
						}
					}
				} else {
					echo "Login Failed";
				}

			}

		?>
</form>
    </div>
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/logincss/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/logincss/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/logincss/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/logincss/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/logincss/plugins/backstretch/jquery.backstretch.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/logincss/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/logincss/js/app.js"></script>
<script type="text/javascript" src="assets/logincss/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
<script type="text/javascript">
    $.backstretch([
      "assets/img/bgar/garbage.jpg",

      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>

<!-- Cloned by RabinsXP.com-->
</html>

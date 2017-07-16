<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<!-- Cloned by RabinsXP.com-->
<head>
    <title>Swacchta</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <div class="reg-block-header">
            <h2>Donate</h2>         
        </div>
<form action="" method="post" id="sky-form3" class="sky-form contact-style">
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" name = "donate_name" class="form-control" placeholder="Name">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="text" name = "donate_phone" class="form-control" placeholder="Phone Number">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" name = "donate_email" class="form-control" placeholder="Email">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="text" name = "donate_address" class="form-control" placeholder="Address">
        </div>
        <hr>              
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <button type="submit" class="btn-u btn-block" data-toggle="modal" data-target="#myModal">Donate</button>
            </div>
        </div>
		<?php
			if (isset($_POST["submit"])) {
									
				$d_name= $_POST["donate_name"];
				$d_phone= $_POST["donate_phone"];
				$d_email= $_POST["donate_email"];
				$d_address= $_POST["donate_address"];
				
				
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "rhok";
				$conn = mysqli_connect($servername, $username, $password, $database);
				$sql = "INSERT INTO donate VALUES ('$d_name',$d_phone,'$d_email','$d_address')";
				//$sql = "INSERT INTO donate VALUES ('fv',0944,'vfrvtr','fv')";
				mysqli_query($conn, $sql);
									
			}
		
		?>
		
		</form>
    </div>
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->

<!--=== Modal Class ===-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">How do you want to donate?</h4>
      </div>
      <div class="modal-body">
         <div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-block">Donate Items</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-block">Donate via bitcoins</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-block">Donate via dc/cc</button>
  </div>
</div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--=== End Modal Class ===-->

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
      "assets/img/bg/garbage.jpg"
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

</html> 

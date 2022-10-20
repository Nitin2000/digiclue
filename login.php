<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: digicluwebsite.php");
    exit;
}
require_once "config.php";
$username = $password = "";
$username_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT Cust_id, name, password FROM customer WHERE name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password==$hashed_password){
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            header("location: digicluewebsite.php");
                        } else{
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>
	<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--bootstrap files-->	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="css/jquery.min.js"></script>
		<script src="css/bootstrap.min.js"></script>
	<!--bootstrap files end-->
	<!--self import-->
		<link rel="stylesheet" href="css/commonpage.css">
		<link rel="stylesheet" href="css/homepage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/w3.css">
	<!--self import end-->
	<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="slider/engine1/style.css"/>
		<script type="text/javascript" src="slider/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand" href="#">digital marketing</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">services</a></li>
							<li><a href="#">chat</a></li>
							<li><a href="#">Your cart</a></li>
							<li><a href="#">contact</a></li>
							<li><a href="#">setting</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="row">
				<div class="col-md-12">
					<a name="home"></a>
					<div id="wowslider-container1">
						<div class="ws_images">
							<ul>
								<li><img src="slider/data1/images/digi1.jpg" alt="a" title="a" id="wows1" width="100%" height="500px"/></li>
								<li><img src="slider/data1/images/digi2.jpg" alt="b" title="b" id="wows1" width="100%" height="500px"/></li>
								<li><img src="slider/data1/images/digi3.jpg" alt="c" title="c" id="wows1" width="100%" height="500px"/></li>
								<li><img src="slider/data1/images/digi4.jpg" alt="d" title="d" id="wows1" width="100%" height="500px"/></li>
								<li><img src="slider/data1/images/digi5.jpg" alt="e" title="e" id="wows1" width="100%" height="500px" /></li>
								<li><img src="slider/data1/images/digi6.jpg" alt="f" title="f" id="wows1" width="100%" height="500px" /></li>
								<li><img src="slider/data1/images/digi7.jpg" alt="g" title="g" id="wows1" width="100%" height="500px" /></li>
							</ul>
						</div>
					</div>	
					<script type="text/javascript" src="slider/engine1/wowslider.js"></script>
					<script type="text/javascript" src="slider/engine1/script.js"></script>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<div class="wrapper">
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
								<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
									<label>Username</label>
									<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
									<span class="help-block"><?php echo $username_err; ?></span>
								</div>    
								<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
									<label>Password</label>
									<input type="password" name="password" class="form-control">
									<span class="help-block"><?php echo $password_err; ?></span>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Login">
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</div>
			<div class="row foot-bground">
				<div class="col-md-12">
					<div class="col-md-4">
						<h3>about us</h3>
						<p>
							this website is just for testing the
							skills of web designing How to develop
							a website using different coding languages
							like HTML,CSS,JAVASCRIPT,PHP MYSQL DATABASE 
							and Upload/download  files using link to 
							server  
							<a href="#">read more...</a>
						</p>
			
					</div>
					<div class="col-md-2">
						<h3>usefull links</h3>
						<p>
							<i class="fa fa-angle-right"></i> <a href="#home">home</a><br>
							<i class="fa fa-angle-right"></i> <a href="#aboutus">about us</a><br>
							<i class="fa fa-angle-right"></i> <a href="#gallary">gallary</a><br>
							<i class="fa fa-angle-right"></i> <a href="#contactus">contact us</a><br>
						</p>
					</div>
					<div class="col-md-2">
						<h3>category</h3>
						<p>
							<i class="fa fa-angle-right"></i> download<br>
							<i class="fa fa-angle-right"></i> upload<br>
							<i class="fa fa-angle-right"></i> chat<br>
							<i class="fa fa-angle-right"></i> settings<br>
						</p>
					</div>
					<div class="col-md-4">
						<h3>developer Address</h3>
						<p>
							<i class="fa fa-map-marker" style="font-size:36px"></i>&nbsp;&nbsp;Block B, Industrial Area, Sector 62, Noida, Uttar Pradesh 201309<br>
							<i class="fa fa-mobile-phone" style="font-size:36px"></i>&nbsp;&nbsp;mobile No.9821342523<br>
							<i class="fa fa-envelope-o" style="font-size:24px"></i>&nbsp;&nbsp;abcd@gmail.com<br>
						</p>
					</div>
					<div class="col-md-12">
						<hr>
						<div class="col-md-4 footcpr">
								copyright digiclue members
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							&nbsp;&nbsp;<i class="fa fa-facebook-official" style="font-size:36px"></i>
							&nbsp;&nbsp;<i class="fa fa-twitter" style="font-size:36px"></i>
							&nbsp;&nbsp;<i class="fa fa-linkedin" style="font-size:36px"></i>
							&nbsp;&nbsp;<i class="fa fa-youtube-play" style="font-size:36px"></i>
							&nbsp;&nbsp;<i class="fa fa-instagram" style="font-size:36px"></i>
						</div>
					</div>
				</div>	
			</div>
		</div>
</body>
</html>
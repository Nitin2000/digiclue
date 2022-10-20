<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: digitalcluewebsite.php");
    exit;
}
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
?>
<html>
	<head>
		<title>the digital clue website</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--bootstrap files-->	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="css/jquery.min.js"></script>
		<script src="css/bootstrap.min.js"></script>
	<!--bootstrap files end-->
	<!--self import-->
		<link rel="stylesheet" href="css/commonpage.css">
		<link rel="stylesheet" href="css/yourcartpage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/w3.css">
	<!--self import end-->
	<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="slider/engine1/style.css"/>
		<script type="text/javascript" src="slider/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
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
							<li><a href="digicluewebsite.php">Home</a></li>
							<li><a href="services.php">services</a></li>
							<li><a href="chatsection.php">chat</a></li>
							<li class="active"><a href="yourcart.php">Your cart</a></li>
							<li><a href="contact.php">contact</a></li>
							<li><a href="setting.php">setting</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<button type="button" class="btn btn-info btn-lg login1" data-toggle="modal" data-target="#myModal"><li><a onclick='return check()' href='logout.php'>logout</a></li></button> 
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
		<div class="row ">
				<div class="col-md-12">
						<p class="para">
							To add your service in your account you had to fill following information.
							The information include Service you want,your account number,name registered with account,
							service price will automatically fill when you select service by clicking on image.
							Don't worry about your information its safe to us. You has to pay the money online
							using different modes such as online banking,paytm, google pay transaction etc.
							On <b>Mobile NO.9856235754</b>
						</p>
					<div class="col-md-5 paraleft">
						<div class="col-md-12">
							<form name="frm" method="post">
								<div class='form-row'>
									<div class='form-group'>
										<label>Full name </label>   
										<input type='text' name='txt1' class='form-control' placeholder='Name with which account is registered' required>
									</div>
									<div class='form-group'>
										<label>Account Number</label>
										<input type='text' name='txt2' class='form-control' placeholder='Account number' required>
									</div>
								</div>
								<div class='form-group'>
									<label>Email address</label>
									<input type='email' name='txt3' class='form-control' placeholder='Email address' required>
								</div> 
								<div class='form-group'>
									<label>service</label>
									<input type='text' name='txt4' class='form-control' placeholder='select service' readonly>
								</div> 
								<div class='form-group'>
									<label>price</label>
									<input type='txt' name='txt5' class='form-control' placeholder='Service price' readonly>
								</div> 
								<div class='form-group'>
									<button type='submit' name='txt6' onclick="calculate()" class='btn btn-primary btn-block'>Submit</button>
								</div>
							</form>
						</div>
						<center><h2>OR</h2></center>
						<div class="col-md-12">
							<div class="col-md-5">
								<img src="image/googlepay.png">
							</div>
							<div class="col-md-7">
								<img src="image/paytm.png">
							</div>
						</div>
					</div>
					<div class="col-md-7">
							<center>
							<h2>select Service to view its price</h2>
						<div class="col-md-6 pararight">
							<img  src="image/email.jpg" height="25%" onclick="frm.txt5.value=2000;frm.txt4.value='Email Marketing'">
							<div class="">Email Marketing</div>
						</div>
						<div class="col-md-6 pararight">
							<img  src="image/digi2.jpg" height="25%" onclick="frm.txt5.value=3000;frm.txt4.value='Graphic designing'">
							<div class="">Graphic designing</div>
						</div>
						<div class="col-md-6 pararight">
							<img  src="image/digi10.jpg" height="25%" onclick="frm.txt5.value=4000;frm.txt4.value='SEO'">
							<div class="">SEO</div>
						</div>
						<div class="col-md-6 pararight">
							<img  src="image/digi4.jpg" height="25%" onclick="frm.txt5.value=2500;frm.txt4.value='Social Media Marketing'">
							<div class="">Social Media Marketing</div>
						</div>
					</div>
				</div>		
			</center>
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


<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" class="modalwindow">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
function toggle(){
        if(document.getElementById("r1").select)
        {
            document.getElementById("i1").style.display="block";
            document.getElementById("i2").style.display="none";
        }
		else if(document.getElementById("r2").select)
        {
            document.getElementById("i2").style.display="block";
            document.getElementById("i1").style.display="none";
        }
	}
</script>

</body>
</html>
<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: digicluewebsite.php");
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
		<link rel="stylesheet" href="css/services.css">
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
							<li ><a href="digicluewebsite.php">Home</a></li>
							<li class="active"><a href="services.php">services</a></li>
							<li><a href="chatsection.php">chat</a></li>
							<li><a href="yourcart.php">Your cart</a></li>
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
			<div class="row">
				<div class="col-md-12">
					<center><a name="service"><h2>services</h2></a></center>
					<div class="col-md-6 empart">
						<p>Why Use Email Marketing?
							For every $1 spent on email marketing $44 is made in return, according
							to a study by Campaign Monitor. People who buy products marketed through
							email spend 138% more than people who do not receive email offers.Are you
							using the most effective form of digital marketing in your business strategy?
							If you haven’t implemented an email marketing campaign for your business, 
							don’t miss out on connecting with your customers and increasing your sales anymore.
							A digital marketing agency like Thrive can set up an email campaign that fits your
							business objectives perfectly.</p>
					</div>
					<div class="col-md-6 servicesection">
						<img src="images/email.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity" ><br>
						email marketing
					</div>
				</div>		
				<div class="col-md-12">
					<div class="col-md-6 servicesection" style="float:left;">
						<img src="images/socialmedia.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity" ><br>
							social media marketing
					</div>
					<div class="col-md-6 smpart">
						<p>Social media channels have become a major source of news and information in today’s 
							internet-driven world. But that’s not all. Social media presence is also a vital factor 
							in search rankings and digital marketing.Statistics show that the global population of 
							social media users has risen to 4.57 billion, with 346 million new social media users added 
							in 2020. Furthermore, Global WebIndex reveals that social media users spend an average of two
							hours and 24 minutes every day multi-networking across at least eight social media platforms 
							and messaging apps.</a>.
							</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6 gdpart">
						<p>In today’s digital world, it is crucial to stay connected with your customers 
							and prospects to leverage new markets and expand your business. Statistics show
							that approximately 4.57 billion people worldwide are active internet users, comprising
							59 percent of the global population. Within this online community, 53 percent perform 
							research before connecting with a brand to ensure they are making the right decision.
							A study from Episerver also found that 92 percent of consumers visit a brand’s website 
							with multiple intentions other than buying.These include product/service research, 
							comparison shopping and business review. This data proves consumers do not purchase on impulse</p>
					</div>
					<div class="col-md-6 servicesection" style="float:right;">
						<img src="images/graphicdesign.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity"/><br>
						graphic designing
					</div>
				</div>		
				<div class="col-md-12">
					<div class="col-md-6 servicesection" style="float:left;">
						<img src="image/digi10.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity"/><br>
						SEO
					</div>
					<div class="col-md-6 seopart">
						<p>An SEO Company That Gets It
							Let’s face it. You know what you need but you just don’t know how to get it.
							Our SEO specialists hear that over and over from SEO clients who contact Thrive
							Internet Marketing Agency.
							You’re likely here because of one or more of the following reasons:
							•  Your website isn’t being found online.
							•  Your website traffic has diminished recently and you don’t know why.
							•  Suddenly, your volume of incoming calls and leads has declined.
							•  You’re starting a new website and want to ramp up new business quickly.
							SEO Company
							If any of these four pain points ring a bell, rest assured, you’ve come
							to the right SEO company. There’s a reason why Thrive is currently 
							serving hundreds of SEO clients and providing optimization solutions
							to answer Google’s ever-changing algorithm.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
						<?php
						echo "<b style='font-size:25px;'>your service will shown here </b><br><br>";
						$con=mysqli_connect("localhost","root","","digitalclue");
						if(!$con)
							die("cannot connect to server");

						else
						{
							$n=$_SESSION["username"];
							//$query="select O_ID,O_C_Name,S_Plan from order,Services where order.O_S_id=Services.S_id and O_C_Name='".$n."'";
							$query="SELECT o_Id,O_C_Name, S_Plan , Account_Number,O_Reciept FROM orders,services WHERE Orders.O_S_id = services.S_Id  AND O_C_Name='$n'" ;
							
							$rows=mysqli_query($con,$query);
							
								echo "<table border='1px'>";
								echo "<tr>";
								echo "<th>Order_id</th>";
								echo "<th>My Services</th>";
								echo "<th>From Account/Number</th>";
								echo "<th>Download Reciept</th>";
								echo "</tr>";
									if(mysqli_num_rows($rows)==0)
									{
										echo "<tr><td colspan='6'><b style='font-size:25px;'>currently database is empty</b></td></tr><br>";
									}
									else if(mysqli_num_rows($rows)>0)
									{
										while($row=mysqli_fetch_array($rows))
										{
											 echo "<tr>";
											echo "<td>$row[0]</td>";
											echo "<td>$row[2]</td>";
											echo "<td>$row[3]</td>";
											echo "<td><a href='dwn2.php?file=$row[4]'>download</a></td>";																					
											echo "</tr>";
										}
									}
								echo "</table>";
						}
						?>
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
		<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
			<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
			<div class="w3-modal-content w3-animate-zoom">
				<img id="img01" class="modalwindow">
			</div>
		</div>
		<script>
			function onClick(element)
				{
					document.getElementById("img01").src = element.src;
					document.getElementById("modal01").style.display = "block";
				}
		</script>
</body>
</html>
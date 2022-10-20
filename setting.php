<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
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
		<link rel="stylesheet" href="css/settingpage.css">
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
							<li><a href="yourcart.php">Your cart</a></li>
							<li><a href="contact.php">contact</a></li>
							<li class="active"><a href="setting.php">setting</a></li>
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
					<div class="col-md-4">
						<h2>Hi,<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h2>
					</div>
					<div class="col-md-8 headerpart"> 
						<h2 style="color:black;"><a name="login"></a>edit profile</h2> 
			<?php
			$con=mysqli_connect("localhost","root","","digitalclue");
			if(!$con)
				die("cannot connect to server");
			else
			{
				$user=$_SESSION["username"];
				$query="select * from customer where name like'$user'";
				//$query="select * from student order by username";
				//$query="select * from student where email like '%@gmail.com'";
				$rows=mysqli_query($con,$query);
				
				if(mysqli_num_rows($rows)>0)
				{
					 echo "<form method='post'>";
				   while($row=mysqli_fetch_array($rows))
					{
						echo "<div class='input-group'><label class='labtext'>Username</label> 
						<input type='text' name='username' value='$row[1]'></div> ";
						echo "<div class='input-group'><label class='labtext'>Password</label> 
								<input type='text' class='inp' name='password' value='$row[2]'></div> ";
						echo "<div class='input-group'><label class='labtext'>Email</label> 
								<input type='email' name='email'  value='$row[3]'></div>";
						echo "<div class='input-group'><label class='labtext'>mobile</label>
								<input type='mobile' class='inp' name='mobile' value='$row[4]'></div>";
						echo "<div class='input-group'><label class='labtext'>address</label>
								<input type='address' class='inp' name='address' value='$row[5]'></div>";
						echo "<div class='input-group'><button type='submit' class='btn' name='btn1'>edit</button></div> ";
						echo "<div class='input-group'><a href='logout.php' class='btn btn-danger'>Sign Out of Your Account</a></div>";
					}
						echo "</form>";
				}
			}
			?>
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


<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" class="modalwindow">
  </div>
</div>



<script>
function onClick(element){
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
function check()
{
	var result=confirm("Are you sure");
	if(result==true)
	return true;
	else
		return false;
}
</script>
<?php
    if(isset($_POST["btn1"]))
    {
		$con=mysqli_connect("localhost","root","","digitalclue");
if(!$con)
    die("cannot connect to server");
else
{
		$i=$_SESSION["username"];
		$query="select * from customer where name like'$i'";
		$rows=mysqli_query($con,$query);
	
	if(mysqli_num_rows($rows)>0)
	{
		while($row=mysqli_fetch_array($rows))
		{
			$user=$_POST["username"];
			$pass=$_POST["password"];
			$email=$_POST["email"];
			$mobile=$_POST["mobile"];
			$address=$_POST["address"];

			$sql="update customer set name='". $user. "',password='". $pass. "',email_id='". $email. "',Phone_no='". $mobile. "',Address='". $address. "' where cust_id=". $row[0];

			$n=mysqli_query($con, $sql);
			if($n==1)
			{
				echo "<script>alert('user updated!')</script>";
				echo "<script>location.href='setting.php'</script>";
			}
    	}
	}
}
	}
?>

</body>
</html>	
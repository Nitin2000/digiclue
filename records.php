<?php include('userver.php') ?>
<html>
<head>
  <title>settings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" type="text/css"href="style.css">
<link rel="stylesheet" href="library.css">
<!-- Start WOWSlider.com HEAD section -->
			<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
			<script type="text/javascript" src="slider/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
 <style>
 .labtext
 {
	 color:black;
	 font-weight:bold;
	 font-size:14px;
 }
.input-group input {
    height: 32px;
    width: 100%;
    padding: 0px 100px 5px 10px;
    font-size: 15px;
    border-radius: 10px;
    border: 1px solid gray;
}
 </style>
 
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="homepage.php">LIBRARY</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
		<li><a href="chat_section.php">chat_section</a></li>
		<li><a href="userlist.php">user_list</a></li>
        <li><a href="upload_download.php">upload/download</a></li>
        <li><a href="settings.php">settings</a></li>
      </ul>
<!----Main Div--->
      <ul class="nav navbar-nav navbar-right">
        
		
 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg login1" data-toggle="modal" data-target="#myModal"><li><a onclick='return check()' href='library.php'>logout</a></li></button>

	  </ul>
    
  <!-- Modal -->

    </div>
  </div>
</nav>



<div class="row">
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" >
<a name="home"></a>
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="slider/data1/images/lib1.jpg" alt="a" title="a" id="wows1" width="100%" height="500px"/></li>
		<li><img src="slider/data1/images/lib2.jpg" alt="b" title="b" id="wows1" width="100%" height="500px"/></li>
		<li><img src="slider/data1/images/lib3.jpg" alt="c" title="c" id="wows1" width="100%" height="500px"/></li>
		<li><img src="slider/data1/images/lib4.jpg" alt="d" title="d" id="wows1" width="100%" height="500px"/></li>
		<li><img src="slider/data1/images/lib5.jpg" alt="e" title="e" id="wows1" width="100%" height="500px" /></li>
		<li><img src="slider/data1/images/lib6.jpg" alt="f" title="f" id="wows1" width="100%" height="500px" /></li>
		<li><img src="slider/data1/images/lib7.jpg" alt="g" title="g" id="wows1" width="100%" height="500px" /></li>
	</ul></div>

</div>	
<script type="text/javascript" src="slider/engine1/wowslider.js"></script>
<script type="text/javascript" src="slider/engine1/script.js"></script>
</div>
</div>
  
<div class="container">
<div class="row">
<div class="col-md-12" >
<div class="header"> 
		<h2 style="color:white;"><a name="login"></a>edit profile</h2> 
	</div> 
	<?php
	
        $id=$_GET["id"];
		//fetches the value from the querystring $_REQUEST
        //echo $id;
        include "connect.php";

        $sql="select * from user where id=". $id;
        $rows=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($rows);//fetches the selected row based on id
    ?>
	<form method="post" > 

		<?php include('errors.php'); ?> 

		<div class="input-group"> 
			<label class="labtext">Enter Username</label> 
			<input type="text" name="username"   value="<?php echo $username; ?>"> 
		</div> 
		<div class="input-group"> 
			<label class="labtext">Email</label> 
			<input type="email" name="email"  value="<?php echo $email; ?>"> 
		</div> 
		<div class="input-group"> 
			<label class="labtext">Enter Password</label> 
			<input type="password" class="inp" name="password_1"> 
		</div> 
 
		<div class="input-group"> 
			<label class="labtext">mobile</label> 
			<input type="mobile" class="inp" name="mobile"> 
		</div> 
		<div class="input-group"> 
			<button type="submit" class="btn" name="reg_user"> 
				Register 
			</button> 
		</div> 
		<p> 
			Already having an account? 
			<a href="adminlogin.php"> 
				Login Here! 
			</a> 
		</p> 
	</form> 
</div>
</div>



<div class="row" style="background-color:black;margin-top:0%;">
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" style="color:white;">
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
<i class="fa fa-map-marker" style="font-size:36px"></i>&nbsp&nbsp#191,sector-22A,Model Town,
Mandi Gobindgarh,Punjab<br>
<i class="fa fa-mobile-phone" style="font-size:36px"></i>&nbsp&nbspmobile No.9803472389<br>
<i class="fa fa-envelope-o" style="font-size:24px"></i>&nbsp&nbspabcd@gmail.com<br>
</p>
</div>
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" style="background-color:black;">
<hr style="border:1px solid lightgray;">
<div class="col-md-4">
<font size="4px" color="lightgray">
copyright nitin 2020
</font>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4">
&nbsp&nbsp<i class="fa fa-facebook-official" style="font-size:36px"></i>
&nbsp&nbsp<i class="fa fa-twitter" style="font-size:36px"></i>
&nbsp&nbsp<i class="fa fa-linkedin" style="font-size:36px"></i>
&nbsp&nbsp<i class="fa fa-youtube-play" style="font-size:36px"></i>
&nbsp&nbsp<i class="fa fa-instagram" style="font-size:36px"></i>
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
    if(isset($_POST["btn"]))
    {
        $user=$_POST["username"];
        $pass=$_POST["password_1"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];

        $sql="update user set username='". $user. "',password='". $pass. "',email='". $email. "',mobile='". $mobile. "' where id=". $id;

        $n=mysqli_query($con, $sql);
        if($n==1)
        {
            echo "<script>alert('user updated!')</script>";
            echo "<script>location.href='records.php'</script>";
        }
    }


    ?>

</body>
</html>


<?php

//when the user clicks the button to submit the form,if the user exists in the database, then the username and password are stored in 2 session variables and he or she is redirected to the home page
  
	if(isset($_POST["btn"]))
	{

		$user=$_POST["t1"];
		$pass=$_POST["t2"];
		
		if(isset($_POST["t3"]))
		{
			setcookie("username",$user,time()+30*24*3600);//creates a cookie named username
			setcookie("password",$pass,time()+30*24*3600);//creates a cookie named password
		
		}
		else{
			setcookie("username","",time()-30*24*3600);//deletes the cookie named username
			setcookie("password","",time()-30*24*3600);//deletes the cookie named password
		
		}
		include("connect.php");
		
		
		$query="select username,password from user_details where
		 username='". $user. "'";
			
		$rs=mysqli_query($con,$query);
		
		
			if(mysqli_num_rows($rs)>0)//user exists
			{

				$row=mysqli_fetch_array($rs);//fetch row in array format
				//echo "<br>",$row[1];
				$r=password_verify($pass,$row[1]);//verify the plain text password and check if it matches the database hashed password
				if($r){
				session_start();
				
				//session is a server side object.used in state management to share values between web pages.
				$_SESSION["username"]=$row[0];//stores username from database in session
				
				$_SESSION["pass"]=$row[1];
				header("location:home.php");
				}
			}
		else
		{
			echo "<script>alert('Invalid username or password')</script>";
		}

	}
?>
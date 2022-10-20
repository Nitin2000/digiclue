
<html>
<head>
  <title>online library management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="library.css">
  
<!-- Start WOWSlider.com HEAD section -->
			<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
			<script type="text/javascript" src="slider/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
 
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
      <a class="navbar-brand" href="#">LIBRARY</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#home">Home</a></li>
		<li><a href="#aboutus">about us</a></li>
        <li><a href="#gallary">gallary</a></li>
        <li><a href="#contactus">contact us</a></li>
      </ul>
<!----Main Div--->
      <ul class="nav navbar-nav navbar-right">
        
		
 <!-- Trigger the modal with a button -->
   <button type="button" class="btn btn-info btn-lg login1" data-toggle="modal" data-target="#myModal"><li> Login</li></button> 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="color:white;">
    <div class="modal-dialog" >
         <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title"><font class="login1font">login</font></h4></center>
        </div>
        <div class="modal-body">
          <p><div class="row">
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 box">
<?php include "login.php"?>
	
</div>
</div>
		  
		  </p>
        </div>
      </div>
    </div>
  </div>

	  </ul>
    
  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog" style="color:white;">
    <div class="modal-dialog" >
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title"><font class="login1font">registration</font></h4></center>
        </div>
        <div class="modal-body">
          <p><div class="row">
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password= $email= $mobile = $confirm_password = "";
$username_err = $password_err= $email_err= $mobile_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }

	if(empty(trim($_POST["email"]))){
		$email_err = "Please enter email address.";     
    } else{
        $email = trim($_POST["email"]);
        } 

	if(empty(trim($_POST["mobile"]))){
        $mobile_err = "Please enter mobile no.";     
	}else if(strlen(trim($_POST["mobile"]))==10)
			$mobile = trim($_POST["mobile"]);
		else
           $mobile_err = "mobile no. length don't match";
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($email_err) && empty($mobile_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, email, mobile) VALUES (?, ?,?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password,$param_email, $param_mobile);
            
            // Set parameters
            $param_username = $username;
			$param_email = $email;
			$param_mobile = $mobile;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}

?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	 
		      <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
		    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
   	        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
			<label>Email</label> 
            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
            <span class="help-block"><?php echo $email_err; ?></span> 
			</div>
			
   	        <div class="form-group <?php echo (!empty($mobile_err)) ? 'has-error' : ''; ?>">
			<label>mobile</label> 
            <input type="mobile" name="mobile" class="form-control" value="<?php echo $mobile; ?>">
            <span class="help-block"><?php echo $mobile_err; ?></span>  
			</div>
 
			   <div class="form-group">
                <input type="submit" class="btn btn-primary btn-success " value="Submit">
                <input type="reset" class="btn btn-default btn-success " value="Reset">
            </div>
				
		
	</form>

</div>
</div>
</p>
        </div>
     </div>
   </div>
  </div>
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
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" style="color:black;">
<center>
 <a name="aboutus"><h1>About us</h1></a>
<br><br>
<p>online library management is an idea to relief the student of school,college and other instituetes
 to have available of variety of books for study.from this website student can download variety of books.
 through this website isuing process of books from library also neglected. the student user just have to 
 login into the website or register themself in database to keep record on downloads. this website also allow 
 user to upload the books  which we don't have in our records. through this user help other user in learning
 
</p>
</center>
<!-- <hr width="60%"></hr> -->
</div>
</div>

<div class="row" id="gallary">
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" >
<center>
<a name="gallary"><h2>gallary</h2></a>
</center>
<!----first row--->
<div class="eimg" >
<div class="col-md-3 col-xs-6" >
<img src="image/lib1.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity" >
</div>
<div class="col-md-3 col-xs-6">
<img src="image/lib2.jpg" style="cursor:pointer " onclick="onClick(this)" class="w3-hover-opacity"  >
</div>
<div class="col-md-3 col-xs-6" >
<img src="image/lib3.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity" >
</div>
<div class="col-md-3 col-xs-6">
<img src="image/lib4.png"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity" >
</div>
<!----second row--->
<div class="col-md-3 col-xs-6">
<img src="image/lib5.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity" >
</div>
<div class="col-md-3 col-xs-6">
<img src="image/lib6.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity" >
</div>
<div class="col-md-3 col-xs-6">
<img src="image/lib7.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity" >
</div>
<div class="col-md-3 col-xs-6">
<img src="image/lib.jpg"  style="cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity" >
</div>
</div>
</div>
</div>


<div class="row" id="contact_us">
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" style="margin-bottom:2%;padding: 0% 5% 0% 5%;">
<center>
<a name="contactus"><h2>contact us</h2></a>
</center>
<div class="col-md-5">
<form>
<table class="table table-striped">
  <tbody>
    <tr>
      <td scope="col" class="modalwindowk" style="padding-top:3.5%;">name</td>
      <td scope="col"> 
		<input type="textbox" placeholder="enter your name"></td></tr>
	<tr>
      <td scope="row" class="modalwindowk" style="padding-top:3.5%;">mobile</td>
      <td><input type="mobile" placeholder="enter your mobile no" ></td>
    </tr>
    <tr>
      <td scope="row" class="modalwindowk" style="padding-top:3.5%;">email id</td>
      <td><input type="email" placeholder="enter your email" ></td>
    </tr>
    <tr>
      <td scope="row" class="modalwindowk" style="padding-top:6%;">message</td>
      <td><textarea placeholder="enter your message" style="padding-top:5%;"></textarea></td>
    </tr>
	<tr>
      <td scope="row" class="modalwindowk"></td>
      <td>
	<input type="submit" class="btn btn-success csk" value="submit" >
	  </td>
    </tr>
	</tbody>
</table>
</form>
</div>
<div class="col-md-7" style="word-spacing:3px;">

<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" >
<div class="col-md-6 ">
<i class="fa fa-home" ></i> #191,sector-22/A,ModelTown,
MandiGobindgarh,Punjab 147301
</div>

<div class="col-md-6">
<i class="fa fa-mobile-phone" ></i> 9803472389<br>
<i class="fa fa-envelope-o" ></i> nitinbhala21@gmail.com<br>
</div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27454.515137447474!2d76.
27781157810281!3d30.667354676219688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391
01a60c106367f%3A0xd1f8938db092c4cf!2sMandi%20Gobindgarh%2C%20Punjab!5e0!3m2!1sen!2sin!4v158
7978583947!5m2!1sen!2sin"width="100%" height="40% " frameborder="0" style="border:0;"
allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
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
</script>

</body>
</html>
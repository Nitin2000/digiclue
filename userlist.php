<?php
// Initialize the session
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: homepage.php");
    exit;
}
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: library.php");
    exit;
}?>
<html>
<head>
  <title>user_list</title>
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
 <style>

table 
{
	text-align:center;
	width:100%;
}
th
{
	    width: 20%;
    margin: 50px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
        border-bottom-color: rgb(176, 196, 222);
        border-bottom-style: solid;
        border-bottom-width: 1px;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}

td
{
	    width: 20%;
    margin: 50px auto 0px;
    padding: 10px;
	text-align:center;
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
<button type="button" class="btn btn-info btn-lg login1" data-toggle="modal" data-target="#myModal"><li><a onclick='return check()' href='logout.php'>logout</a></li></button>

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
<div class="col-md-12" style="text-align:center;padding:25px ;">

<?php
$con=mysqli_connect("localhost","root","","library");
if(!$con)
    die("cannot connect to server");

else
{
	$query="select * from users order by username";
	
	$rows=mysqli_query($con,$query);
	
	if(mysqli_num_rows($rows)==0)
	{
		echo "<b>database is empty</b><br>";
	}
	else if(mysqli_num_rows($rows)>0)
	{
		 echo "<table border='1px'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>USERNAME</th>";
        echo "<th>EMAIL</th>";
        echo "<th>mobile</th>";
        
        echo "</tr>";
		while($row=mysqli_fetch_array($rows))
		{
			 echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";

            echo "</tr>";
		}
            echo "</table>";
	}


}
?>
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


</body>
</html>
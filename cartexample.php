<?php
// Initialize the session

 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: chat_section.php");
    exit;
}
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: index.php");
    exit;
}?>
<html>
	<head>
	</head>
	<body>
		<div class="row ">
				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="col-md-6">
						<p>
							To add your service in your account you had to fill following information.
							The information include Service you want,your account number,name registered with account,
							service price will automatically fill when you select service by clicking on image.
							Don't worry about your information its safe to us. You has to pay the money online
							using different modes such as online banking,paytm, google pay transaction etc.
							Account details will provide to you bellow in the page
						</p>
							<form name="frm">
								<table>
									<tr>
										<td>
											<input type="text" name="txt4" Placeholder="name registered with account">
										</td>
										<td>
											<input type="text" name="txt3" Placeholder="your account number">
										</td>
									</tr>
									<tr>
										<td>
											<label for="txt2">Pay amount</label>
											<input type="text" name="txt2"Readonly>
										</td>
									</tr>
									<tr>
										<td>
											<input type="text" name="txt5" Placeholder="Phone Number">
										</td>
									</tr>
									<tr>
										<td>
											<center>
											<input type="button" value="Buy" onclick="calculate()">
											</center>
										</td>
									</tr>
								</table>
							</form>
						</div>
					<div class="col-md-6">
							<center>
							Purchase Services</center>
						<div style="float:left;">
							<img  src="image/digi1.jpg" height="10%" onclick="frm.txt2.value=2000">
							<div class="">Email Marketing</div>

							<img  src="image/digi2.jpg" height="10%" onclick="frm.txt2.value=3000">
							<div class="">App Marketing</div>
						</div>
						<div style="float:right;">
							<img  src="image/digi3.jpg" height="10%" onclick="frm.txt2.value=4000">
							<div class="">SEO</div>

							<img  src="image/digi4.jpg" height="10%" onclick="frm.txt2.value=2500">
							<div class="">Social Media Marketing</div>
						</div>
					</div>
				</div>		
			</center>
		</div>
	</body>
</html>
<?php 
	if(isset($_POST["btn_1"]))
		{
			$cardnumber=$_POST["n1"];
			$cardcv=$_POST["n2"];
			$con=mysqli_connect("localhost","root","","digitalclue");
			//$user=$_SESSION["username"];
			$user="nitin bhala";
			$user="nitin bhala";
			$query="insert into order(O_C_Name)values('".$user."')";
			$n=mysqli_query($con,$query);
			if($n==1)
				{
					echo"<script>alert('you send message!')</script>";
					echo"<script>location.href='chatsection.php'</script>";
				}
		}
?>
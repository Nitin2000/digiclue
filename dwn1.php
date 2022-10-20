<?php

include("connect.php");
$sql="select * from orders";
$rs=mysqli_query($con,$sql);
echo "<ul>";
while($row=mysqli_fetch_array($rs))
{
	$path=$row[4];//fetches the path column from database table
	$index=strpos($path,"/");
	$file=substr($path,$index);
	
	echo "<li><a href='dwn2.php?file=$row[4]'>$file</a></li>";
	// echo "<li><a href='dwn2.php?file=$row[1]'><img src=$row[1] width='100px' height='100px' alt='$row[1]'></a></li>";
}
echo "</ul>";


?>
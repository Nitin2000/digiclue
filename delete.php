<?php

$user=$_GET["id"];
echo $user;
include "connect.php";
$sql="delete from chat where chat_id=".$user;
$n=mysqli_query($con,$sql);
if($n==1)
{
	echo "<script>alert('user deleted!')</script>";
	echo "<script>location.href='chatsection.php'</script>";
}
?>
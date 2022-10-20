<?php  
$path=$_GET["file"];//uploads/filename
$file_url = 'C:/xampp/htdocs/imswebproject/uploads/'. $path;  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: utf-8");   
$file=basename($file_url);
header("Content-disposition: attachment; filename=".$file);
//flush();// Flush system output buffer   
readfile($file_url);  
?>  
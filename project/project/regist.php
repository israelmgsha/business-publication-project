<?php
include("connect.php");
if(isset($_POST["submit1"]))
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$prov=$_POST["prov"];
	$dist=$_POST['dist'];
	$sect=$_POST['sector'];
	$bname=$_POST['bname'];
	$cont=$_POST['contact'];
	$email=$_POST['email'];
$insert=mysqli_query($connect,"INSERT INTO registration( `f_name` , `l_name` , `province` , `district` , `sector` , `b_name` , `contact` , `email` ) VALUES ('$fname', '$lname', '$prov', '$dist', '$sect', '$bname', '$cont', '$email')");
if($insert==true)
{
	echo"<script>alert('well inserted')</script>";
}
else
{
	echo"not inserted";
}
}
?>
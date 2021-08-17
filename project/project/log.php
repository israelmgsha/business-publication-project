<?php
include("connect.php");
if(isset($_POST["submit1"]))
{
   $user=$_POST["username"];
   $pass=$_POST["password"];
   $select=mysqli_query($connect,"SELECT * FROM user")or die(mysqli_error($connect));
   
   $us=mysqli_fetch_array($select);
   $fetch['username']=$_POST['username'];
   $fetch['username']=$_POST['username'];
 
   if($fetch['username']==$user)
   {
	   echo $pass;
	   echo $fetch['username'];
   }
   else
   {
       echo '$user';
	 
   }
}
?>
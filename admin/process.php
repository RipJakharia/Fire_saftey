<?php
   $email=$_POST['email'];
   $password=$_POST['password'];
   if($email== 'admin@gmail.com' and $password=='admin')
   {
   	header("Location:admindashboard.php");
   }
   else
   {
   	header("Location:error.php");
   }
?>
<?php

$con=mysqli_connect("localhost","root","","gdb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from admin_login where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
	
}
	else
    {
        echo "<script>alert('error login')</script>";
		echo "<script>window.open('admin_login.php','_self')</script>";
    
    }
    }
	
	?>
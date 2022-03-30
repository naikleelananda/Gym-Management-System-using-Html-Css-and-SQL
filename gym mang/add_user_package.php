<?php


$con=mysqli_connect("localhost","root","","gdb");


if(isset($_POST['pat_submit']))
{
	$package_id=$_POST['pid'];
    $user_id=$_POST['uid'];
    $query="insert into user_package(package_id,user_id)values('$package_id','$user_id')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
	else{
		
	      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('add_trainer_assig.php','_self')</script>";
	}
} 
	
?>
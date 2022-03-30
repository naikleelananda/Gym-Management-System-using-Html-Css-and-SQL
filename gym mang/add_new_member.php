<?php


$con=mysqli_connect("localhost","root","","gdb");


if(isset($_POST['pat_submit']))
{
	$user_id=$_POST['id'];
    $user_name=$_POST['name'];
	$user_phone_no=$_POST['phone'];
	$user_dob=$_POST['dob'];	
    $user_email=$_POST['email'];
    $user_address=$_POST['address'];
    $query="insert into user_details(user_id,user_name,user_phone_no,user_dob,user_email,user_address)values('$user_id','$user_name','$user_phone_no','$user_dob','$user_email','$user_address')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
	else
	{
		echo "<script>alert('Error while Entering.')</script>";
        echo "<script>window.open('add_new_memb.php','_self')</script>";
	}
} 
	
?>
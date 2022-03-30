<?php





$con=mysqli_connect("localhost","root","","gdb");


if(isset($_POST['pat_submit']))
{
	
	$user_id=$_POST['id'];
	$option=$_POST['option'];
	$val=$_POST['val'];
		if($option=="user_name")
		{
		$query="update user_details set user_name='$val' where user_id='$user_id'";
		}
		if($option=="user_dob")
		{
		$query="update user_details set user_dob='$val' where user_id='$user_id'";
		}
		if($option=="user_phone_no")
		{
		$query="update user_details set user_phone_no='$val' where user_id='$user_id'";
		}
		if($option=="user_email")
		{
		$query="update user_details set user_email='$val' where user_id='$user_id'";
		}
		if($option=="user_address")
		{
		$query="update user_details set user_address='$val' where user_id='$user_id'";
		}
    $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member detail updated.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
	else
	{
		echo"<script>alert('error')</script>";
	}
} 
	
?>
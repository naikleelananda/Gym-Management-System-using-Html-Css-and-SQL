<?php





$con=mysqli_connect("localhost","root","","gdb");


if(isset($_POST['pat_submit']))
{
	
	$trainer_id=$_POST['id'];
	$option=$_POST['option'];
	$val=$_POST['val'];
		if($option=="trainer_name")
		{
		$query="update trainer_details set trainer_name='$val' where trainer_id='$trainer_id'";
		}
		if($option=="trainer_dob")
		{
		$query="update trainer_details set trainer_dob='$val' where trainer_id='$trainer_id'";
		}
		if($option=="trainer_phone_no")
		{
		$query="update trainer_details set trainer_phone_no='$val' where trainer_id='$trainer_id'";
		}
		if($option=="trainer_email")
		{
		$query="update trainer_detailss set trainer_email='$val' where trainer_id='$trainer_id'";
		}
		if($option=="trainer_address")
		{
		$query="update trainer_details set trainer_address='$val' where trainer_id='$trainer_id'";
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
<?php


$con=mysqli_connect("localhost","root","","gdb");


if(isset($_POST['tra_submit']))
{
	$trainer_id=$_POST['id'];
	$query1="delete from trainer_assign where trainer_id='$trainer_id'";
	$query2="delete from trainer_details where trainer_id='$trainer_id'";
     $result1=mysqli_query($con,$query1);
	 $result2=mysqli_query($con,$query2);
    if($result1 || result2)
    {
      echo "<script>alert('Member deleted.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
	else
	{
		echo"<script>alert('error')</script>";
	}
} 
	
?>
<?php


$con=mysqli_connect("localhost","root","","gdb");
if(isset($_POST['pat_submit']))
{
	$user_id=$_POST['id'];
	$query1="delete from payment_details where user_id='$user_id'";
	$query2="delete from trainer_assign where user_id='$user_id'";
	$query3="delete from user_package where user_id='$user_id'";
    $query4="delete from user_details where user_id='$user_id'";
     $result1=mysqli_query($con,$query1);
	 $result2=mysqli_query($con,$query2);
	 $result3=mysqli_query($con,$query3);
	 $result4=mysqli_query($con,$query4);
    if($result1 || result2 || result3 || result4)
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
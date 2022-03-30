<?php


$con=mysqli_connect("localhost","root","","gdb");


if(isset($_POST['tra_submit']))
{
	$assignment_no=$_POST['aid'];
	$query="delete from trainer_assign where assignment_no='$assignment_no'";
	 $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Assignment deleted.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
	else
	{
		echo"<script>alert('error')</script>";
		echo "<script>window.open('delete_trainer_assig.php','_self')</script>";
	}
} 
	
?>
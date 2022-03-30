<?php


$con=mysqli_connect("localhost","root","","gdb");


if(isset($_POST['pat_submit']))
{
	$user_id=$_POST['uid'];
    $trainer_id=$_POST['tid'];
    $query="insert into trainer_assign(user_id,trainer_id)values('$user_id','$trainer_id')";
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
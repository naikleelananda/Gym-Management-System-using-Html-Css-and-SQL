<html>
<body>
<?php
session_start();
$con=mysqli_connect("localhost","root","","gdb");
if(isset($_POST['login_submit']))
{
	$trainer_id=$_POST['trainer_id'];
	$query="select * from trainer_details where trainer_id='$trainer_id'";
	$result=mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['trainer'] = $trainer_id;
		header("Location:trainer_panel.php");
}
	else
    {
        echo "<script>alert('error login')</script>";
		echo "<script>window.open('trainer_login.php','_self')</script>";
    }
    }
	
	?>
	
</body>
</html>
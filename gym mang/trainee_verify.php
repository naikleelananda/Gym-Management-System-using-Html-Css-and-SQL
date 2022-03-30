<html>
<body>

<?php
session_start();
$con=mysqli_connect("localhost","root","","gdb");
if(isset($_POST['login_submit']))
{
	$user_id=$_POST['trainee_id'];
	$query="select * from user_details where user_id='$user_id'";
	$result=mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['trainee']=$user_id;
		header("Location:trainee_panel.php");
		
	}
	else
    {
        echo "<script>alert('error login')</script>";
		echo "<script>window.open('trainee_login.php','_self')</script>";
    }
   }
	
?>

</body>
</html>
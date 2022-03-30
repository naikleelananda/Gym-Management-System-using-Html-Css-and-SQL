<?php
$con=mysqli_connect("localhost","root","","gdb");


    if(isset($_POST['tra_submit']))
    {
        $trainer_id=$_POST['id'];
        $trainer_name=$_POST['name'];
        $trainer_dob=$_POST['dob'];
		$trainer_phone_no=$_POST['phone'];
		$trainer_email=$_POST['email'];
		$trainer_address=$_POST['address'];
        $query="insert into Trainer_details(trainer_id,trainer_name,trainer_dob,trainer_phone_no,trainer_email,trainer_address)values('$trainer_id','$trainer_name','$trainer_dob','$trainer_phone_no','$trainer_email','$trainer_address')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
?>
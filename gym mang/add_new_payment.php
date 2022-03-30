<?php
$con=mysqli_connect("localhost","root","","gdb");


 
        if(isset($_POST['pay_submit']))
        {

			$user_id=$_POST['uid'];
            $amount=$_POST['amount'];
            $payment_type=$_POST['ptype'];
			$payment_date=$_POST['pdate'];
            $query="insert into Payment_details(user_id,amount,payment_type,payment_date)values('$user_id','$amount','$payment_type','$payment_date')";
            $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('admin-panel.php','_self')</script>";
            }
			else
			{
				echo"<script>alert('failed.')</script>";

			}		
        } 

?>

<?php
$con=mysqli_connect("localhost","root","","gdb");
      
 function get_trainee_details(){
    global $con;
    $query="select * from user_details";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
				$user_id=$row['user_id'];
				$user_name=$row['user_name'];
				$user_phone_no=$row['user_phone_no'];
				$user_dob=$row['user_dob'];	
				$user_email=$row['user_email'];
				$user_address=$row['user_address'];
      echo "<tr>
			<td>$user_id</td>
			<td>$user_name</td>
            <td>$user_phone_no</td>
            <td>$user_dob</td>
			<td>$user_email</td>
			<td>$user_address</td>
        </tr>";
    }
}

function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo"<tr>
        <td>$Package_id</td>
		<td></td>
        <td>$Package_name</td>
		<td></td>         
		<td>$Amount</td>
            
        </tr>";

    }
}

function get_trainer(){
    global $con;
    $query="select * from trainer_details";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $trainer_id=$row ['trainer_id'];
        $trainer_name=$row['trainer_name'];
		$trainer_dob=$row ['trainer_dob'];
        $trainer_phone_no=$row['trainer_phone_no'];
		$trainer_email=$row ['trainer_email'];
		$trainer_address=$row ['trainer_address'];
        echo"<tr>
        <td>$trainer_id</td>
        <td>$trainer_name</td>
        <td>$trainer_dob</td>
		<td>$trainer_phone_no</td>
		<td>$trainer_email</td>
		<td>$trainer_address</td>   
        </tr>";

    }
}

function get_payment(){
    global $con;
    $query="select * from Payment_details";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $payment_no=$row ['payment_no'];
		$user_id=$row['user_id'];
        $amount=$row['amount'];
        $payment_type=$row['payment_type'];
		$payment_date=$row['payment_date'];
        
        
        echo"<tr>
        <td>$payment_no</td>
        <td>$user_id</td>
		<td>$amount</td>
        <td>$payment_type</td>
        <td>$payment_date</td>
            </tr>";

    }
}


function get_admin_info(){
	 global $con;
    $query="select * from admin_details";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $admin_id=$row ['admin_id'];
        $admin_name=$row['admin_name'];
		$admin_phone_no=$row['admin_phone_no'];
		$admin_dob=$row ['admin_dob'];
		$admin_email=$row ['admin_email'];
		$admin_address=$row ['admin_address'];
        echo"<tr>
        <td>$admin_id</td>
        <td>$admin_name</td>
        <td>$admin_phone_no</td>
		<td>$admin_dob</td>
		<td>$admin_email</td>
		<td>$admin_address</td>   
        </tr>";
	}
}


function get_trainer_assign(){
    global $con;
    $query="select * from trainer_assign";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $assignment_no=$row ['assignment_no'];
		$trainer_id=$row ['trainer_id'];
		$user_id=$row['user_id'];
        
        echo"<tr>
        <td>$assignment_no</td>
		<td>$trainer_id</td>
        <td>$user_id</td>
		
            </tr>";

    }
}


function get_user_package(){
    global $con;
    $query="select * from user_package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $number=$row ['Numbers'];
		$package_id=$row ['Package_id'];
		$user_id=$row['user_id'];
        
        echo"<tr>
        <td>$number</td>
		<td>$package_id</td>
        <td>$user_id</td>
		
            </tr>";

    }
}


?>
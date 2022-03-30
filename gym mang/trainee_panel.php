<html>
<head>
	<title>Trainee details</title>
	 
</head>
<body style="background:url('images/1.jpg'); background-size: cover;">
 		<style>
body {font-family: Arial, Helvetica, sans-serif;background-repeat: no repeat;
  background-size: 100%;
}
form {border : 0px solid #f1f1f1;}
h2{font-size: 50px;
text-align:right; }
button {
    background-color: #B0E0E6;
    color: white;
    padding: 10px 12px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 9%;
}


	div.ex1 {
  background-color: #C0C0C0;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  width: 800px;
  border: 15px solid black;
	</style>
	<div class="row">
	<button><a href="main_index.php">log out</a></button>
	<center>
	<b>	
		    <div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>My Details</h3></div>
				 
				 <div style="background-color:#3498DB;color:3498DB;">
 <?php
 session_start();
  include("func.php");
  
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gdb";

$con= mysqli_connect($hostname, $username, $password, $databaseName);



   $trainee_id= $_SESSION['trainee'];
     $query="select * from user_details where user_id='$trainee_id'";
    $result=mysqli_query($con,$query);
    echo " 
	
		<table
        <thead>
		<tr>
		<th>Memeber ID</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Phone No</th>
        <th>Email ID</th>
		<th>Address</th>
        </tr>   
        </thead>
        <tbody>
       
		";
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

        echo "</tbody></table>";

    ?>
	</b>
	 </center>
	 </div>
		</div>
		
		
		<center>
	<b>
		<div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>My package details</h3></div>
			
			<div style="background-color:#3498DB;color:3498DB;">
			
			<?php
			 $trainee_id= $_SESSION['trainee'];
			 $query="select * from user_package where user_id='$trainee_id'";      //My package details must be created
    $result=mysqli_query($con,$query);
    echo " 
		<table>
        <thead>
		<tr>
		<th>Numbers</th>
        <th>PackagID</th>
        <th>User_ID</th>
        </tr>   
        </thead>
        <tbody>
       
		";
    while ($row=mysqli_fetch_array($result)){
          $numbers=$row ['Numbers'];
    $package_id=$row['Package_id'];
    $user_id=$row['user_id'];
        echo " <tr>
        <td>$numbers</td>
        <td>$package_id</td>
		<td>$user_id</td>
        </tr>";
        }
        echo "</tbody></table>";

    ?>
	</b>
	 </center>
	 </div>
		</div>
		
		                                    
		
		<center>
	<b>
		<div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>My Trainers</h3></div>
			
			<div style="background-color:#3498DB;color:3498DB;">
			
			<?php
			 $query="select * from trainer_assign where user_id='$trainee_id'";      //My payment details must be created
    $result=mysqli_query($con,$query);
    echo " <table>
        <thead>
		<tr>
		<th>AssignmentNo</th>
        <th>TrainerID</th>
        </tr>   
        </thead>
        <tbody>
		";
    while ($row=mysqli_fetch_array($result)){
			$assignment_no=$row ['assignment_no'];
			$trainer_id=$row['trainer_id'];
        echo " <tr>
        <td>$assignment_no</td>
        <td>$trainer_id</td>
        </tr>";
        }
        echo "</tbody></table>";

    ?>
	</b>
	 </center>
	 </div>
		</div>
   
    </body>
        </html> 
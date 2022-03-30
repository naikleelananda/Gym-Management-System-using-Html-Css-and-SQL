




<html>
<head>
	<title>User details</title>
	 
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
	}
	
	</style>
	<div class="row">
	<button><a href="trainer_details.php" >Go Back</a></button>
	<center>
	<b>	
		    <div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>Trainer Details</h3></div>
				 
				 <div style="background-color:#3498DB;color:3498DB;">
	<?php
	include("func.php");
	if(isset($_POST['patient_search_submit']))
	{
    $contact=$_POST['search'];
     $query="select * from trainer_details where trainer_id='$contact'";
    $result=mysqli_query($con,$query);
    echo"<table >
        <thead>
     <tr>
            <th>Trainer ID</th>
            <th>Name</th>
         <th>Date of Birth</th>
         <th>Phone no</th>
		 <th>Email ID</th>
		 <th>Address</th>
        </tr>   
        </thead>
        <tbody>
	";
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
		  echo "</tbody></table>";
	}
    ?>
	</b>
	 </center>
	 </div>
		</div>
   
    </body>
        </html> 
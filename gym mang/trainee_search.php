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
	</style>
	<div class="row">
	<button><a href="trainee_details.php" >Go Back</a></button>
	<center>
	<b>	
		    <div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>Members Details</h3></div>
				 
				 <div style="background-color:#3498DB;color:3498DB;">
 <?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
    $contact=$_POST['search'];
     $query="select * from user_details where user_id='$contact'";
    $result=mysqli_query($con,$query);
    echo " 
	<table>
		<thead>
     <tr>
         <th>MemberID</th>
         <th>Name</th>
         <th>Phone no</th>
         <th>Date of Birth</th>
         <th>Email</th>
		 <th>address</th>
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
}
    ?>
	</b>
	 </center>
	 </div>
		</div>
   
    </body>
        </html> 
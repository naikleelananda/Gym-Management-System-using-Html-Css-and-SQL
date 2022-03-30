<html>
<body>





<center>
	<b>	
		    <div class="ex1">
			<div style="background-color:#3498DB;color:000000;">
            <h3>Members Details</h3></div>
				 
				 <div style="background-color:#3498DB;color:3498DB;">
<?php

$con=mysqli_connect("localhost","root","","gdb");
if(isset($_POST['patient_search_submit']))
{
    $contact=$_POST['search'];
     $query="select * from admin_details where admin_id='$contact'";
    $result=mysqli_query($con,$query);
    echo " 
	
		<table
        <thead>
		<tr>
		<th>Admnin ID</th>
        <th>Name</th>
        <th>Phone no</th>
        <th>Daye of birth</th>
        <th>Email ID</th>
		<th>Address</th>
        </tr>   
        </thead>
        <tbody>
       
		";
    while ($row=mysqli_fetch_array($result)){
          $admin_id=$row ['admin_id'];
    $admin_name=$row['admin_name'];
    $admin_phone_no=$row['admin_phone_no'];
    $admin_dob=$row['admin_dob'];
    $admin_email=$row ['admin_email'];
	$admin_address=$row['admin_address'];
        echo " <tr>
        <td>$admin_id</td>
        <td>$admin_name</td>
        <td>$admin_phone_no</td>
        <td>$admin_dob</td>
        <td>$admin_email</td>
		<td>$admin_address</td>
        </tr>";
        }
        echo "</tbody></table>";
}

 ?>
 </div>
  </div>
	</b>
	 </center>
	  </div>
	  
	 </body>
	 </html>
	 
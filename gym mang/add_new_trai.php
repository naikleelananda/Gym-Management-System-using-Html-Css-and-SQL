<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Trainer details</title>
	 
</head>
<body style="background:url('images/2.jpg'); background-size: cover;">
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
  width: 300px;
	border: 15px solid black;}
	
	div.ex2 {
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
             
   <button><a href="admin-panel.php" >Go Back</a></button>

   <b>
				<div class="ex1">
                 <div style="background-color:#3498DB;color:#ffffff;">
				 <h3>Register new Trainer</h3>
                </div> 
				
                <form class="form-group" action="add_new_trainer.php" method="post">
				<div style="background-color:#3498DB;color:FFFFFF;">
                <label>Trainer ID</label><br>
				<input type="text" name="id" class="form-control"><br><br>
                <label>Full Name:</label><br>
				<input type="text" name="name" class="form-control"><br><br>
				<label>Phone_no</label><br>
				<input type="text" name="phone" class="form-control"><br><br>
				<label>Date of Birth</label><br>
				<input type="date" name="dob" class="form-control"><br><br>
				<label>Email ID</label><br>
                <input type="text" name="email" class="form-control"><br><br>
				<label>Address</label><br>
                <input type="text" name="address" class="form-control"><br><br>
				<input type="submit" class="btn btn-primary" name="tra_submit" value="Register">
				</div>
</b>
</div>
</div>


<center>
   <b>
				<div class="ex2">
                 <div style="background-color:#3498DB;color:#ffffff;">
				 
				 <h3> Trainer Information</h3></div>
          <div style="background-color:#3498DB;color:#ffffff;">
          <div class="row">
   
                         
                 </form></div>
    <table >
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
          <?php get_trainer(); ?>
        </tbody>
    </table>
	</div>
	</div>
	
	</b>
	</center>


</body>
<!DOCTYPE html>
<?php
include ("func.php");
// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
    
  </head>
  

   
         <body style="background:url('images/3.jpg'); background-size: cover;">
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
button.ex1{
    background-color: #3498DB;
    color: white;
    padding: 10px 12px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width:24%;
}


	div.ex1 {
  background-color: #C0C0C0;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  width: 600px;
  border: 15px solid black;
	}
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
 
 
            <div class="list-group">
				<button><a href="admin-panel.php" class="list-group-item active">Back</a></button>
                <button><a href="add_new_trai.php" class="list-group-item active">ADD New Trainer</a></button>
                <button><a href="delete_trai.php" class="list-group-item">Delete Trainer</a></button>
                <button><a href="update_trai.php" class="list-group-item">Update Trainer Details</a></button>
            </div>
            <hr>
			
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
          <?php get_trainer();?>
        </tbody>
    </table>
	</div>
	</div>
	
	</b>
	</center>
			
			</body>
			</html>
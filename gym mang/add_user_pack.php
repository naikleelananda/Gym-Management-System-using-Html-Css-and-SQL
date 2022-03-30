<!DOCTYPE html>

<?php
include("func.php");
// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gdb";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `user_details`";

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
  width: 300px;
  border: 15px solid black;
	}
	
	div.ex2 {
  background-color: #C0C0C0;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  width: 400px;
  border: 15px solid black;
	}
	</style>
	
	<div class="list-group">
				<button><a href="package_assign.php" class="list-group-item active">Back</a></button>
	</div>
	<hr>
  
		    <div class="ex1">
			
			<div style="background-color:#3498DB;color:3498DB;">
			
                <h3>Register new user package detail
				</h3>
            </div> 
                
				<b><div style="margin-top:10px;margin-bottom:80px;color:#000000;">
                <form class="form-group" action="add_user_package.php" method="post">
                <label>Package ID</label><br>
				<input type="text" name="pid" class="form-control"><br><br>
				<label>User ID</label><br>
				<input type="text" name="uid" class="form-control"><br><br>
				<input type="submit" class="btn btn-primary" name="pat_submit" value="Register" >      <a href="func.php" class="btn btn-light"></a>
				</b>
                </form>
				</div>
				</div>
              
			<center>   
		    <div class="ex2">
			
			<div style="background-color:#3498DB;color:000000;">
             <h3>user packages Details</h3></div>
           
         
				
				 <b>
				 <div style="background-color:#3498DB;color:3498DB;">
	 
    <table>
        <thead>
     <tr>
         <th>Number</th>
         <th>package ID</th>
         <th>Memeber ID</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_user_package(); ?>
        </tbody>
    </table>
	</b>
	</center>
	</div>
	</div>
		 
 
      
	  </body>
	  </html>
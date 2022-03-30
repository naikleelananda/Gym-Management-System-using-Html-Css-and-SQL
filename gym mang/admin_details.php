<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Admin details</title>
	 
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
  padding-top: 5px;
  padding-right: 10px;
  padding-bottom: 5px;
  padding-left: 10px;
  width: 800px;
  border: 15px solid black;
  

	</style>

         <div class="row">
             
   
	<button><a href="admin-panel.php" >Go Back</a></button>
	
				 
			<center>   
		    <div class="ex1">
			
			<div style="background-color:#3498DB;color:000000;">
             <h3>Admin Details</h3></div>
           
         
				
				 <b>
				 <div style="background-color:#3498DB;color:3498DB;">
	 
    <table>
        <thead>
     <tr>
         <th>Admin ID</th>
         <th>Name</th>
         <th>Phone no</th>
         <th>Date of Birth</th>
         <th>Email</th>
		 <th>address</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_admin_info();?>
        </tbody>
    </table>
	</b>
	</center>
	</div>
	
    </div>
	</div>		 
   
    
    

    </body>
</html>
<!DOCTYPE html>
<?php include("func.php");?>
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
	</style>
 
 
            <div class="list-group">
				<button><a href="admin-panel.php" class="list-group-item active">Back</a></button>
                <button><a href="add_new_memb.php" class="list-group-item active">ADD New Trainee</a></button>
                <button><a href="delete_memb.php" class="list-group-item">Delete Trainee</a></button>
                <button><a href="update_memb.php" class="list-group-item">Update Trainee Details</a></button>
            </div>
            <hr>
				 <form class="form-group" action="trainee_search.php" method="post">
          

			<center>   
		    <div class="ex1">
			
			<div style="background-color:#3498DB;color:000000;">
             <h3>Members Details</h3></div>
           
         
				
				 <b>
				 <div style="background-color:#3498DB;color:3498DB;">
	 
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
          <?php get_trainee_details(); ?>
        </tbody>
    </table>
	</b>
	</center>
	</div>
	
    </div>
		 
			
			</body>
			</html>
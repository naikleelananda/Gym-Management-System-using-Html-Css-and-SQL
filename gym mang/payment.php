<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Payment details</title>
	
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

        
    <button><a href="admin-panel.php" >Go Back</a></button>
	
	<center>
	<div class="ex1">
    <div style="background-color:#3498DB;color:000000;">
                <h3>Make new Payment</h3>
                </div> 
	<div style="background-color:#3498DB;color:FFFFFF;">
                <form class="form-group" action="add_new_payment.php" method="post">

					<label>Trainee ID</label>
                    <input type="text" name="uid" class="form-control"><br><br>
                    <label>Amount</label>
                    <input type="text" name="amount" class="form-control"><br><br>
					<label>Payment Type</label>
                    <input type="text" name="ptype" class="form-control"><br><br>
                    <label>Payment Date</label>
                    <input type="date" name="pdate" class="form-control"><br>
					<input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
					</form>
     </div>
	 <b>
			<div style="background-color:#3498DB;color:000000;">
             <h3>Payment Details</h3></div>
			 <div style="background-color:#3498DB;color:#ffffff;">
    <table >
        <thead>
     <tr>
            <th>Payment No</th>
			<th>Trainee ID</th>
            <th>Amount</th>
            <th>Payment Type</th>
			<th>Payment Date</th>
        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table>
	</div>
    </div>
	</div>
   </b>
   </center>
    			

    
    </body>
</html>
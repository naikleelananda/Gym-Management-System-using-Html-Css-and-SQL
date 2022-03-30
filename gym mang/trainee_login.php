<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
	
	button {
    background-color: #B0E0E6;
    color: white;
    padding: 10px 12px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
	
	div.ex1 {
  background-color: #FFFFFF;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  width: 300px;
  border: 15px solid silver;
}
  </style>
  <body style="background:url('images/4.jpg'); background-size: cover;">
  
    <div class="ex1" style="margin-top:130px;margin-bottom:80px;color:#34495E;">
		<img src="images/3.jpg" alt="Trulli" width="300" height="210">
             <center>
              <h1>Trainee Login</h1>
              <form class="form-group" method="POST" action="trainee_verify.php">
                <div class="row">
                  <div class="col-md-4"><label>Trainee ID: </label></div>
                  <div class="col-md-8"><input type="text" name="trainee_id" class="form-control" placeholder="enter username" required/></div><br>
                </div>
                <center><input type="submit" id="inputbtn" name="login_submit" value="Login"></center><br><br>
				<button><a href="main_index.php" class="list-group-item">Back</a></button>
              </form>
            
            </center>
         
    </div>  
</html>
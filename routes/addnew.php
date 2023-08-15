<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Candidate Add</title>
  
   <link rel="stylesheet" href="../css/btn.css">
<link rel="stylesheet" href="../css/scss.css">
<link rel="stylesheet" href="../css/vcss.css">

<style>
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
</style>
 
</head>
<body>
<center>
            <div id="btnsection">
            
            
            
             
             <ul>
  
  
  <li><a href="addvoter.php">Back</a></li>
<li><a class="active" href="logout.php">Logout</a></li>
  
</ul>
              
            </div>
            </center>
  <div class="wrapper">
  	<div class="registration_form">
  		<div class="title">
  			Add Voters
  		</div>

  		<form action="../routes/voteradd.php" method="POST" enctype="multipart/form-data">
  			<div class="form_wrap">
  				<div class="input_grp">
  					<div class="input_wrap">
  						<label for="name">Name</label>
  						<input type="text" id="fname" name="name">
  					</div>
  					<div class="input_wrap">
  						<label for="Rno">Register Number</label>
  						<input type="text" id="Rno" name="reg">
  					</div>
  				</div>
  				<br>
			
			
  				

         


  				<div class="input_wrap">
  					<input type="submit" value="Add" class="submit_btn">
  				</div>



  			</div><br>

			



  		</form>
  	</div>
  </div>
</body>
</html>

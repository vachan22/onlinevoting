<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Page</title>
<link rel="stylesheet" href="../css/vcss.css">
  
</head>
<body>
  <div class="wrapper">
  	<div class="registration_form">
  		<div class="title">
  			Registration Form
  		</div>

  		<form action="../api/register.php" method="POST" enctype="multipart/form-data">
  			<div class="form_wrap">
  				<div class="input_grp">
  					<div class="input_wrap">
  						
  						your name:<input type="text"  name="name" required>
  					</div>
  					<div class="input_wrap">
  						
  						register number:<input type="text"  name="reg" required>
  					</div>
  				</div>
  				<div class="input_wrap">
  					
  					Address:<input type="text"  name="add" required>
  				</div>

  				<div class="input_wrap">
  					
  					Password:<input type="password"  name="pass" required>
  				</div>
  				<div class="input_wrap">
  					
  					Confirm password:<input type="password"  name="cpass" required>
  				</div>

          <div id="upload" style="width: 100%">
                        Upload image: <input type="file"  name="image" required>
                   </div><br>

	   <div id="upload" style="width: 100%">
                        secrete question:
                        <select name="qtn">
                             <option value="">select qestion</option>
                            <option value="1">your pet name</option>
                            <option value="2">favroite Book</option>
                            <option value="3">favorite movie</option>
                        </select><br>                   
                    </div><br>
  <div id="upload" style="width: 100%">
                        Your answer: <input type="text"  name="ans" required>
                   </div><br>


  				<div class="input_wrap">
  					<input type="submit" value="Register Now" class="submit_btn">
  				</div>



  			</div><br>

			<center><div>Already Registered? <a href="../">Login here</a></div><center>



  		</form>
  	</div>
  </div>
</body>
</html>

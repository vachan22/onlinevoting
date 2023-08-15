<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Candidate Add</title>
  <style media="screen">
   

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	list-style: none;
	font-family: 'Montserrat', sans-serif;
}

body{
  background: linear-gradient(
     105deg,
     #88beee ,
     #0a2e73
 );
}

.wrapper{
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.registration_form{
	background: white;
	padding: 30px;
	border-radius: 10px;
	width: 450px;
}

.registration_form .title{
	text-align: center;
	font-size: 25px;
	text-transform: uppercase;
	color: white;
  background:rgb(13, 98, 215);
	letter-spacing: 2px;
	font-weight: 700;
  margin-top: -5px;
  margin-left:-5px;
  margin-right:-5px;
}

.form_wrap{
	margin-top: 35px;
}

.form_wrap .input_wrap{
	margin-bottom: 15px;
}

.form_wrap .input_wrap:last-child{
	margin-bottom: 0;
}

.form_wrap .input_wrap label{
	display: block;
	margin-bottom: 3px;
	color: #1a1a1f;
}

.form_wrap .input_grp{
	display: flex;
	justify-content: space-between;
}

.form_wrap .input_grp  input[type="text"]{
	width: 165px;
}

.form_wrap  input[type="text"]{
	width: 100%;
	border-radius: 3px;
	border: 1.3px solid #9597a6;
	padding: 10px;
	outline: none;
}

.form_wrap  input[type="text"]:focus{
	border-color: #063abd;
}

.................................................................
.form_wrap .input_wrap{
	margin-bottom: 15px;
}

.form_wrap .input_wrap:last-child{
	margin-bottom: 0;
}

.form_wrap .input_wrap label{
	display: block;
	margin-bottom: 3px;
	color: #1a1a1f;
}

.form_wrap .input_grp{
	display: flex;
	justify-content: space-between;
}

.form_wrap .input_grp  input[type="number"]{
	width: 165px;
}

.form_wrap  input[type="number"]{
	width: 100%;
	border-radius: 3px;
	border: 1.3px solid #9597a6;
	padding: 10px;
	outline: none;
}

.form_wrap  input[type="number"]:focus{
	border-color: #063abd;
}

...................................................................
.form_wrap .input_wrap{
	margin-bottom: 15px;
}

.form_wrap .input_wrap:last-child{
	margin-bottom: 0;
}

.form_wrap .input_wrap label{
	display: block;
	margin-bottom: 3px;
	color: #1a1a1f;
}

.form_wrap .input_grp{
	display: flex;
	justify-content: space-between;
}

.form_wrap .input_grp  input[type="date"]{
	width: 165px;
}

.form_wrap  input[type="date"]{
	width: 100%;
	border-radius: 3px;
	border: 1.3px solid #9597a6;
	padding: 10px;
	outline: none;
}

.form_wrap  input[type="date"]:focus{
	border-color: #063abd;
}

...............................................................
.form_wrap ul{
 border:1px solid rgb(115, 185, 235);
  width:70%;
  background: rgb(206, 238, 242);
  margin-left: 15%;
	padding: 8px 10px;
	border-radius: 45px;
	display: flex;
	justify-content: center;
}

.form_wrap ul li:first-child{
	margin-right: 15px;
}

.form_wrap ul .radio_wrap{
	position: relative;
	margin-bottom: 0;
}

.form_wrap ul .radio_wrap .input_radio{
	position: absolute;
	top: 0;
	right: 0;
	opacity: 0;
}

.form_wrap ul .radio_wrap span{
	display: inline-block;
	font-size: 17px;
	padding: 3px 15px;
	border-radius: 15px;
	color: #101749;
}

.form_wrap .input_radio:checked ~ span{
	background: #105ce2;
  color:white;
}

.form_wrap .submit_btn{
	width: 100%;
	background: #0d6ad7;
	padding: 10px;
	border: 0;
  color:white;
  font-size:17px;
	border-radius: 3px;
	text-transform: uppercase;
	letter-spacing: 2px;
	cursor: pointer;
}

.form_wrap .submit_btn:hover{
	background: #051c94;
}
  </style>
</head>
<body>
  <div class="wrapper">
  	<div class="registration_form">
  		<div class="title">
  			Candidate Add
  		</div>

  		<form action="../api/cand.php" method="POST" enctype="multipart/form-data">
  			<div class="form_wrap">
  				<div class="input_grp">
  					<div class="input_wrap">
  						<label for="name">Name</label>
  						<input type="text" id="name" name="name">
  					</div>
  					<div class="input_wrap">
  						<label for="Rno">Register Number</label>
  						<input type="text" id="Rno" name="reg">
  					</div>
  				</div>
  				<br>
			

  				

          <div id="upload" style="width: 100%">
                        Upload image: <input type="file" id="profile" name="image" required>
                   </div>  <br>
			

<div class="input_wrap"> 	   


<div class="input_wrap">           
            <button class="submit_btn"><a href="position.php">Add New Position</a></button>
             </div><br>
			 
  				<div class="input_wrap">
  					<input type="submit" value="Add" class="submit_btn">
  				</div>


  			</div><br>

			



  		</form>
  	</div>
  </div>
</body>
</html>

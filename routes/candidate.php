
<?php
$connect = mysqli_connect("localhost", "root", "", "online-voting-system");
$result = mysqli_query($connect, "select * from position ");
?>

<html>
    <head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
        <title>Candidate Registratrion</title>
        <link rel="stylesheet" href="../css/scss.css">
        <link rel="stylesheet" href="../css/btn.css">
        
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>College Voting System</h1>  
            </div>
         
 <div id="btnsection">            
           
           <ul>
  
  <li><a href="position.php">Add position</a></li>
  <li><a href="admin.php">Back</a></li>
<li><a class="active" href="logout.php">Logout</a></li>
  
</ul>
             </div>
            <h2>Candidate Registratrion</h2>
             
                
                <form action="../api/cand.php" method="POST" enctype="multipart/form-data">
 <div id="upload" style="width: 30%">
                    <input type="text" name="name" placeholder="Please enter the name" required>&nbsp
                    <input type="text" name="reg" placeholder="Register number" required><br><br>
                 
 Select Position :
            <select name="pos">
		 <?php
             while($row=$result->fetch_assoc()):;?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php endwhile;?>
                     </select>
	    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    
                    <button id="loginbtn" type="submit" name="registerbtn">Add Candidate</button><br><br>
                    </div><br> 
                </form>
            </center>
    </body>
</html>
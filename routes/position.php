
<?php
$connect = mysqli_connect("localhost", "root", "", "online-voting-system");
$result = mysqli_query($connect, "select * from position ");
?>
<html>
    <head>
<style>
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
</style>
        <title>Position Add</title>
        <link rel="stylesheet" href="../css/scss.css">
        <link rel="stylesheet" href="../css/btn.css">
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>College Voting System</h1>  
            </div>
            <hr>
 <div id="btnsection">            
             <ul>
  
  
 
<li><a class="active" href="logout.php">Logout</a></li>
 <li><a href="candidate.php">Back</a></li>
  
</ul>
             </div>
            <h2>ADD POSITION</h2>
             
                
                <form action="../api/pos.php" method="POST" enctype="multipart/form-data">
 <div id="upload" style="width: 30%">
                    <input type="text" name="name" placeholder="Please enter the Position" >&nbsp
                    
                   
<br>
<br>
                   <button id="loginbtn" type="submit" name="registerbtn">Add Position</button><br><br>
                   <br> 
 Select Position :
            <select name="pos">
		 <?php
             while($row=$result->fetch_assoc()):;?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php endwhile;?>
                     </select>
       <br>
<br>
                   <button id="loginbtn" type="submit" name="registerbtn1">Remove Position</button><br><br>
	    </div>
                </form>
            </center>
    </body>
</html>
<html>
<body>
<head>
<style>
#remove {
  
  margin-right: -500px;
  
  padding: 5px;
  font-size: 15px;
  background-color: #3498db;
  color: white;
  border-radius: 5px;
}
 .div5{
 padding: 3px;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
</style>
        <title>Voter List</title>
        <link rel="stylesheet" href="../css/scss.css">
        <link rel="stylesheet" href="../css/btn.css">
          <link rel="stylesheet" href="../css/tab.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Voter List</h1>  
            </div>
            <hr>
            <center>
            <div id="btnsection">
            
            
             <ul>
  <li><a class="active" href="logout.php">Logout</a></li>
 <li><a href="admin.php">Back</a></li>
  <li><a href="addnew.php">Add New</a></li>
 

  
</ul>
              
            </div>
            </center>
<?php
 $connect = mysqli_connect("localhost", "root", "", "online-voting-system");
 
 $result = mysqli_query($connect, "select * from voter ");

?>

<center>
<table class="header">


	<thead>
		<tr>
                 
			<td class="header">Name</td>
			<td class="header">Register number</td>			
			<td class="header">remove voter</td>	
		</tr>
	</thead>
</div>
	<tbody>
      <?php
             $pass=mysqli_num_rows($result);
             while($row=$result->fetch_assoc())

				 
				
{
         echo"
		<tr>
			<td>".$row['name']."</td>
			<td>".$row['regno']."</td>
                 <form method='POST' action='../api/dlt.php'>
			<td>
			<input type='checkbox' name='dlt[]' value=".$row['regno'].">
			
			</td>
		</tr>

";

}
?>


 <div class="header">
            
            <a href="dlt.php"><button id="remove">Remove</button></a>

		
            
	</tbody>
</table>
</center>

            
           
              
            
 </div>

</form>

</body>
</html>
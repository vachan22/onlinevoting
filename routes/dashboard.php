<?php
include("inc.php");
?>
 
<?php

    


 if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];
if($_POST)
{
$pos=$_POST['pos'];

$id=$_SESSION['id'];
$result2 = mysqli_query($connect, "select * from voted where position='$pos'and id='$id' ");
$result1 = mysqli_query($connect, "select * from user where position='$pos' ");

if(mysqli_num_rows($result2)>0)
{
$v=1;
}
else
{
$v=0;
}
if($v==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
}
    


?>

<html>
    <head>
        <title>Online voting system - Dashboard</title>
        <link rel="stylesheet" href="../css/scss.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">

            <h1>College Voting System</h1>  
            </div>
            </center>
            <div id="btnsection">            
             <ul>
  
  
  <li><a href="../index.php">Back</a></li>
<li><a class="active" href="logout.php">Logout</a></li>
<li><a class="active" href="result.php">Results</a></li>
  
</ul>
             </div>

            <div id="mainSection">
                <div id="profileSection">
                    <center><img src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Register Number : </b><?php echo $data['regno'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    <?php  if($_POST) { ?>

                    <b>Status : </b><?php echo $status ?>
<?php } ?>                </div>
                
                  <table align="center">
	<thead>
		<tr>
			<td>photo</td>
			<td>name</td>	
                  <td>Vote</td>		
		</tr>
	</thead>
       <tbody>
                    <?php
                     if($_POST){
                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        $i=0;
                        while($row=$result1->fetch_assoc()){
                              
                            ?>
                                <tr>
                                <td><img style="float: left" src="../uploads/<?php echo $row['photo']?>" height="80" width="80"></td>
                                  <br>
                                <td><b>Candidate Name : </b><?php echo $row['name']?><br><br>
                               
                                <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $row['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $row['id'] ?>">
                                 <input type="hidden" name = "pos" value="<?php echo $pos ?>">
                                  </td>
                               <td> 
                                <?php
                             
                                if($v==1){
                                    ?>
                                    <button disabled style="padding: 5px; font-size: 15px;float: right; background-color: #27ae60; color: white; border-radius: 5px;" type="button";>Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 5px; font-size: 15px;float: right; background-color: #3498db; color: white; border-radius: 5px;" type="submit";>Vote</button></td>
</tr>
                                    <?php
                                }
                                ?>
                                </form>
                                
                            <?php
                        
                        }
                    }
}
                    else{
                        ?>
                            <div style="border-bottom: 3px solid #bdc3c7; margin-bottom: 9px;">
                                <b> Please select the position!!.</b>    
                            </div>
                        <?php
                    } 
 
                    ?>
              
            </div> 
    </body>
</html>
 
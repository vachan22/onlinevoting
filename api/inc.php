<?php

$connect = mysqli_connect("localhost", "root", "", "online-voting-system");
$result = mysqli_query($connect, "select * from position ");
?>
<form action="dashboard.php" method="POST" enctype="multipart/form-data">
Select Position :
            <select name="pos">
		 <?php
             while($row=$result->fetch_assoc()):;?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php endwhile;?>
                     </select>
  <button id="loginbtn" type="submit" name="registerbtn">Select</button><br><br>
</form>
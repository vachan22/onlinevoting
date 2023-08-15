<?php
    $connect = mysqli_connect("localhost", "root", "", "online-voting-system");

  
   
  
  


   
          $delete = mysqli_query($connect, "DELETE FROM user WHERE  role='2' ");
        $update = mysqli_query($connect, "update user set status='0',votes='0' ");
        $reset=mysqli_query($connect, "DELETE FROM voted  ");
      
		
        if($delete and $update ){
            echo '<script>
                    alert("Reset successfull!");
                    window.location = "../routes/admin.php";
                </script>';
        }
		else
			{
            echo '<script>
                    alert("something went wrong");
                    window.location = "../routes/admin.php";
                </script>';
        }
   
 
    
?>
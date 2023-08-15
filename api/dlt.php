<?php
    $connect = mysqli_connect("localhost", "root", "", "online-voting-system");

   
    
    
	
   foreach($_POST['dlt'] as $reg)
{
   

        $insert = mysqli_query($connect, "DELETE FROM voter WHERE  regno='$reg' ");
		}
        if($insert){
            echo '<script>
                    alert("Removed successfull!");
                    window.location = "../routes/addvoter.php";
                </script>';
        }
		else
			{
            echo '<script>
                    alert("please select the voter");
                    window.location = "../routes/addvoter.php";
                </script>';
        }
    
?>
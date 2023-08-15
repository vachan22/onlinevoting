<?php
    include("connection.php");

    
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
     $reg = $_POST['reg'];
   

    

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
    }
    else{
      
      $update = mysqli_query($connect, "update user set password='$pass' where regno='$reg'");
        if($update){
            echo '<script>
                    alert("Password changed!");
                    window.location = "../";
                </script>';
        }
    
  
else
{
  echo '<script>
                    alert("you have enterd wrong password try again");
                    window.location = "../routes/newpass.php";
                </script>';
  }  
}
?>
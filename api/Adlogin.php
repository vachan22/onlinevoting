<?php
   
    include("connection.php");

    $username = $_POST['username'];
    $pass = $_POST['pass'];
    

    $check = mysqli_query($connect, "select * from admin where username='$username' and password='$pass'  ");



    if(mysqli_num_rows($check)>0){
       
        echo '<script>
                window.location = "../routes/admin.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
    }


    
?>
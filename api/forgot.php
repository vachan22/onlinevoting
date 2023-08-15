<?php
   
    include("connection.php");

    $reg = $_POST['reg'];
    $qtn = $_POST['qtn'];
    $ans = $_POST['ans'];
    
    

    $check = mysqli_query($connect, "select * from question where regno='$reg' and answer='$ans' and qtn='$qtn'  ");



    if(mysqli_num_rows($check)>0){
       
        echo '<script>
                window.location = "../routes/newpass.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
    }


    
?>
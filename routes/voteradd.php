<?php
    $connect = mysqli_connect("localhost", "root", "", "online-voting-system");

    $name = $_POST['name'];
    $reg = $_POST['reg'];
   
        $insert = mysqli_query($connect, "insert into voter (name, regno) values('$name', '$reg') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "addnew.php";
                </script>';
        }
    
?>
<?php
    include("connection.php");

    $name = $_POST['name'];
    $reg = $_POST['reg'];
    $pos =$_POST['pos'];
    
   
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = 2;

   
    
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "insert into user (name, regno, password, address, photo, status, votes, role,position) values('$name', '$reg', '$pass', '$add', '$image', 0, 0, '$role','$pos') ");
        if($insert){
            echo '<script>
                    alert("Candidate Added!");
                    window.location = "../routes/candidate.php";
                </script>';
        }
    
    
?>
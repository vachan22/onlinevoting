<?php
    include("connection.php");

    $name = $_POST['name'];
    $reg = $_POST['reg'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $ans = $_POST['ans'];
    $qtn = $_POST['qtn'];
    $role = 1; 
    

     $check = mysqli_query($connect, "select * from voter where regno='$reg' and name='$name' ");
     if(mysqli_num_rows($check)>0)
     {

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "insert into user (name, regno, password, address, photo, status, votes, role) values('$name', '$reg', '$pass', '$add', '$image', 0, 0, '$role') ");
        $insert1 = mysqli_query($connect, "insert into question ( regno,answer,qtn) values( '$reg', '$ans', '$qtn') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
  }
else
{
  echo '<script>
                    alert("Name Or Register Number is Wrong!");
                    window.location = "../";
                </script>';
  }  
?>
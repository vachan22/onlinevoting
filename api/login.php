<?php
    session_start();
    include("connection.php");

    $reg = $_POST['reg'];
    $pass = $_POST['pass'];
    $role = 1;

    $check = mysqli_query($connect, "select * from user where regno='$reg' and password='$pass' and role='$role' ");
if($role==1)
{

    if(mysqli_num_rows($check)>0){
        $getGroups = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
    }
}
else{
      echo '<script>
                window.location = "../routes/admin.php";
            </script>';
}
    
?>
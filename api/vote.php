<?php
    session_start();
    include("connection.php");

    $votes = $_POST['gvotes'];
     $pos = $_POST['pos'];
    $total_votes= $votes+1;
    $gid = $_POST['gid'];
    $uid = $_SESSION['id'];
    echo $votes;
    echo $uid;
    $insert = mysqli_query($connect, "insert into voted (id,position) values('$uid', '$pos') ");
    $update_votes = mysqli_query($connect, "update user set votes='$total_votes' where id='$gid'");
    $update_status = mysqli_query($connect, "update user set status='$pos' where id='$uid'");

    if($update_status and $update_votes){
        $getGroups = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
        $_SESSION['status'] = $pos;
        echo '<script>
                    alert("Voting successfull!");
                    window.location = "../routes/dashboard.php";
                </script>';
    }
    else{
        echo '<script>
                    alert("Voting failed!.. Try again.");
                    window.location = "../routes/dashboard.php";
                </script>';
    }
    
?>
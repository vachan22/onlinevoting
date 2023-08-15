<?php
    include("connection.php");
if(isset($_POST['registerbtn']))
{   
    $name = $_POST['name'];
 $result = mysqli_query($connect, "select * from position where name ='$name' ");
 
if(mysqli_num_rows($result)==0)
{
$insert = mysqli_query($connect, "insert into position (name) values('$name') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../routes/position.php";
                </script>';
}
}
else
{
  echo '<script>
                    alert(" the position is alredy enterd!");
                    window.location = "../routes/position.php";
                </script>';
  } 
}
 if(isset($_POST['registerbtn1']))
{

$pos =$_POST['pos'];

 $dlt = mysqli_query($connect, "DELETE FROM position WHERE  name='$pos' ");

if($dlt){
            echo '<script>
                    alert("deletion successfull!");
                    window.location = "../routes/position.php";
                </script>';
}
else
{
  echo '<script>
                    alert(" Not deleted!!");
                    window.location = "../routes/position.php";
                </script>';
  } 

 
}
?>
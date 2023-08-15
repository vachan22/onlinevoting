<html>
    <head>
<style>
   .div2{
       float:left;
      
       position:absolute;
       bottom:0;
       left:0;
}
.div5{
       float:right;
      
       position:absolute;
       bottom:59%;
       right:0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
body{
 background-image: url('16668.jpg');
}
  </style>  

        <title>Admin Page</title>
        <link rel="stylesheet" href="../css/scss.css">
        <link rel="stylesheet" href="../css/btn.css">
                   
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Admin's page</h1>  
            </div>
            
<ul>
  <li><a class="active" href="logout.php">Logout</a></li>
  <li><a href="addvoter.php">Add voter</a></li>
  <li><a href="candidate.php">Add candidate</a></li>
  <li><a href="../api/reset.php">Reset</a></li>
</ul>
            	               </div>

                <?php
 $connect = mysqli_connect("localhost", "root", "", "online-voting-system");
  $result = mysqli_query($connect, "select * from position ");
?>
<html>
<body>
<div class="div5">
<form name="myform" id="myform" action=" admin.php" method="POST" enctype="multipart/form-data">
            Select Position :
            <select name="pos">
		 <?php
             while($row=$result->fetch_assoc()):;?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php endwhile;?>
                     </select>
<button id="loginbtn" type="submit" name="Submit1">Result</button><br><br>
                    </div><br> 
</form>
<script type="text/javascript">
$('#submit').click(function(){
$('#myform').submit();
});
</script>

</body>                     

</html>

<html>
  <head>

            <div class="div2">
                <p>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Candidiate', 'votes'],
          <?php
           $pos=$_POST['pos'];
          
          $sql="SELECT * FROM user WHERE role=2 AND position='$pos' ";
           $fire= mysqli_query($connect,$sql);
          while($result=mysqli_fetch_assoc($fire))
           {
           echo"['".$result['name']."',".$result['votes']."],";
           }
           ?>
        
        ]);

        var options = {
          title: 'Result',
          width: 600,
          height:350,
          legend: { position: 'absolute' ,float:'left'},
          chart: { title: 'Result',
                   subtitle: 'Votes' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 500px; height: 400px;background-color:transparent;"></div>
  </body>
</html>
            </div>
            </center> 
    </body>
</html>
<?php  

$conn = new mysqli("localhost", "root", "", "lms");

/* check connection */
if ($conn->connect_error) 
{
    die("Connect failed of database!".$conn->connect_error);
    
}

?> 
<!--HTML CODE STARTS-->
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

<?php include ('header1.php');?><br>

<!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
        <link href="../assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="../assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">

            
        <!-- Theme Styles -->
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>

</head>
<body>
   <!-- <main class="mn-inner">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                     <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                            
                                <span class="card-title">Total Employee Present in Company</span>
                                <span class="stats-counter">-->
<?php
$sql = "SELECT id from addemp";
$query = $conn->prepare($sql);
$query->execute();
//$results=$query->fetch_assoc();
//$empcount=$query->rowCount();
?>

                                    <!--<span class="counter"><?php echo htmlentities($empcount);?></span></span>-->
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
    <div class="col-md-12">

      <br><br>

      <?php 
      $query="SELECT *FROM apply";
      $stmt=$conn->prepare($query);
      $stmt->execute();
      $result=$stmt->get_result();
      ?>

      <h3 class="text-center text-info">Leaves Details</h3>

      <table class="table table-hover">
    <thead>
      <tr>
        <!-- <th>#</th> -->
        <th>EmpName</th>
        <th>LeaveType</th>
        <th>FromDate</th>
        <th>ToDate</th>
        <th>Description</th>
        <!--<th>Action</th>-->

      </tr>
    </thead>
    <tbody>
      <?php
        while ($row=$result->fetch_assoc()){ ?>

      <tr>
        <!-- <td><?= $row['id']; ?></td> -->
        <td><?= $row['name']; ?></td>
        <td><?= $row['leavetype']; ?></td>     
        <td><?= $row['from']; ?></td>
        <td><?= $row['to']; ?></td>
        <td><?= $row['desp']; ?></td>
        
        <!--<td>
          <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-success p-2">Accept</a>|
          <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do You Wanna Reject leave?')">Reject</a>
          <a href="manage.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>

        </td>-->

      </tr>
      <?php }?>
    </tbody>
  </table>
    </div>
    </div>

</body>
</html>
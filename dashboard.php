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

    <!--Count the empcount()-->
    
                            
                              
<?php
$query="SELECT COUNT(*) as 'Employee' FROM addemp";

    $stmt=$conn->query($query);
    $num=0;
    if($stmt->num_rows>0)
    {
      //$stmt->execute();
      //$result=$stmt->get_result();
      $row=$stmt->fetch_assoc();
      $num=$row["Employee"];
      //$stmt->close();
  }
  else
  {
    $num=0;
  }
?>

<!--Leaves details count()-->

<?php
$query="SELECT COUNT(*) as 'leaves' FROM apply";

    $stmt=$conn->query($query);
    $num1=0;
    if($stmt->num_rows>0)
    {
      //$stmt->execute();
      //$result=$stmt->get_result();
      $row=$stmt->fetch_assoc();
      $num1=$row["leaves"];
      //$stmt->close();
  }
  else
  {
    $num=0;
  }
?>




<div class="container-fluid">
  
  <div class="row">
  <div class="col" style="background-color:white;">
 
  <div class="card" style="width:400px">
    <img class="card-img-top" src="dashemp1.png" alt="Card image" style="width:50%">
    <div class="card-body">
      <h4 class="card-title">Total Employees:</h4>
      <p class="card-text"><span class="counter"><?php print $num; ?></span></p>
      
    </div>
  </div>
</div>
  <div class="col" style="background-color:white;">
  
 
  <div class="card" style="width:400px">
    <img class="card-img-top" src="leavework.png" alt="Card image" style="width:32%">
    <div class="card-body">
      <h4 class="card-title">Total Leaves:</h4>
      <p class="card-text"><span class="counter"><?php print $num1; ?></span></p>
      </div>
    </div>
  </div>

<div class="col" style="background-color:white;">
  
 
  <div class="card" style="width:400px">
    <img class="card-img-top" src="dashemp1.png" alt="Card image" style="width:34%">
    <div class="card-body">
      <h4 class="card-title">Total Leaves Types:</h4>
      <p class="card-text"><span class="counter">Maternity | Restricted Holidays | <br>Sick | Casual | Marrige</span></p>
       <p class="card-text"><span class="counter"></span></p>
      
      </div>
    </div>
  </div>


</div><div>
                                
                            
            

    <div class="col-md-20">

      <?php 
      $query="SELECT *FROM apply";
      $stmt=$conn->prepare($query);
      $stmt->execute();
      $result=$stmt->get_result();
      
      ?>

      <h3 class="text-center text-info">-----Leaves Details-----</h3>

      <table class="table table-hover">
    <thead>
      <tr>
        <!-- <th>#</th> -->
        <th>EmpName</th>
        <th>LeaveType</th>
        <th>FromDate</th>
        <th>ToDate</th>
        <th>Description</th>
        <th>Action</th>

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
        
        <td>
          <a href="myprofile1.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2"><i class="fas fa-eye"></i>Profile</a>
          <!--<a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do You Wanna Reject leave?')">Reject</a>
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
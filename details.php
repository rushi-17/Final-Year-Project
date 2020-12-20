
<?php 

include 'action.php';

?>


<!DOCTYPE html>
<html>
<head>
      <title>manage</title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="Home2.php">Admin</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="leavestatus.php">Leaves Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manage.php">Manage Employee</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About</a>
      </li> 
    </ul>
  </div> 
  
  <!--   search button 
  <form class="form-inline" action="#">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>-->
</nav>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mt-3 bg-info p-4 rounded">
      <h2 class="bg-light p-2 rounded text-center text-dark ">ID : <?= $vid; ?></h2>

      <div class="text-center">
        <img src="<?= $vphoto; ?>" width="300" class="img-thumbnail">
      </div>
      <h4 class="text-light">Name :<?= $vname; ?></h4>

      <h4 class="text-light">Address :<?= $vaddress; ?></h4>
      <h4 class="text-light">Email :<?= $vemail; ?></h4>
      <h4 class="text-light">Mobile :<?= $vmno; ?></h4>
      
    </div>
    
  </div>
</div>
</body>
</html>
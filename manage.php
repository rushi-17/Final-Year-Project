 <?php include ('action.php'); ?>

<!DOCTYPE html>
<html>
<head>
      <title>manage</title>
      <!-- Nav Bar and minified CSS -->
      <?php include('header1.php');?>
</head>
<body>
<div class="container-fluid" align="center">
  <div class="row">
    <div class="col-md-10">
      <h3 class="text-center text-dark mt-3">Manage Employee's</h3>
      <hr>
     
        <?php if(isset($_SESSION['response'])){ ?>

      <div class="alert alert-<?=$_SESSION['res_type']; ?>
       alert-dismissible text-center">
      <button type="button" class="close" data-dismiss="alert">&times;
      </button>

       <b><?=$_SESSION['response'];?></b>

      </div>
    <?php } unset($_SESSION['response']); ?>
    </div>  
  </div>

    <div class="row">
     <div class="col-md-4">
      <h3 class="text-center text-info">Add Employee</h3>

      <form action="action.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $id; ?>">

        <div class="form-group">
          <input type="text" name="name" value="<?= $name; ?>" class="form-control"  placeholder="Enter FullName" required >
        </div>

        <div class="form-group">
          <input type="email" name="email" value="<?= $email; ?>" class="form-control" placeholder="Enter E-mail" required>
        </div>

        <div class="form-group">
          <textarea name="address" value="<?= $address; ?>" rows="3" cols="56" placeholder="Enter your address....." required><?= $address; ?></textarea>
        </div>

        <div class="form-group">
          <input type="tel" name="mno" value="<?= $mno; ?>" class="form-control" placeholder="Enter Mobile No." required>
        </div>

        <div class="form-group">
          <input type="hidden" name="oldphoto" value="<?= $photo; ?> ">

          <input type="file" name="photo" class="custom-file">

          <!--<p>* Note that image size should be less than 50kb </p>-->

          <img src="<?= $photo; ?>" width="120" class="img-thumbnail">

        </div>

        <div class="form-group">
          <?php if($update==true){ ?>

            <input type="submit" name="update" class="btn btn-success btn-block" value="UPDATE INFO">
          
          <?php }else { ?>

          <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Employee">

        <?php } ?>
        
        </div>

      </form>
    </div>
  </div>

  </div>
    <div class="col-md-20">

      <?php 
      $query="SELECT *FROM addemp";
      $stmt=$conn->prepare($query);
      $stmt->execute();
      $result=$stmt->get_result();
      ?>

      <h3 class="text-center text-info">Employee Present in Company</h3>

      <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
       
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while ($row=$result->fetch_assoc()){ ?>

      <tr>
        <td><?= $row['id']; ?></td>
        <td><img src="<?= $row['photo']; ?>" width="25"></td>
        <td><?= $row['name']; ?></td>
        
        <td><?= $row['email']; ?></td>
        <td><?= $row['address']; ?></td>
        <td><?= $row['mno']; ?></td>
        <td>
          <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2"> <i class="fas fa-eye"></i>Profile</a>|
          <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do You Wanna Delete this record')"> <i class="fas fa-trash-alt">Delete</i></a>|
          <a href="manage.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2"> <i class="fas fa-edit"></i>Edit</a>

        </td>
      </tr>
      <?php }?>
    </tbody>
  </table>
    </div>
    </div>
  </div>
</div>

</body>
</html>
<?php
session_start();

include 'config.php';

$update=false;
	$id="";
	$name="";
	
	$email="";
	$address="";
	$mno="";
	$photo="";

/*-----Insert record into database------*/

if(isset($_POST['add']))
{
	$name=$_POST['name'];
	
	
	$email=$_POST['email'];
	$address=$_POST['address'];
	$mno=$_POST['mno'];
	$photo=$_FILES['photo']['name'];

	$upload="uploads/".$photo;

	$query="INSERT INTO addemp(name,email,address,mno,photo)VALUES(?,?,?,?,?)";
	
	$stmt=$conn->prepare($query);
	$stmt->bind_param("sssss",$name,$email,$address,$mno,$upload);
	$stmt->execute();
	move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	
	header('location:manage.php');
	
	$_SESSION['response']="Record Stored Successfully!";
	$_SESSION['res_type']="Success";

}
	
	/*--------------Delete record from database--------------------*/

if(isset($_GET['delete']))
{
	$id=$_GET['delete']; 

	$sql="SELECT photo FROM addemp WHERE id=?";
	$stmt2=$conn->prepare($sql);
	$stmt2->bind_param("i",$id);
	$stmt2->execute();
	$result2=$stmt2->get_result();
	$row=$result2->fetch_assoc();

	$imagepath=$row['photo'];

	$query="DELETE FROM addemp WHERE id=?";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("i",$id);
	$stmt->execute();

	header('location:manage.php');
	
	$_SESSION['response']="Delete Successfully!";
	$_SESSION['res_type']="danger";
}

/*Update record into database*/
if (isset($_GET['edit'])){

	$id=$_GET['edit'];

	$query="SELECT *FROM addemp WHERE id=?";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("i",$id);
	$stmt->execute();
	$result=$stmt->get_result();
	$row=$result->fetch_assoc();

	$id=$row['id'];
	$name=$row['name'];
	
	$address=$row['address'];
	$email=$row['email'];
	$mno=$row['mno'];
	$photo=$row['photo'];

	$update=true;
}
	if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	
	
	$address=$_POST['address'];
	$email=$_POST['email'];
	$mno=$_POST['mno'];	
	$oldphoto=$_POST['oldphoto'];

	if(isset($_FILES['photo']['name'])&&($_FILES['photo']['name']!="")){
		$newphoto="uploads/".$_FILES['photo']['name'];
		unlink($oldphoto);
		move_uploaded_file($_FILES['photo']['tmp_name'], $newphoto);
	 }
	 else{
	 	$newphoto=$oldphoto;
	 }
	 $query="UPDATE addemp SET name=?,address=?,email=?,mno=?,photo=? WHERE id=?";
	 $stmt=$conn->prepare($query);
	 $stmt->bind_param("sssssi",$name,$address,$email,$mno,$newphoto,$id);
	 $stmt->execute();


	$_SESSION['response']="Updated Successfully!";
	$_SESSION['res_type']="primary";
	header('location:manage.php');

}

/* View the details of employee*/

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT *FROM addemp WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vname=$row['name'];

		
		$vaddress=$row['address'];
		$vemail=$row['email'];
		$vmno=$row['mno'];
		$vphoto=$row['photo'];
	}



						/*-------------------useless data--------------------*/
/*$name=$_POST["name"];

$email=$_POST["email"];


$mno=$_POST["mno"];

$photo=$_POST["photo"];

$dbname="lms";
$con=mysqli_connect("localhost","root","",$dbname);

//mysqli_query("use lms");
//$query="insert into addemp(fname,lname,email,password,gender,dob,department,address,city,country,mno)values('".$fname."','".$lname."','".$email."','".$password."','".$gender."','".$dob."','".$department."','".$address."','".$city."','".$country."','".$mno."')";
$query="insert into `addemp`(`name`,`email`,`mno`,`photo`)values('$name','$email','$mno',`$photo`)";
mysqli_query($con,$query);

echo "Data Stored Successfully!";*/
?>
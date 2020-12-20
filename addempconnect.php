<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$department=$_POST["department"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$mno=$_POST["mno"];

$dbname="lms";
$con=mysqli_connect("localhost","root","",$dbname);

//mysqli_query("use lms");
//$query="insert into addemp(fname,lname,email,password,gender,dob,department,address,city,country,mno)values('".$fname."','".$lname."','".$email."','".$password."','".$gender."','".$dob."','".$department."','".$address."','".$city."','".$country."','".$mno."')";
$query="insert into `addemp`(`fname`,`lname`,`email`,`password`,`gender`,`dob`,`department`,`address`,`city`,`state`,`mno`)values('$fname','$lname','$email','$password','$gender','$dob','$department','$address','$city','$state','$mno')";
mysqli_query($con,$query);

echo "Record Stored Successfully";
?>
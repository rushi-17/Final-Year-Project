<?php
$dbname="lms";
$con=mysqli_connect("localhost","root","",$dbname);

$current=$_POST["current"];
$new=$_POST["new"];
$confirm=$_POST["confirm"];


//mysqli_query("use lms")
//$query="insert into apply(fname,id,address,mno,dob,city,state,emailid,password,gender,dept)values('".$fname."','".$id."','".$address."','".$mno."','".$dob."','".$city."','".//$state."','".$emailid."','".$password."','".$geder."','".$dept."')";
$query="insert into changepassword (`current`,`new`,`confirm`)values('$current','$new','$confirm')";
mysqli_query($con,$query) or die(mysqli_error($con));
//print "$query";
echo "Dear User your Password Changed Successfully";
?>
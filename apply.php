<?php
$dbname="lms";
$con=mysqli_connect("localhost","root","",$dbname);
$name=$_POST["name"];
$leavetype=$_POST["leavetype"];
$from=$_POST["from"];
$to=$_POST["to"];

$desp=$_POST["desp"];


//mysqli_query("use lms")
//$query="insert into apply(fname,id,address,mno,dob,city,state,emailid,password,gender,dept)values('".$fname."','".$id."','".$address."','".$mno."','".$dob."','".$city."','".//$state."','".$emailid."','".$password."','".$geder."','".$dept."')";
$query="insert into apply (`name`,`leavetype`,`from`,`to`,`desp`)values('$name','$leavetype','$from','$to','$desp')";
mysqli_query($con,$query) or die(mysqli_error($con));
//print "$query";
echo "Your Leave is Successfully Apply";
header('location:applyleave.php');

?>
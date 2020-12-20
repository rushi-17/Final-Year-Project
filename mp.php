<?php
$dbname="lms";
$con=mysqli_connect("localhost","root","",$dbname);

$fname=$_POST["fname"];
$id=$_POST["id"];
$address=$_POST["address"];
$mno=$_POST["mno"];
$dob=$_POST["dob"];
$city=$_POST["city"];
$state=$_POST["state"];
$emailid=$_POST["emailid"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$dept=$_POST["dept"];


//mysqli_query("use lms");
//$query="insert into mp(fname,id,address,mno,dob,city,state,emailid,password,gender,dept)values('".$fname."','".$id."','".$address."','".$mno."','".$dob."','".$city."','".//$state."','".$emailid."','".$password."','".$geder."','".$dept."')";
$query="insert into mp (`fname`,`id`,`address`,`mno`,`dob`,`city`,`state`,`emailid`,`password`,`gender`,`dept`)values('$fname','$id','$address','$mno','$dob','$city','$state','$emailid','$password','$gender','$dept')";
mysqli_query($con,$query) or die(mysqli_error($con));
//print "$query";
echo "Successfully Employee Added";
?>
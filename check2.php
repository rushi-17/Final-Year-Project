<?php

$user=$_POST["T1"];
$pass=$_POST["T2"];

if ($user=="user"&& $pass=="1234")
{ 
include ("Home3.php");
}
else
{

print "Invalid password<br>please check again";
header('location:index.html');
}

?>


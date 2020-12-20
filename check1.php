<?php
$user1=$_POST["T3"];
$pass1=$_POST["T4"];

if ($user1=="admin"&& $pass1=="12345")
{ 

include ("Home2.php");
}
else
{

print "Invalid password<br>please check again";
header('location:index.html');
}

?>


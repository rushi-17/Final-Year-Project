<?php  

$conn = new mysqli("localhost", "root", "", "lms");

/* check connection */
if ($conn->connect_error) 
{
    die("Connect failed of database!".$conn->connect_error);
    
}


?> 
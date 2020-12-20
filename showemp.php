<?php  

$dbname = 'lms';  
$conn = mysqli_connect("localhost","root","",$dbname);  

if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  

 $sql = 'SELECT * FROM apply';  
$retval=mysqli_query($conn, $sql);  


if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
   echo   "Leave Type : {$row['leavetype']} <br> ".
	"From Date :{$row['from']}  <br> ".
       

	"To Date : {$row['to']} <br> ".  
     	   " Description: {$row['desp']} <br> ".
	 
	
	
	
	
         "--------------------------------<br>";  
 } //end of while  
}else{  
echo "0 results";  
}  

mysqli_close($conn);  
?>  
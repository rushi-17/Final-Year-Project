<html>
<head>
<title>Apply Leave</title>
<?php include('header.php');?>
</head>
<body>


<table align="center" cellspacing="20" cellpadding="20" hight="100" width="1000"  background= "BLG.png" >
<form method="post" name="form" action="apply.php">
<tr><td align="center"><h1>Apply For Leave</h1></td></tr>
<big>
<tr><td> Emp Name &nbsp;:
<input type="text" name="name" hight="4" width="400"></td></tr>


<tr><td> Leave type &nbsp;:&nbsp;&nbsp;
<select name="leavetype" id="Type" hight="4" width="400">

<option>select
<option> Maternity
<option> Restricted Holidays
<option> Sick 
<option> Casual
<option> Marriage

</select><nbps><nbps>
<tr><td>From date &nbsp;:&nbsp;
<input type="date" name="from" hight="4" width="400"></td></tr>
<tr><td>To date &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" name="to" hight="4" width="400"></td></tr>





<tr><td>Description..:<br>
<textarea cols="60" rows="4" name="desp" placeholder="Description">
</textarea><br></tr>
<tr><td><big><center><input  type="submit" name="apply" value="Apply for leave"></center></big>
</td></tr>

</form></table>
</body>
</html>

<html>
<head>
<title>Home</title>
<style type="text/css">
	body{
		margin: 0;
		background: #f2f2f2f;
	}
	.nav{
		margin:0%;
		width: 100%;
		background-color:black;
		height: 80px;
		color:black;
	}
	ul{
		list-style: none;
		padding: 0;
		margin: 0;
		position: absolute;
	}
	ul li{
		float: left;
		margin-top: 20px;
	}
	ul li a{
		width: 150px;
		color: white;
		display: block;
		text-decoration: none;
		font-style: 20px;
		text-align: center;
		padding: 10px;
		border-radius: 10px;
		font-family: Century Gothic;
		font-weight: bold;
	}
	a:hover{
		background: #1a66ff;
	}
ul li ul{
	background: #000033;

}
ul li ul li{
	float: none;
}

ul li ul{
	display: none;
}

ul li:hover ul{
	display: block;

}
</style>
</head>
<body>
<div class="nav">
	<ul>
		<li><a href="about2.php">Home</a></li>
		<li><a href="#">Employee</a>
			<ul>
				<li><a href="myprofile.html">My profile</a></li>
				<li><a href="changepassword1.html">change password</a></li>
				<li><a href="applyleave.php">Apply leave</a></li>
				
			</ul>
				
				<li><a href="about.php">About us</a></li>
		<li><a href="contactusnew.html">Contact us</a></li>
		<li><a href="logout.php">log out</a></li>
</div>
</body>
</html>

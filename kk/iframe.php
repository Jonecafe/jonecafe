<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>JONECCAFE Products </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	<link rel="stylesheet" href="css/w3.css">
	
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><font color="#3366ff">CHOOSE YOUR INTEREST BELOW</font></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>



<div id="cmpp">
<div id="cbt">

<img height="80" width="80" src="img/A6.png" /></div><div id="bb"><a href="cbt.php"><font color="black"><h3>

Laptops</h3></font></a></div>


</div><BR />

<div id="cmpp">
<div id="cbt">

<img height="80" width="80" src="img/a2.jpg" /></div><div id="bb"><a href="cbt.php"><font color="black"><h3>

Computer Accessories</h3></font></a></div>


</div><br />

<div id="cmpp">
<div id="cbt">

<img height="80" width="80" src="img/a3.jpg" /></div><div id="bb"><a href="cbt.php"><font color="black"><h3>

Phones</h3></font></a></div>


</div><br />

<div id="cmpp">
<div id="cbt">

<img height="80" width="80" src="img/a5.jpg" /></div><div id="bb"><a href="cbt.php"><font color="black"><h3>

Phones Accessories</h3></font></a></div>


</div>






<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</center>
</body>
</html>


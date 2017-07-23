<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: index.php");
}
if(isset($_SESSION['usr_photo'])!="") {
	header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		$_SESSION['usr_photo'] = $row['photo'];
		header("Location: index.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link rel="icon" type="image/X-icon" href="img/jj.png" />
	<style type="text/css">
	.navbar{
		position: fixed;
		height: 50px;
		width: 100%;
	}
	</style>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><font color="#3366ff"><b>JONECCAFE</b></font></a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
</nav>






<br />
<br />
<br />
<br />
<br />

<div id="l-nav">

<center><font color="red"><h2>WELCOME</h2></font></center>

<font color="white"><h4>

<center><text id="tt">JONECCAFE is the best and the faster way for your online business. This platform is secured with strong
SSL Certificate. Every transaction made here is encrypted and secured hereby only you can access it





<center><font color="red"><h2>HOW TO START</h2></font></center>
In this platform, for you to start making transaction, You have to login if you are a registered member. Not yet a registered member?
You are welcome. All you have to do is to register in the registration panel.
<p>
<p>
<p>
<p>
<p>
</text>
<img height="200px" id="im" width="243px" src="img/l.jpg"></img>

<br />
<font color="black"><h5>&COPY; <?php echo date ("Y"); ?> Joneccafe Team<sup>(R)</sup>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset id="log">
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Enter Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Enter Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span><br />
			New User? <a href="register.php">Sign Up Here</a>
		</div>
	</div>
	<div class="row">
	</div>
</div>


<br />











<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

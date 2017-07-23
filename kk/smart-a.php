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
	<link rel="icon" type="image/X-icon" href="img/ic.jpg" />
	
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
			<a class="navbar-brand" href="index.php"><font color="#3366ff"><b>JONECCAFE</b></font></a>
			
			
			
			


		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
			<li><form method="post" class="form-wrapper " id="search" action="Service/Search">
                            <input id="search_input" type="text" required="required" class="search" name="searchString" placeholder="Search here"/>
                            <button type="submit" id="btta">Search</button>
                        </form></li>
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
				<li><a href="fb.com/chibscoweb"><img height="30px" width="30px" border-radius="20px" src="img/fb.png"></img></a></li>
				<li><a href="twitter.com/chibscoweb"><img height="30px" width="30px" src="img/twi.png"></img></a></li>
			</ul>
		</div>
	</div>
</nav>






<div id="l-nav">

<center><font color="red"><h2>WELCOME</h2></font></center>

<font color="white"><h5>

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
<style>
.mySlides {display:none;}
</style>
<center>



<div id="all">
<div id="btn">
<p><a href="products.php"><button class="w3-btn w3-xlarge w3-round-xlarge">Products</button></p>
</a></div>



<div id="btn">
<p><a href="dj.php"><button class="w3-btn w3-xlarge w3-round-xlarge">DJ service</button></p>
</a></div>


<div id="btn">
<p><a href="form.php"><button class="w3-btn w3-xlarge w3-round-xlarge">Online forms</button></p>
</a></div>

<div id="btn">
<p><a href="education.php"><button class="w3-btn w3-xlarge w3-round-xlarge">Education</button></p>
</a></div>

<div id="btn">
<p><a href="info.php"><button class="w3-btn w3-xlarge w3-round-xlarge">Information</button></p>
</a></div>

<div id="btn">
<p><a href="service.php"><button class="w3-btn w3-xlarge w3-round-xlarge">Services</button></p>
</a></div>


</div>

<center>
<div class="w3-content w3-section" style="max-width:500px">

<img class="mySlides w3-animate-top" src="img/A1.jpg" style="width:100%" height="300px">
<img class="mySlides w3-animate-bottom" src="img/A2.jpg" style="width:100%" height="300px">
<img class="mySlides w3-animate-top" src="img/A3.jpg" style="width:100%" height="300px">
<img class="mySlides w3-animate-bottom" src="img/A4.jpg" style="width:100%" height="350px">
<img class="mySlides w3-animate-top" src="img/A5.jpg" style="width:100%" height="300px">
<img class="mySlides w3-animate-bottom" src="img/A6.png" style="width:100%" height="300px">
<img class="mySlides w3-animate-top" src="img/A7.png" style="width:100%" height="300px">


</div></center>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}
</script>


<style>
.w3-btn{width:150px;
height: 100px;

}
</style>



<br />
<br />
<br />

<br /><font color="black"><h2><b>QUALITY SMART PHONE ACCESSORIES AVAILABLE.</b></font> <font color="red"><i>10% discount</i></font></h2><br />
<br />


<IMG HEIGHT="70PX" WIDTH="70PX" SRC="IMG/loading.gif" /> <font color="black"><h1>Accessories Loading...</h1></font>

<br />



<br />
<form name="up" method="POST" action="upload.php" enctype="multipart/form-data">
Select image:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload image" name="submit">
</form>





<br />
<br />
<br />
<br />

<div id="footer">
	<div>
		<div>
		<br />
			
			<div>
				&copy; <?php echo date("Y"); ?> Joneccafe Team
			</div>
			
			<div>Developed by Chibscoweb Developers</div>
		</div>
	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</center>
</body>
</html>


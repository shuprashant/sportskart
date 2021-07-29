<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
 <head>
	<meta charset="UTF-8">
	<title>sportkart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
	
	<div id="main">
		<nav>
		<img src="../images/mainlogo.png" class="logo">
		
			<ul class="main-nav" id="check">
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="">REGISTRATION &#9947</a>
					<ul id="drop">
						<li><a href="../indoor.html">Indoor Games</a></li><br>
						<li><a href="../outdoor-me.html">Outdoor Games</a></li>
					</ul>
				</li>
				<li><a href="#">GAME SCHEDULE</a></li>
				<li><a href="../msg.html">CONTACT</a></li>
				<li><a href="login.php">LOGIN/SIGNUP</a></li>
			</ul>
			<a href="index.php?logout='1'" style="color: red;">logout</a>
			<a href="#" class="mob" onclick="slideshow()"><i class="fa fa-bars"></i> </a>
		</nav>
		<div class="main-content">
			<p><?php  if (isset($_SESSION['username'])) : ?>
			<h1>Welcome <strong><?php echo $_SESSION['username']; ?></strong>
    	 </p>
    <?php endif ?> to <span style="color:red;">Sports<i>kart</i></span>.<br>A registration website..!!</h1>
			<button onclick="show()" class="btn">Register Here..&#9755</button>
		</div>
	</div>
	<script type="text/javascript">
		function slideshow(){
			var x= document.getElementById('check');
			if(x.style.display === "none"){
				x.style.display= "block";
			}
			else{
				x.style.display="none";
			}
		}
		function show(){
			var y= document.getElementById("drop")
			if(y.style.display === "none"){
				y.style.display = "block";
			}
			else{
				y.style.display = "none";
			}
		}
	</script>
 </body>
 </html>
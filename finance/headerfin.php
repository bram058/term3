<?php  
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylefin.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="indexfin.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
					 	echo '<form action="includes/logoutfin.inc.php" method="POST">
				 			<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo '<form action="includes/loginfin.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/E-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signupfin.php">Signup</a>';
					}
			 ?>
			</div>
		</div>
	</nav>
</header>
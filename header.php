<?php
		// Root stuff
		 global $ROOT;
		 session_start();
?>
			<!DOCTYPE html>
			<html lang="en">
			
				<head>
					<meta charset="utf-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
					<meta name="description" content="3rd Semester Web Tech Project" />
					
					<title> | <?php echo $title; ?></title>
					<!-- Oswald font from Google Web Fonts -->
					<link href="https://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css">
					<!-- PT Sans font from Google Web Fonts -->
					<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">
					<!-- Material Icons -->
					<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
					<!-- Font Awesome Fonts -->
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
					<!-- Custom Page CSS -->
					 <link rel="stylesheet" href="<?php echo $page; ?>.css">
				<link rel="stylesheet" href="<?php echo $ROOT; ?>templates/header.css" type = "text/css">
				<!--<link rel="stylesheet" href="home.css" type = "text/css">-->
				<link rel="stylesheet" href="<?php echo $ROOT; ?>templates/footer.css" type = "text/css">
				</head>

				<body>
					<!-- Header Section Start -->
					<header>
						<nav>
							<div class="boxeffect">
								<a href="index.php" class="logo">
									<span id="nav-text-long">Internet Gadget Database</span>
								</a>
								<ul class="right">
									<li class="nav-home"><a href="index.php">Home</a></li>
									<li class="nav-about"><a href="about.php">About</a></li>
									<li class="nav-portal"><a href="login.php">User Login</a></li>
									<li class="nav-register"><a href="register.php">Register Now!</a></li> 								
								</ul>
							</div>
						</nav>
					</header>
					<!-- Header Section End -->

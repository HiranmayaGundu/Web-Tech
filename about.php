<?php
		$page = "home";
		$title="About";
		$ROOT = "./";
		require("./functions.php");

		// Render header
		render('header.php', [ 'page'=>$page, 'title'=>$title ]);
?>

		<!-- Main Section Start -->
		<main>
			<!-- IMAGE SLIDER OF RECENT HEADLINES HERE -->
			<div id="main-bg">
				<div class= "container">
				<!-- Building Site Message -->
				<div class="myCard boxeffect" >
					<div class="myCard-title">About</div>
					<div class="myCard-content">Hello! We at team IGDB are trying to bulid the most comprehensive online Gadget Database! We started
					website as a Mini Project for the Web Technology - 1 course at PES University. The team consists of three members, Harshitha TP, Harshith R A
					and Hiranmaya Gundu. We hope you like our webiste!<br><br>
					<span style="color: #d69d36;">Yours Faithfully</span><br>
					<span style="color: #0078d7; font-size: 1.2rem; font-weight: 600;">Team IGDB</span>
					</div>
				</div>
				</div>
			</div>
			
		</main>
		<!-- Main Section End -->

<?php
	// Render footer
	render("footer.php", [ 'page'=>$page ]);
?>
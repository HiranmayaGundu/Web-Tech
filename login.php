<?php
		$page = "login";
		$title="Login";
		$ROOT = "./";
		require("./functions.php");

		// Render header
		render('header.php', [ 'page'=>$page, 'title'=>$title ]);
?>
<style>
body{
	background-color: black;
	
}
</style>
	<main>
		<div id="login">
			<form action="login_process.php" method = "POST">
	
				<h1><strong>Login</strong></h1>
				<input id=mk type="image" src="./images/login.png" alt="img">
				<p><input type="text" name = "Username"  placeholder = "Username" ></p>
				<p><input type="password" name = "Password" placeholder = "Password" ></p>
				<p><input type="submit" value="Login"></p>
			</form>	
		</div>
	</main>

	</body>
</html>

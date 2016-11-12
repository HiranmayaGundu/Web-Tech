<?php
		$page = "login";
		$title="Register";
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

	<div id="register">
		<form id = "reg" action="register_process.php" method = "POST">
	
		<h1><strong>Register</strong></h1>
		<input id=mk type="image" src="./images/login.png" alt="img" style="	position: fixed; left: 27%; top: 43%;">
		<p><input type="text" name = "Username" placeholder="Username"></p>
		<p><input type="text" name = "Email" placeholder="E-Mail ID"></p>
		<p><input id = "pass1" type="password" placeholder="Password"></p>
		<p><input id = "pass2" type="password" name = "Password" placeholder="Confirm Password"></p>
		
	
		<p><input type="submit" value="Register" style="top-margin:30px;" ></p>
		
		</form>
		
	</div> 
</main>
<script>
var form = getElementById("reg");
form.onsubmit = check;
function check() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
    }
    return ok;
}
</script>

</body>
</html>

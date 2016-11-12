<?php
	require("./functions.php");
	extract($_POST); // Get all variables ino local scope 
// Add slashes to text fields. Just in case. If the use single quotes and stuff, it will mess with the Query.
// It'll look bad, but serves them right.
$Email = addslashes($Email);
$conn = connectToDB();

$query = "INSERT INTO users(`Username`, `Email`,`Password`) VALUES('$Username','$Email','$Password')";
if(!mysqli_query($conn, $query)) {
	// Email address already registered
	// TODO: ERROR 4
	apologize('Error 4: That email address is already registered. Try resetting your password.<br>'.$query);
}
else{
	echo '<script>',
		'alert("You have been registerd!");',
		'</script>'
		;
		header('Location: Login.php');
}



?>
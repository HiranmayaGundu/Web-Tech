<?php
	// Login Process 
	require("./functions.php");
	$conn = connectToDB(); //check the function
	extract($_POST);// get the variables from post to make things easier
	$Username = $_POST['Username'];
	$query = "SELECT * from users where Username = '$Username'";
	$result = mysqli_query($conn,$query);
	$check = 0;
	if(!$result)
	{
		apologize('Error: That Username doesnt exsist.<br>');
		header('Location: login.php');
	}
	else{
		while($row = mysqli_fetch_assoc($result))
		{
			if($check == 1)
				break; // ERROOR WITH THE DB< TWO USERS WITH SAME USERNAME, Username is a Unique Field.
			$check = 1;
			if($Password == $row["Password"])
			{// MOVE on to HOME PAGE, START SESSION,  ADD HI USER on NAV BAR.
				session_start();
				$_SESSION["Username"] = $Username;
				header('Location: index.php'); // redirects to index.php 
						// Use the Following session values to add Hi User. Move to home passing these values.
			}
		else
			header('Location: login.php');
		//MOVE to the wrong password field.
		}
	}
 
	
	
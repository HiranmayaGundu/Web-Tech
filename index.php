<script>
			function addname()
			{
				//var ele = document.createElement("<p>");
				//ele.innerHTML = "Hello" + "<?php echo $_SESSION['Name']?>;
				document.alert("The function has been called!");
				var ele1 = document.getElementById("nav-text-long");
				ele1.innerHTML = "Internet Gadget Database | Hello <?php echo $_SESSION['Username'] ?>";
			}
</script>

<?php
		$page = "home";
		$title="Home";
		$ROOT = "./";
		require("./functions.php");

		// Render header
		render('header.php', [ 'page'=>$page, 'title'=>$title ]);
		$conn = connectToDB(); //check the function
	//extract($_POST);// get the variables from post to make things easier
	 //have to test wih DB 
	$query = "SELECT * from articles ORDER BY time DESC";
	$result = mysqli_query($conn,$query);
	$count = 0;
	while($row = mysqli_fetch_assoc($result))
	{
		$img[$count] = $row["img"];
		$loc[$count] = $row["loc"];
		$name[$count] = $row["name"];
		$hdl[$count] = $row["hdl"];
		$count += 1;
	}
	if(isset($_SESSION["Username"]))
	{
		echo '<script type="text/javascript">';
		echo 'addname();';
		echo '</script>';
	}
?>

		<!-- Main Section Start -->
		<main>
			<!-- IMAGE SLIDER OF RECENT HEADLINES HERE -->
			<div id="art1">
				<div class= "container">
				<!-- Article One -->
				<div class="myCard boxeffect" >
					<div class="myCard-title"><?php echo $name[0]?></div>
					<div class="myCard-content"><img src ="<?php echo $img[0]?>" width = "75px" heigth ="75px"> <?php echo $hdl[0]?> For more info <a href=" <?php echo $loc[0]?>" >click here!</a><br><br>
					</div>
				</div>
				</div>
			</div>
			<div id="art2">
				<div class= "container">
				<!-- Article 2 -->
				<div class="myCard boxeffect" >
					<div class="myCard-title"><?php echo $name[1]?></div>
					<div class="myCard-content"><img src ="<?php echo $img[1]?>" width = "75px" heigth ="75px"><?php echo $hdl[1]?> For more info <a href=" <?php echo $loc[1]?>" >click here!</a><br><br>
					</div>
				</div>
				</div>
			</div>
			<div id="art3">
				<div class= "container">
				<!-- Article 3 -->
				<div class="myCard boxeffect" >
					<div class="myCard-title"><?php echo $name[2]?></div>
					<div class="myCard-content"><img src ="<?php echo $img[2]?>" width = "75px" heigth ="75px"><?php echo $hdl[2]?> To read more <a href=" <?php echo $loc[2]?>" >click here!</a><br><br>
					</div>
				</div>
				</div>
			</div>
			<div id="art4">
				<div class= "container">
				<!-- Article 2 -->
				<div class="myCard boxeffect" >
					<div class="myCard-title"><?php echo $name[3]?></div>
					<div class="myCard-content"><img src ="<?php echo $img[3]?>" width = "75px" heigth ="75px"><?php echo $hdl[3]?> To read more <a href=" <?php echo $loc[3]?>" >click here!</a><br><br>
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
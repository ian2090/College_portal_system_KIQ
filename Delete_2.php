<?php
	include_once 'connect.php';
?>
<html>

	<head>
		<meta charset="utf-8">
		<title>College info portal</title>
		<link rel="stylesheet" href="style_college.css">
	</head>
	
	<body>
		<h2><a class="one" href="Homepage_college.php">College info portal</a></h2>
		
		<div class="topnav">
			  <a href="Homepage_college.php">College details</a>  
			  <a href="Search&Compare.php">Search & Compare</a>
			  <a href="Update.php">Update college details</a> 
			  <a href="Insert.php">Insert new college</a> 
			  <a href="Delete.php">Delete a college</a>
			  <a href="Rating.php">Submit a rating</a>
		</div>

<?php

	$name = trim($_POST['name']);
	
	$query = "DELETE FROM colleges WHERE name='$name'";
	$result = mysqli_query($dbc, $query);
	
	if(is_numeric($name) || (empty($name))){
		echo "<br>";
		echo "Please re-submit as the name cannot be in numerical fomat nor could it be left blank.";
	}
	else if(!empty($name) && ($result)){
		echo "<br>";
		echo "College detail deleted";
	}
	else{
		echo "<br>";
		echo "Deletion failed";
	}
	mysqli_close($dbc);
	
?>

</body>
</html>
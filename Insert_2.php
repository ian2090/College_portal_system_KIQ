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
	$type = trim($_POST['type']);
	$location = trim($_POST['location']);
	$year=trim($_POST['year']);
	$fee=trim($_POST['fee']);
	$overview=trim($_POST['overview']);

	$query = "INSERT INTO colleges (id, name, type, location, established_year, fee, overview) VALUES (0, '$name', '$type', '$location', '$year', '$fee', '$overview')";
	$result = mysqli_query($dbc, $query);
	
	if(empty($name) || (empty($type)) || (empty($location)) || (empty($year)) || (empty($fee)) || (empty($overview))){
		echo "<br>";
		echo "Please submit again and not leave any fields blank.";
	}
	else if(is_numeric($name) || (is_numeric($type)) || (is_numeric($location)) || (!(is_numeric($year))) || (!(is_numeric($fee))) || (is_numeric($overview))){
		echo "<br>";
		echo "Please re-submit the form as some of the field's format are to be in text not in number format.";
	}
	else if($result){
		echo "<br>";
		echo "New college info is inserted to the database.";
	}
	else{
		echo "<br>";
		echo"Data insertion failed";
	}
	mysqli_close($dbc);
?>

</body>
</html>

	
	
	
	
	
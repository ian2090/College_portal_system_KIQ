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

	$name=trim($_POST['name']);
	$rating=trim($_POST['rating']);
	
	$query = "UPDATE colleges SET rating='$rating' WHERE name='$name'";
	$result = mysqli_query($dbc, $query);
		
	if (($rating <1) || ($rating >5)){
		echo "<br>";
		echo "Please submit again as rating points must not be lesser than 1 or exceed 5.";
	}
	else if(empty($name) || (is_numeric($name))){
		echo "<br>";
		echo "Name of college must be alphabetical";
	}
	else if(!empty($name) && (is_numeric($rating)) && ($rating >=1) && ($rating <=5)){
		
		if($result){
				echo "<br>";
				echo "Rating has been submitted successfully";
		}
		else{
			echo "<br>";
			echo "Rating submission failed";
		}
	}
	else{
		echo "<br>";
		echo "Unexpected error";
	}
	mysqli_close($dbc);	

?>
</body>
</html>
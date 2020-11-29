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
			  <a href="Update.php">Update college info</a>
			  <a href="Insert.php">Insert new college</a> 
			  <a href="Delete.php">Delete a college</a>
			  <a href="Rating.php">Submit a rating</a>
		</div>
<?php
	
	$name = trim($_POST['name']);
	$type = trim($_POST['type']);
	$location = trim($_POST['location']);
	$name2 = trim($_POST['name2']);
	$type2 = trim($_POST['type2']);
	$location2 = trim($_POST['location2']);
		
		$queryName = "SELECT * FROM colleges WHERE name = '$name'";
		$queryName2 = "SELECT * FROM colleges WHERE name = '$name2'";
		$queryType = "SELECT * FROM colleges WHERE type = '$type'";
		$queryType2 = "SELECT * FROM colleges WHERE type = '$type2'";
		$queryLocation = "SELECT * FROM colleges WHERE location = '$location'";
		$queryLocation2 = "SELECT * FROM colleges WHERE location = '$location2'";
	
		
		$resultName = mysqli_query($dbc, $queryName);
		$resultName2 = mysqli_query($dbc, $queryName2);
		$resultType = mysqli_query($dbc, $queryType);
		$resultType2 = mysqli_query($dbc, $queryType2);
		$resultLocation = mysqli_query($dbc, $queryLocation);
		$resultLocation2 = mysqli_query($dbc, $queryLocation2);
		
		if(!empty($name) || (!empty($name2))){
				while($rowName = mysqli_fetch_assoc($resultName)){
					echo "ID: {$rowName['id']} <br>
						  Name: {$rowName ['name']} <br>
						  Type: {$rowName['type']}<br>
						  Location: {$rowName['location']} <br>
						  Established year: {$rowName['established_year']} <br>
						  Fee: RM{$rowName['fee']} <br>
						  Overview: {$rowName['overview']} <br>
						  Rating: {$rowName['rating']} <br><hr>";
				}
								while($rowName2 = mysqli_fetch_assoc($resultName2)){
									echo "ID: {$rowName2['id']} <br>
										  Name: {$rowName2['name']} <br>
										  Type: {$rowName2['type']}<br>
										  Location: {$rowName2['location']} <br>
										  Established year: {$rowName2['established_year']} <br>
										  Fee: RM{$rowName2['fee']} <br>
										  Overview: {$rowName2['overview']} <br>
										  Fee: RM{$rowName2['rating']} <br>
										  Rating: {$rowName2['rating']} <br><hr>";
						  
				}
			
		}
		else if(!empty($type) || (!empty($type2))){
				while($rowType = mysqli_fetch_assoc($resultType)){
					echo "ID: {$rowType['id']} <br>
						  Name: {$rowType['name']} <br>
						  Type: {$rowType['type']}<br>
						  Location: {$rowType['location']} <br>
						  Established year: {$rowType['established_year']} <br>
						  Fee: RM{$rowType['fee']} <br>
						  Overview: {$rowType['overview']} <br>
						  Rating: {$rowType['rating']} <br><hr>";
				}
								while($rowType2 = mysqli_fetch_assoc($resultType2)){
									echo "ID: {$rowType2['id']} <br>
										  Name: {$rowType2['name']} <br>
										  Type: {$rowType2['type']}<br>
										  Location: {$rowType2['location']} <br>
										  Established year: {$rowType2['established_year']} <br>
										  Fee: RM{$rowType2['fee']} <br>
										  Overview: {$rowType2['overview']} <br>
										  Rating: {$rowType2['rating']} <br><hr>";
						  
				}
			
		}
		else if(!empty($location) || (!empty($location2))){
		
				while($rowLocation = mysqli_fetch_assoc($resultLocation)){
					echo "ID: {$rowLocation['id']} <br>
						  Name: {$rowLocation['name']} <br>
						  Type: {$rowLocation['type']}<br>
						  Location: {$rowLocation['location']} <br>
						  Established year: {$rowLocation['established_year']} <br>
						  Fee: RM{$rowLocation['fee']} <br>
						  Overview: {$rowLocation['overview']} <br>
						  Rating: {$rowLocation['rating']}<br><hr>";
				}
								while($rowLocation2 = mysqli_fetch_assoc($resultLocation2)){
									echo "ID: {$rowLocation2['id']} <br>
										  Name: {$rowLocation2['name']} <br>
										  Type: {$rowLocation2['type']}<br>
										  Location: {$rowLocation2['location']} <br>
										  Established year: {$rowLocation2['established_year']} <br>
										  Fee: RM{$rowLocation2['fee']} <br>
										  Overview: {$rowLocation2['overview']} <br>
										  Type: {$rowLocation2['rating']}<br><hr>";
						  
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
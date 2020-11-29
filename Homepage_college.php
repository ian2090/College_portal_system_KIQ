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
		<h2><a href="Homepage_college.php">College info portal</a></h2>
		
		<div class="topnav">
			  <a href="Homepage_college.php">College details</a>  
			  <a href="Search&Compare.php">Search & Compare</a>
			  <a href="Update.php">Update college details</a>
			  <a href="Insert.php">Insert new college</a> 
			  <a href="Delete.php">Delete a college</a>
			  <a href="Rating.php">Submit a rating</a>
		</div>
		
		<?php
		
		$query = "SELECT * FROM colleges";
		$result = mysqli_query($dbc, $query);
		$resultCheck = mysqli_num_rows($result);//validation
		
		if($resultCheck >0){
			while($row = mysqli_fetch_assoc($result)){
				echo "ID: {$row ['id']} <br>
					  Name: {$row ['name']} <br>
					  Institute Type: {$row ['type']}<br>
					  Location(State): {$row ['location']} <br>
					  Established Year: {$row ['established_year']} <br>
					  Fee: RM{$row ['fee']} <br>
					  Overview: {$row ['overview']} <br>
					  Rating: {$row ['rating']} / 5 <br><hr>";
					  
			}
		}
		mysqli_close($dbc);
		?>
</body>
</html>
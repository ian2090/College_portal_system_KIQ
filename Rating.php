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

		
<form action = "Rating_2.php" method = "post">
	<h3>Name of college to rate: <input type="text" name="name" size="40" maxsize="100"></h3>
	<p>Submit your rating : <input type="number" name="rating"> /5 </p>
	
	<input type="submit" name="submit" value="submit">

</form>
</body>
</html>
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



<form action="search&Compare2.php" method="post">
		<h3>Search and compare colleges by:</h3>
		<p>Name of college 1: <input type="text" name="name" size="40" maxsize="100"> &nbsp &nbsp Name of college 2: <input type="text" name="name2" size="40" maxsize="100"> </p>
		<p>Institute Type of college 1: <input type="text" name="type" size="40" maxsize="100"/> &nbsp &nbsp Institute Type of college 2: <input type="text" name="type2" size="40" maxsize="100"></p>
		<p>Location(State) of college 1: <input type="text" name="location" size="40" maxsize="100" /> &nbsp &nbsp Location(State) of college 2: <input type="text" name="location2" size="40" maxsize="100" /></p>
		
		<input type="submit" name="submit" value="Compare" >
</form>
</body>
</html>
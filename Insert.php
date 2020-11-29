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



<form action="Insert_2.php" method="post">
		<h3>Insert a new colleges info:</h3>
		<p>New College Name: <input type="text" name="name" size="40" maxsize="100"></p>
		<p>New Institute Type: <input type="text" name="type" size="40" maxsize="100"></p>
		<p>New Location(State): <input type="text" name="location" size="40" maxsize="100"></p>
		<p>New Established Year: <input type="number" name="year" size="40" maxsize="100"></p>
		<p>New Fee(RM): <input type="number" name="fee" size="40" maxsize="100"></p>
		<p>New Overview: <br><textarea name="overview" rows="6" cols="40"></textarea></p>
			
		<input type="submit" name="submit" value="Insert" >
</form>
</body>
</html>
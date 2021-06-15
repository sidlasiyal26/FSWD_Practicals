<?php
include ('config.php');
?>

<?php
	if(isset($_POST['submit'])){
		if(!(empty($_POST['bookName']) || empty($_POST['authorName']) || !isset($_POST['isbnNumber']) 
			|| !isset($_POST['publisherName']) || !isset($_POST['publicationYear']) || !isset($_POST['noOfPages']) || !isset($_POST['bookType']))){
			$bookName = $_POST['bookName'];
			$authorName = $_POST['authorName'];
			$isbnNumber = $_POST['isbnNumber'];
			$publisherName = $_POST['publisherName'];
			$publicationYear = $_POST['publicationYear'];
			$noOfPages = $_POST['noOfPages'];
			$bookType = $_POST['bookType'];

			$sql = "INSERT INTO `BookDetails` (`BookId`, `bookName`, `authorName`, `isbn`, `publisherName`, `publicationYear`, `noOfPages`, `bookType) VALUES 
			(NULL, '$isbnNumber', '$bookName', '$authorName', '$isbnNumber','$publisherName', '$publicationYear', '$noOfPages', '$bookType');";
			mysqli_query($conn, $sql);
		}
		else
			echo "Please fill in all the values before submitting";	

	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FORM</title>
	</head>
	<body>
		<form method="POST" action="store.php">
			Book Name: <input type="text" name="bookName" required><br><br>
			Author Name: <input type="text" name="authorName" required><br><br>
			Isbn Number: <input type="text" name="isbnNumber" required><br><br>
			Publisher Name: <input type="text" name="publisherName" required><br><br>
			
			Publication Year: <select name="publicationYear">
				<option value="" disabled selected hidden>Choose Year</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>	
				<option value="2021">2021</option>
			</select><br><br>
			No. of Pages: <input type="number" name="noOfPages" min="200" max="400" required><br><br>
			Book Type:<br> Action <input type="radio" name="gender" value="Action"><br>
				   Adventure <input type="radio" name="gender" value="Adventure"><br>
				   Classics <input type="radio" name="gender" value="Classics"><br>
				   Comic <input type="radio" name="gender" value="Comic"><br>
				   Graphic Novel <input type="radio" name="gender" value="Graphic Novel"><br>
				   Detective <input type="radio" name="gender" value="Detective"><br>
				   Mystery <input type="radio" name="gender" value="Mystery"><br>
				   Historical Fiction <input type="radio" name="gender" value="Historical Fiction"><br>
				   Horror <input type="radio" name="gender" value="Horror"><br>
				   Literary Fiction <input type="radio" name="gender" value="Literary Fiction"><br><br>
			<input type="submit" name = "submit" value="SUBMIT">
		</form>
	</body>
</html>







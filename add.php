<?php 
require_once 'config.php';

if (isset($_POST['btnsubmit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$contactno = $_POST['contactno'];

	$sql = "INSERT INTO `student`(`firstname`,`lastname`,`address`,`contactno`) VALUES('". $firstname  . "','". $lastname  . "','". $address  . "','". $contactno  . "')";
	$result = $db->query($sql);

	if ($result === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $db->error;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP CRUD BASIC</title>
</head>
<body>
<h2>Add New Student</h2>
<form method="post">
	First Name: <input type="text" name="firstname"><br />
	Last Name: <input type="text" name="lastname"><br />
	Address: <input type="text" name="address"><br />
	Contact No.: <input type="text" name="contactno"><br />
	<input type="submit" value="Save" name="btnsubmit"> &nbsp;&nbsp;&nbsp;
	<a href="index.php">Back to Student List</a>
</form>
</body>
</html>
<?php 
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP CRUD BASIC</title>
</head>
<body>
<?php

$content = "<a href='add.php'>Add New Student</a><br /><br />";
$query = "SELECT * FROM `student` ORDER BY `lastname`";
$result = $db->query($query);
if ($result->num_rows > 0) {
	$content .= "<table border='1' width='600px'>";
	$content .= "<tr><th>Last Name</th><th>First Name</th><th>Address</th><th>Contact No.</th><th>Options</th></tr>";
	while($row = $result->fetch_assoc()) {
		$content .= "<tr><td>" . $row['lastname'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['address'] . "</td><td>" . $row['contactno'] . "</td><td><a href='edit.php?id=".$row['student_id']."'>Edit</a> | <a href='delete.php?id=".$row['student_id']."'>Delete</a></td></tr>";
	}
	$content .= "</table>";
} else {
	$content .= "No student found.";
}
echo $content;
?>

</body>
</html>
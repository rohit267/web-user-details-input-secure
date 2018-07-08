<form method="POST" action="">
	<input type="test" name="name">
	<input type="submit" name="submit" value="submit">
</form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name= testInput($conn,$_POST['name']);

	$stmt=$conn->prepare("insert into test(name) value(?)");
	$stmt->bind_param("s",$name);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}

function testInput($conn,$data){
	$data=mysqli_real_escape_string($conn,stripcslashes($data));
	return $data;
}


?>



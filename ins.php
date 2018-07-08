<?php
$nameErr = $emailErr = $stdidErr = $fnameErr = $mnameErr = $dobErr = $bgErr= $mobErr = $addressErr = $distErr = $stateErr = $pinErr="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["name"])){
		$nameErr="Name is not Valid";
	}
	else{
		$name= testInput($conn,$_POST["name"]);

	}
	if(empty($_POST["fname"])){
		$fnameErr="Father's Name is not Valid";
	}
	else{
		$fname= testInput($conn,$_POST["fname"]);
	}
	if(empty($_POST["mname"])){
		$mnameErr="Mother's Name is not Valid";
	}
	else{
		$mname= testInput($conn,$_POST["mname"]);
	}
	if(empty($_POST["stdid"])){
		$stdidErr="Student ID is not Valid";
	}
	else{
		$stdid= testInput($conn,$_POST["stdid"]);
	}
	if(empty($_POST["dob"])){
		$dobErr="D.O.B. is not Valid";
	}
	else{
		$dob= testInput($conn,$_POST["dob"]);
	}
	if(empty($_POST["bg"])){
		$bgErr="Blood Group is not Valid";
	}
	else{
		$bg= testInput($conn,$_POST["bg"]);
	}
	if(empty($_POST["email"])){
		$emailErr="Email is not Valid";
	}
	else{
		$email= testInput($conn,$_POST["email"]);
	}
	if(empty($_POST["mob"])){
		$mobErr="Mobile No. is not Valid";
	}
	else{
		$mob= testInput($conn,$_POST["mob"]);
	}
	if(empty($_POST["address"])){
		$addressErr="Address is not Valid";
	}
	else{
		$address= testInput($conn,$_POST["address"]);
	}
	if(empty($_POST["state"])){
		$stateErr="State is not Valid";
	}
	else{
		$state= testInput($conn,$_POST["state"]);
	}
	if(empty($_POST["pin"])){
		$pinErr="Pincode is not Valid";
	}
	else{
		$pin= testInput($conn,$_POST["pin"]);
	}

	if(empty($_POST["dist"])){
		$distErr="District is not Valid";
	}
	else{
		$dist= testInput($conn,$_POST["dist"]);
	}

	$stmt=$conn->prepare("INSERT INTO user_det (Name,Student_ID,Father_Name,Mother_Name,DOB,Blood_Group,Email,Mobile,Address,District,State,Pincode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sisssssisssi", $name, $stdid, $fname, $mname, $dob, $bg, $email, $mob, $address, $dist, $state, $pin);
	$stmt->execute();

	$stmt->close();
	$conn->close();
}

function testInput($conn,$data){
	$data=mysqli_real_escape_string($conn, $data);
	return $data;
}

?>
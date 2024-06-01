<?php
session_start();
include ("connection.php");


//Functions

function getRandomString($length) {
    return bin2hex(random_bytes($length / 2));
}

function sha512($user_password, $salt) {
    $hash = hash_hmac('sha512', $password, $salt);
    return array(
        'salt' => $salt,
        'passwordHash' => $hash
    );
}

function saltHashPassword($userPassword) {
    $salt = getRandomString(16);
    $passwordData = sha512($userPassword, $salt);
    return $passwordData;
}


function checkHashPassword($userPassword, $salt) {
    $passwordData = sha512($userPassword, $salt);
    return $passwordData;
}



if(isset($_POST['email']) && isset($_POST['password'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}
$email = validate($_POST['email']);
$password = validate($_POST['password']);

if(empty($email)){
	// header ("Location: index.php?error="Email is required");
	exit();
}
else if(empty($password)){
	// header ("Location: index.php?error="Email is required");
	exit();
}

$sql = "SELECT * FROM user_account WHERE email='$email'";

$resullt = $conn->query($sql);

if($result->num_rows === 1){
	$row = mysqli_fetch_assoc($result);
	if($row['email'] === $email){
	
		echo "Logged In!";
		$_SESSION['email'] = $row['email'];
		$_SESSION['username'] = $row['username'];
		header("Location: dashboard.php");
		exit();
	

	}
}

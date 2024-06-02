<?php
session_start();


//MYSQL
$db_servername = "sql6.freesqldatabase.com";
$db_username = "sql6700012";
$db_password = "D3gevjgE4F";
$dbname = "sql6700012";

$conn = new mysqli($db_servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

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

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email)){
	// header ("Location: index.php?error="Email is required");
	exit();
}
else if(empty($password)){
	// header ("Location: index.php?error="Email is required");
	exit();
}

$sql = "SELECT * FROM user_account WHERE email='$email'";

$result = $conn->query($sql);

if($result->num_rows === 1 && $result !== FALSE){
	$row = mysqli_fetch_assoc($result);
	if($row['email'] === $email){
	$salt = $row['salt'];
	$encrypted_password = $row['password'];
	$hashed_password = checkHashPassword($password, $salt)['passwordHash'];
	
		$_SESSION['email'] = $row['email'];
		$_SESSION['username'] = $row['username'];
		echo $email + " " + $passworrd + " " + $salt + " " + $encrypted_password + " " + $hashed_password;
		exit();
	

	}
}
else{
	echo "SQL NOT WORKING";
}
$conn->close();
?>

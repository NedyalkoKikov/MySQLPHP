<?php
$mysqli = new mysqli("localhost", "root", "", "blog");
//$users = $mysqli->query("SELECT * FROM users");
//while($user = $users->fetch_assoc()){
//	$username = $user['username'];
//	echo htmlspecialchars($username) . "<br>\n";

$statement = $mysqli->prepare("INSERT INTO users(username, password_hash, full_name)" . "VALUES (?,?,?)");
$username = 'pesho2';
$pass = crypt('password123');
$fullname = 'Petio';
$statement->bind_param("sss",$username,$pass,$fullname);
$statement->execute();
if($statement->affected_rows==1){
	echo "succes";
}
?>
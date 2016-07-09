<?php
$mysqli = new mysqli("localhost", "root", "", "blog");
$users = $mysqli->query("SELECT * FROM users");
while($user = $users->fetch_assoc()){
	$username = $user['username'];
	echo htmlspecialchars($username) . "<br>\n";
}

?>
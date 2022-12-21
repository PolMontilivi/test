<?php

$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "estadistics";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO registre(ip) VALUES ('" . $ip . "')";
$conn->query($sql);

$result = $conn->query("SELECT COUNT(*) FROM registre");
$row = mysqli_fetch_array($result);
echo $row[0];

$conn->close();

?>
<?php
$host = "localhost";
$user = "root"; // default XAMPP user
$pass = "";     // default XAMPP password is empty
$db = "crud";

$conn = new mysqli($host, $user, $pass ,$db);

if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}
?>
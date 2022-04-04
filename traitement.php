<?php
date_default_timezone_set('Europe/Paris');

$name=$_POST['inputName'];
$message=$_POST['inputMsg'];
//$dateMsg = date('m/d/Y');
$name = addslashes($name);
$message = addslashes($message);


$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "journeybook";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO messages (pseudo, message)
VALUES ('$name', '$message')";

if ($conn->query($sql) === TRUE) {
  header('Location: list.php');
  exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


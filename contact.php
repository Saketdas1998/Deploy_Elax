<?php
// Connection parameters
$servername = "localhost";
$username = "root"; // default in XAMPP
$password = "";     // default in XAMPP
$dbname = "contact_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

// Insert into DB
$sql = "INSERT INTO contacts (name, email, location, mobile, message) VALUES ('$name', '$email', '$location','$mobile','$message')";

if ($conn->query($sql) === TRUE) {
  echo "Message sent successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

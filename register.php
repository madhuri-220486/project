<?php
include "db.php";

$username = $_POST['username'];
// cleaning email and password 
$username=trim($username);
$username=stripslashes($username);
$username=strtolower($username);
$username=ucfirst($username);
$email= $_POST['email'];
$email=trim($email);
$email=stripslashes($email);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (username, email, password)
          VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $query)) {
    echo "Registration successful";
} else {
    echo "Registration failed";
}
?>



<?php
include "db.php";

$username = $_POST['username'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (username, email, password)
          VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $query)) {
    echo "Registration successful";
} else {
    echo "Registration failed";
}
?>



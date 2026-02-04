<html>
<head>
    <meta charset="utf-8">
    
</head>
<body>
<?php
include "db.php";

$email    = $_POST['email'];
$password = $_POST['password'];

// cleaning email and password 
$username=trim($username);
$username=stripslashes($username);
$username=strtolower($username);
$username=ucfirst($username);
$email= $_POST['email'];
$email=trim($email);
$email=stripslashes($email);

$query = "SELECT * FROM users WHERE email='$email'";
die($result = mysqli_query($conn, $query));

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['password'])) {
        echo "Login successful";
    } else {
        echo "Incorrect password";
        print "Try again";
    }
} else {
    echo "User not found";
}
?>

</body>
</html>
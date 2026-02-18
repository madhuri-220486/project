<html>
<head>
    <meta charset="utf-8">
    
</head>
<body>
<?php
#include "db.php";
require 'vendor/autoload.php';   // adjust path if needed

// ---------------- GOOGLE LOGIN SETUP ----------------
$client = new Google_Client();
$client->setClientId('792192836400-elt42pjs2n4gu8v910g8t9o5b46j2gl8.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/project/OAuth2.0/google_auth.php');
$client->addScope("email");
$client->addScope("profile");

$google_login_url = $client->createAuthUrl();
$email    = $_POST['email'];
$password = $_POST['password'];

// cleaning email and password 

// $username=trim($username);
// $username=stripslashes($username);
// $username=strtolower($username);
// $username=ucfirst($username);
// $email= $_POST['email'];
// $email=trim($email);
// $email=stripslashes($email);

// $query = "SELECT * FROM users WHERE email='$email'";
// die($result = mysqli_query($conn, $query));

// if (mysqli_num_rows($result) == 1) {
//     $user = mysqli_fetch_assoc($result);

//     if (password_verify($password, $user['password'])) {
//         echo "Login successful";
//     } else {
//         echo "Incorrect password";
//         print "Try again";
//     }
// } else {
//     echo "User not found";
// }
?>
<!--
792192836400-elt42pjs2n4gu8v910g8t9o5b46j2gl8.apps.googleusercontent.com
-->  
<!--
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
-->  
<hr>
<h3>OR</h3>

<a href="<?= $google_login_url ?>">
    <button type="button" style="background:#4285F4;color:white;padding:10px;border:none;">
        Login with Google
    </button>
</a>
</body>
</html>
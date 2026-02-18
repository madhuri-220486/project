<?php
session_start();
#require '../vendor/autoload.php';
include '../db.php';

$client = new Google_Client();
$client->setClientId('792192836400-elt42pjs2n4gu8v910g8t9o5b46j2gl8.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/project/OAuth2.0/google_auth.php');

if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $service = new Google_Service_Oauth2($client);
    $user = $service->userinfo->get();

    $email = $user->email;
    $name = $user->name;

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($check) == 0) {
        mysqli_query($conn, "INSERT INTO users (name,email,password) VALUES ('$name','$email','GOOGLE')");
    }

    $_SESSION['email'] = $email;

    header("Location: ../dashboard.php");
    exit();
}
?>
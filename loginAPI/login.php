<?php 
session_start();
$api_key = 'T0sj5U86';
$api_hash = '@#clLA_OHSO;#izM=ko3';
$email = ($_POST['email']);
$pass = md5($api_key.':'.$api_hash.':'.$_POST['password']);
$username = ($_POST['username']);
$_SESSION['username'] = $username;
if(empty($email)){
    header("Location: index.php?erro=Username is required");
    exit();
}
else if(empty($pass)){
    header("Location: index.php?erro=Password is required");
    exit();
}
$url = 'http://wgndev4.worldcommunicate.com/services/vyvocps/signindev';

$data = array(
    'e' => $email,
    's' => $pass,
    'cl' => $username
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);



// Process the response
if ($response == false) {
    header('Location:index.php');
} else {
    //echo (json_encode($response, JSON_PRETTY_PRINT));
    header('Location:home.php');
}
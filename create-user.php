<?php
// Include KeyAuth API logic or SDK for interaction
$api = new KeyAuthApp(
    name: "Zereat X Cheat",
    ownerid: "4cBS2x0ZbH",
    secret: "4375f14a0e9c82e66a227da56faf1b957e4f6122f1e1abbb335b224ca68ed96c",
    version: "1.0"
);

$username = $_GET['username'] ?? '';
$password = $_GET['password'] ?? '';

if ($username && $password) {
    // Logic to create user with KeyAuth
    $result = $api->register($username, $password);

    if ($result) {
        echo "<script>alert('User created successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to create user.'); window.location.href='index.html';</script>";
    }
} else {
    echo "<script>alert('Invalid data.'); window.location.href='index.html';</script>";
}
?>

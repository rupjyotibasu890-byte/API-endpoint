<?php
$servername = "sql113.infinityfree.com";
$username   = "if0_40148312";
$password   = "Register890";
$database   = "if0_40148312_Mydatabase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    http_response_code(500);
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}
?>

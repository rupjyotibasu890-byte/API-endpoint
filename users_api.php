<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
header("Content-Type: application/json");

include "config.php"; // make sure config.php has your DB connection info

// Fetch data from the userdata table
$sql = "SELECT id, username, email FROM userdata LIMIT 50";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode([
        "status" => "success",
        "count" => count($data),
        "data" => $data
    ], JSON_PRETTY_PRINT);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "No records found"
    ]);
}

$conn->close();
?>

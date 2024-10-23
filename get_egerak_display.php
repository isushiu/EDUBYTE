<?php
// get_egerak_display.php

// Connect to the database
$servername = "localhost";
$username = "root";  // replace with your DB username
$password = "";  // replace with your DB password
$dbname = "ustp";  // replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the incoming JSON data
$input = json_decode(file_get_contents("php://input"), true);
$names = isset($input['names']) ? $input['names'] : [];
$sector = isset($input['sector']) ? $input['sector'] : '';

// Start building the SQL query
$sql = "SELECT nama, jawatan, email, startDate, endDate, sector, reason FROM egerak WHERE 1=1";

// Add filters based on the selected names
if (!empty($names)) {
    // Make sure names are sanitized
    $nameList = array_map([$conn, 'real_escape_string'], $names);
    $nameList = implode("','", $nameList); // Prepare for SQL
    $sql .= " AND nama IN ('$nameList')";
}

// Add filter for the selected sector
if (!empty($sector)) {
    $sector = $conn->real_escape_string($sector); // Escape sector
    $sql .= " AND sector = '$sector'";
}

// Fetch the filtered data from the database
$result = $conn->query($sql);

$rows = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}

// Return data as JSON
header('Content-Type: application/json'); // Set the content type to JSON
echo json_encode($rows);

$conn->close();
?>

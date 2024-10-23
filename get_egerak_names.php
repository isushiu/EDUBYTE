<?php
// Database connection
include 'db_connection.php'; // Include your database connection file

$query = "SELECT name FROM egerak"; // Query to get the names from e-gerak table
$result = mysqli_query($conn, $query);

$names = array();
while ($row = mysqli_fetch_assoc($result)) {
    $names[] = $row['name'];
}

echo json_encode(['names' => $names]);
?>

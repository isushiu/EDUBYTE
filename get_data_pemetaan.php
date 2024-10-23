<?php
$servername = "localhost";
$username = "root";     
$password = "";          
$dbname = "ustp";           

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['KOD_SEKOLAH'])) {
    $schoolCode = $_GET['KOD_SEKOLAH'];

    // Debugging: Log the incoming school code
    error_log("Received school code: " . $schoolCode); // Check your error log

    $query = "SELECT * FROM data_pemetaan WHERE kod_sekolah = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $schoolCode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'Data not found']);
    }
} else {
    echo json_encode(['error' => 'Invalid input']);
}

$stmt->close(); // Close the prepared statement
$conn->close(); // Close the connection
?>

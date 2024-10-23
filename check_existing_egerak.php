<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ustp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    // Check if the name exists in the egerak table
    $sql = "SELECT * FROM egerak WHERE Nama = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Name exists in egerak table
        echo json_encode(['exists' => true]);
    } else {
        // Name does not exist in egerak table
        echo json_encode(['exists' => false]);
    }

    $stmt->close();
}

$conn->close();
?>

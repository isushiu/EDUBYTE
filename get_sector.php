<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ustp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]);
    exit();
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    // Prepare and execute the SQL query to retrieve the sector for the given name
    $sql = "SELECT Sector FROM staff WHERE Nama = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $name);
    $stmt->execute();
    $stmt->bind_result($sector);
    $stmt->fetch();

    if ($sector) {
        echo json_encode(["success" => true, "sector" => $sector]);
    } else {
        echo json_encode(["success" => false, "message" => "Sector not found."]);
    }

    $stmt->close();
}
$conn->close();
?>

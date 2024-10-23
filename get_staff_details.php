<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ustp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $sql = "SELECT NoKP AS kpno, Sector FROM staff WHERE Nama = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($data = $result->fetch_assoc()) {
        echo json_encode($data); // Returns both kpno and sector
    } else {
        echo json_encode(['kpno' => '', 'sector' => '']); // Return empty if no data found
    }

    $stmt->close();
}
$conn->close();
?>

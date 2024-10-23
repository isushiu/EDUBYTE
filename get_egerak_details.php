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
    $name = $conn->real_escape_string($_POST['name']);
    $sql = "SELECT StartDate, EndDate, Reason FROM egerak WHERE Nama = '$name' ORDER BY StartDate DESC LIMIT 1"; // Get the latest entry
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode([]);
    }
}
$conn->close();
?>

<?php
header('Content-Type: application/json');

// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ustp";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]);
    exit();
}

// Check if all required POST parameters are set
if (isset($_POST['fname'], $_POST['icno'], $_POST['startdate'], $_POST['enddate'], $_POST['duration'], $_POST['reason'], $_POST['sector'])) {
    // Get form data
    $fname = $_POST['fname'];
    $icno = $_POST['icno'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $duration = $_POST['duration'];
    $reason = $_POST['reason'];
    $sector = $_POST['sector'];

    // Retrieve staff details from the staff table using NoKP (IC No.)
    $query = "SELECT Jawatan, NoTel, Email FROM staff WHERE NoKP = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $icno); // Assuming NoKP is a string (IC No.)

    if ($stmt->execute()) {
        // Bind result variables
        $stmt->bind_result($jawatan, $notel, $email);
        $stmt->fetch();
    } else {
        echo json_encode(["success" => false, "message" => "Error fetching staff details: " . $stmt->error]);
        exit();
    }
    $stmt->close();

    // Insert data into the egerak table
    $insert_sql = "INSERT INTO egerak (Nama, NoKP, StartDate, EndDate, Duration, Reason, Sector, Jawatan, NoTel, Email) 
                   VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insert_sql);
    $stmt->bind_param("ssssssssis", $fname, $icno, $startdate, $enddate, $duration, $reason, $sector, $jawatan, $notel, $email);

    // Variable to track submission status
    $isSubmitted = false;

    if ($stmt->execute()) {
        // Set $isSubmitted to true if data insertion was successful
        $isSubmitted = true;
        echo json_encode(["success" => true, "message" => "Data inserted successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $stmt->error]);
    }

    $stmt->close();

    // Check the submission status and perform additional actions
    if ($isSubmitted) {
        // You can add more logic here if needed
        echo "Submission was successful.";
    } else {
        echo "Submission failed.";
    }

}
// Close the database connection
$conn->close();

?>

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

    // Check if a delete request is made
    if (isset($_POST['deleteNoKP'])) {
        $deleteNoKP = $_POST['deleteNoKP'];

        // Prepare delete statement
        $delete_sql = "DELETE FROM egerak WHERE Nama = ?";
        $stmt = $conn->prepare($delete_sql);
        $stmt->bind_param("s", $deleteNoKP);

        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "Entry deleted successfully."]);
        } else {
            echo json_encode(["success" => false, "message" => "Error: " . $stmt->error]);
        }

        $stmt->close();
        $conn->close();
        exit();
    }

    // Existing code for updating entry
if (!empty($_POST['editFname']) && isset($_POST['editStartdate'], $_POST['editEnddate'], $_POST['editReason'])) {
    $fname = $_POST['editFname'];
    $startdate = $_POST['editStartdate'];
    $enddate = $_POST['editEnddate'];
    $reason = $_POST['editReason'];

    // Calculate duration
    $duration = (strtotime($enddate) - strtotime($startdate)) / (60 * 60 * 24); // Duration in days

    // Prepare update statement
    $update_sql = "UPDATE egerak SET StartDate = ?, EndDate = ?, Reason = ?, Duration = ? WHERE Nama = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("sssis", $startdate, $enddate, $reason, $duration, $fname);

    // Execute the query and check the result
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Data updated successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $stmt->error]);
    }

    $stmt->close();
}
    $conn->close();
    ?>

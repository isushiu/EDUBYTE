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

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kod_sekolah = $_POST['kodSekolah'] ?? '';
    $nama_sekolah = $_POST['namaSekolah'] ?? '';
    $penyelaras_ict = $_POST['penyelarasIct'] ?? '';
    $no_tel_penyelaras = $_POST['noTelPenyelaras'] ?? '';
    $gpm = $_POST['gpm'] ?? '';
    $no_tel_gpm = $_POST['noTelGpm'] ?? '';
    $link_scoreboard = $_POST['linkScoreboard'] ?? '';
    $link_opr = $_POST['linkOpr'] ?? '';

    // Prepare and bind the update statement
    $sql = "UPDATE scoreboard_opr_sekolah SET
                NAMA_SEKOLAH = ?,
                NAMA_PENYELARAS_ICTDELIMA = ?,
                NO_TEL_PENYELARAS_ICTDELIMA = ?,
                NAMA_GPM = ?,
                NO_TELEFON_GPM = ?,
                LINK_SCOREBOARD = ?,
                LINK_OPR = ?
            WHERE KOD_SEKOLAH = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $nama_sekolah, $penyelaras_ict, $no_tel_penyelaras, $gpm, $no_tel_gpm, $link_scoreboard, $link_opr, $kod_sekolah);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

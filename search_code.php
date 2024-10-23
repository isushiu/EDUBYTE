<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Search Sekolah</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/malaysia.png" />
    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .editable-field {
            border: 2px solid black;
            padding: 5px;
            border-radius: 3px;
        }

        .non-editable-field {
            border: none;
        }

        .hidden {
            display: none;
        }

        .editable {
            background-color: #f8f9fa;
        }

        .masthead-heading {
            font-size: 2.5rem;
            line-height: 1.2;
            word-wrap: break-word;
        }

        @media (max-width: 768px) {
            .masthead-heading {
                font-size: 1.8rem;
            }

            .card-body {
                font-size: 0.9rem;
            }
        }

        .result-card {
            margin-top: 20px;
        }

        table {
            table-layout: fixed;
            width: 100%;
            word-wrap: break-word;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            vertical-align: middle;
        }

        .btn {
            margin-top: 15px;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation -->
    <?php include 'header.php'; ?>

    <!-- Masthead -->
    <header class="masthead" style="background-color: #212529;">
        <div class="container">
            <div class="masthead-subheading"></div>
            <div class="masthead-heading text-uppercase text-white text-center">
                <?php
                // Database connection
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

                // Initialize the school name variable
                $school_name = '';

                // Check if form was submitted
                if (isset($_POST['code_sekolah'])) {
                    $code_sekolah = $_POST['code_sekolah'];

                    // Query to search the database
                    $sql = "SELECT * FROM scoreboard_opr_sekolah WHERE KOD_SEKOLAH = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $code_sekolah);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        // Fetch the row
                        $row = $result->fetch_assoc();
                        // Store the school name for use in the heading
                        $school_name = htmlspecialchars($row['NAMA_SEKOLAH']);
                    }
                    $stmt->close();
                }

                $conn->close();

                // Display the school name in the heading
                echo htmlspecialchars($school_name ? $school_name : "No School Found");
                ?>
            </div>
        </div>
    </header>

    <!-- Search Sekolah Form -->
    <section class="page-section" id="search">
        <div class="container">
            <!-- PHP Code for displaying results -->
            <?php
            // Database connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if form was submitted
            if (isset($_POST['code_sekolah'])) {
                $code_sekolah = $_POST['code_sekolah'];

                // Query to search the database
                $sql = "SELECT * FROM scoreboard_opr_sekolah WHERE KOD_SEKOLAH = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $code_sekolah);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Fetch the row
                    $row = $result->fetch_assoc();

                    // Display the result in a styled card
                    echo "
                    <div class='card result-card'>
                        <div class='card-header bg-primary text-white'>
                            <h2 class='text-center'>
                                HASIL CARIAN UNTUK KOD SEKOLAH: 
                                <span style='background-color: black; padding: 0 5px; border-radius: 3px;' class='editable'>" . strtoupper(htmlspecialchars($code_sekolah)) . "</span>
                            </h2>
                        </div>
                        <div class='card-body'>
                            <form id='editForm'>
                                <table class='table table-striped'>
                                    <tr>
                                        <th>KOD SEKOLAH:</th>
                                        <td><div id='kodSekolah' class='non-editable-field'>" . htmlspecialchars($row['KOD_SEKOLAH']) . "</div></td>
                                    </tr>
                                    <tr>
                                        <th>NAMA SEKOLAH:</th>
                                        <td><div id='namaSekolah' class='non-editable-field'>" . htmlspecialchars($row['NAMA_SEKOLAH']) . "</div></td>
                                    </tr>
                                    <tr>
                                        <th>NAMA PENYELARAS ICT/DELIMA:</th>
                                        <td><div id='penyelarasIct' class='non-editable-field'>" . htmlspecialchars($row['NAMA_PENYELARAS_ICTDELIMA']) . "</div></td>
                                    </tr>
                                    <tr>
                                        <th>NO.TEL PENYELARAS ICT/DELIMA:</th>
                                        <td><div id='noTelPenyelaras' class='non-editable-field'>" . htmlspecialchars($row['NO_TEL_PENYELARAS_ICTDELIMA']) . "</div></td>
                                    </tr>
                                    <tr>
                                        <th>NAMA GPM:</th>
                                        <td><div id='gpm' class='non-editable-field'>" . htmlspecialchars($row['NAMA_GPM']) . "</div></td>
                                    </tr>
                                    <tr>
                                        <th>NO.TELEFON GPM:</th>
                                        <td><div id='noTelGpm' class='non-editable-field'>" . htmlspecialchars($row['NO_TELEFON_GPM']) . "</div></td>
                                    </tr>
                                    <tr>
                                        <th>LINK SCOREBOARD:</th>
                                        <td><div id='linkScoreboard' class='non-editable-field' contenteditable='false'>" . htmlspecialchars($row['LINK_SCOREBOARD']) . "</div></td>
                                    </tr>
                                    <tr>
                                        <th>LINK OPR:</th>
                                        <td><div id='linkOpr' class='non-editable-field' contenteditable='false'>" . htmlspecialchars($row['LINK_OPR']) . "</div></td>
                                    </tr>
                                </table>
                                <button id='editBtn' class='btn btn-primary' onclick='enableEdit(event)'>Edit</button>
                                <button id='goBtn' class='btn btn-success hidden' onclick='submitEdit(event)'>Save</button>
                                <button id='cancelBtn' class='btn btn-danger hidden' onclick='cancelEdit(event)'>Cancel</button>
                            </form>
                        </div>
                    </div>";
                } else {
                    echo "<div class='alert alert-danger text-center'>No data found for Code Sekolah: " . htmlspecialchars($code_sekolah) . "</div>";
                }

                $stmt->close();
            }

            $conn->close();
            ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        function enableEdit(event) {
            event.preventDefault(); // Prevent the default form action
            let fields = document.querySelectorAll('.non-editable-field');
            fields.forEach(function (field) {
                field.classList.remove('non-editable-field');
                field.classList.add('editable-field');
                field.setAttribute('contenteditable', 'true');
            });

            document.getElementById('editBtn').classList.add('hidden');
            document.getElementById('goBtn').classList.remove('hidden');
            document.getElementById('cancelBtn').classList.remove('hidden');
        }

        function cancelEdit(event) {
            event.preventDefault(); // Prevent the default form action
            location.reload(); // Reload the page to reset the form
        }

        function submitEdit(event) {
            event.preventDefault(); // Prevent the default form action
            let editedData = {
                kodSekolah: document.getElementById('kodSekolah').innerText,
                namaSekolah: document.getElementById('namaSekolah').innerText,
                penyelarasIct: document.getElementById('penyelarasIct').innerText,
                noTelPenyelaras: document.getElementById('noTelPenyelaras').innerText,
                gpm: document.getElementById('gpm').innerText,
                noTelGpm: document.getElementById('noTelGpm').innerText,
                linkScoreboard: document.getElementById('linkScoreboard').innerText,
                linkOpr: document.getElementById('linkOpr').innerText
            };

            // Do something with editedData, like sending it to the server for saving
            console.log(editedData);
            location.reload(); // Reload the page after submission
        }
    </script>
</body>

</html>

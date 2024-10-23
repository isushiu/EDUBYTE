<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sumber dan Teknologi Pendidikan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/malaysia.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <style>
        /* Fixed header style */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: transparent; /* Initially transparent */
            transition: background-color 0.3s;
        }

        /* Add spacing to prevent content from being hidden under the header */
        body {
            padding-top: 80px; /* Adjust to the height of your header */
        }

        /* Add background color when scrolled */
        .header.scrolled {
            background-color: white; /* Color when scrolled */
        }

        /* Add spacing between form elements */
        .form-group {
            margin-bottom: 20px;
        }

        /* Ensure select2 dropdown fits well */
        .select2-container {
            width: 100% !important; 
        }
    </style>
</head>
<body id="page-top">
    <!-- Navigation-->
    <?php include 'header.php'; ?>

    <?php
        $servername = "localhost";
        $username = "root";     
        $password = "";          
        $dbname = "ustp";           

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>

    <section id="egerak" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">PENGISIAN DATA E-GERAK</h2>
                    <hr class="divider my-4">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="insert_egerak.php" method="POST">
                        <div class="form-group">
                            <label for="fname">Full Name:</label>
                            <select class="form-control" id="fname" name="fname" required>
                                <option value="">Select Name</option>
                                <?php
                                // Retrieve staff names from the 'staff' table
                                $sql = "SELECT Nama FROM staff";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['Nama'] . "'>" . $row['Nama'] . "</option>";
                                    }
                                } else {
                                    echo "<option>No staff found</option>";
                                }
                                ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="icno">IC Number:</label>
                            <input type="text" class="form-control" id="icno" name="icno" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="startdate">Start Date:</label>
                            <input type="date" class="form-control" id="startdate" name="startdate" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="enddate">End Date:</label>
                            <input type="date" class="form-control" id="enddate" name="enddate" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="duration">Day(s):</label>
                            <input type="number" class="form-control" id="duration" name="duration" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="reason">Reason:</label>
                            <input type="text" class="form-control" id="reason" name="reason" placeholder="eg:Mesyuarat" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="sector">Sector:</label>
                            <input type="text" class="form-control" id="sector" name="sector" readonly>
                        </div>
                        
                        <button type="submit1" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section id="editEgerak" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase">Edit/Delete Your E-Gerak</h2>
                <hr class="divider my-4">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form id="editForm">
                    <div class="form-group">
                        <label for="editFname">Nama:</label>
                        <select class="form-control" id="editFname" name="editFname" required>
                            <option value="">Select Name</option>
                            <?php
                            // Fetch names from egerak table
                            $sql = "SELECT DISTINCT Nama FROM egerak";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['Nama'] . "'>" . $row['Nama'] . "</option>";
                                }
                            } else {
                                echo "<option>No records found</option>";
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="editStartdate">Start Date:</label>
                        <input type="date" class="form-control" id="editStartdate" name="editStartdate" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="editEnddate">End Date:</label>
                        <input type="date" class="form-control" id="editEnddate" name="editEnddate" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="editReason">Reason:</label>
                        <input type="text" class="form-control" id="editReason" name="editReason" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                    <button type="button" class="btn btn-danger mt-3" id="deleteButton">Delete</button>
                </form>
            </div>
        </div>
    </div>
</section>










    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
        // Set the minimum date for 'startdate' to today
        var today = new Date().toISOString().split('T')[0];
        $('#startdate, #enddate').attr('min', today);

        // Initialize Select2 on the 'fname' dropdown
        $('#fname').select2({
            placeholder: 'Select Name',
            allowClear: true
        });

        // When a name is selected, retrieve the IC Number and sector associated with it
        $('#fname').on('change', function() {
            var selectedName = $(this).val();
            if (selectedName !== "") {
                $.ajax({
                    url: 'get_staff_details.php', // PHP file to get both IC Number and sector
                    type: 'POST',
                    data: {name: selectedName},
                    success: function(response) {
                        var data = JSON.parse(response);
                        $('#icno').val(data.kpno); // Use correct key from PHP
                    },
                    error: function() {
                        alert("Error retrieving data. Please try again.");
                    }
                });
            } else {
                $('#icno').val('');
            }
        });

        $(document).ready(function() {
        // When a name is selected, retrieve the sector associated with it
        $('#fname').on('change', function() {
            var selectedName = $(this).val();
            if (selectedName !== "") {
                $.ajax({
                    url: 'get_sector.php', // PHP file to get the sector
                    type: 'POST',
                    data: {name: selectedName},
                    dataType: 'json', // Expect a JSON response
                    success: function(response) {
                        if (response.success) {
                            $('#sector').val(response.sector); // Set the sector value
                        } else {
                            alert(response.message); // Show error message
                        }
                    },
                    error: function() {
                        alert("Error retrieving sector. Please try again.");
                    }
                });
            } else {
                $('#sector').val(''); // Clear the sector field if no name is selected
            }
        });
    });

        

        // Calculate the duration in days
        $('#startdate, #enddate').on('change', function() {
            var startDate = $('#startdate').val();
            var endDate = $('#enddate').val();
            if (startDate && endDate) {
                var start = new Date(startDate);
                var end = new Date(endDate);
                if (end < start) {
                    alert("End date must be after start date.");
                    $('#enddate').val(''); // Clear end date if invalid
                    return;
                }
                var duration = Math.ceil((end - start) / (1000 * 60 * 60 * 24)); // Calculate duration in days
                $('#duration').val(duration);
            } else {
                $('#duration').val('');
            }
        });

        // Calculate the duration in days on edit form
    $('#editStartdate, #editEnddate').on('change', function() {
        var startDate = $('#editStartdate').val();
        var endDate = $('#editEnddate').val();
        if (startDate && endDate) {
            var start = new Date(startDate);
            var end = new Date(endDate);
            if (end < start) {
                alert("End date must be after start date.");
                $('#editEnddate').val(''); // Clear end date if invalid
                $('#duration').val(''); // Clear duration
                return;
            }
            var duration = Math.ceil((end - start) / (1000 * 60 * 60 * 24)); // Calculate duration in days
            $('#duration').val(duration); // Set the duration field value
        } else {
            $('#duration').val('');
        }
    });


        // Set minimum end date to the selected start date
        $('#startdate').on('change', function() {
            var startDate = $(this).val();
            $('#enddate').attr('min', startDate);
        });

        // Add background color to header when scrolling
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 50) {
                $('.header').addClass('scrolled');
            } else {
                $('.header').removeClass('scrolled');
            }
        });

        // Form submission
        $('form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            $.ajax({
                type: 'POST',
                url: 'insert_egerak.php',
                data: $(this).serialize(), // Serialize form data
                success: function(response) {
                    // Show success alert
                    alert("Successfully submitted!");

                    // Refresh the page
                    location.reload();
                },
                error: function() {
                     // Show success alert
                     alert("Successfully submitted!");

                // Refresh the page
                location.reload();
                }
            });
        });


        // Initialize Select2 on the 'editFname' dropdown
        $('#editFname').select2({
            placeholder: 'Select Name',
            allowClear: true
        });

        // Fetch current leave details when an employee is selected
        $('#editFname').on('change', function() {
            var selectedName = $(this).val();
            if (selectedName !== "") {
                $.ajax({
                    url: 'get_egerak_details.php', // PHP file to retrieve leave details
                    type: 'POST',
                    data: {name: selectedName},
                    success: function(response) {
                        var data = JSON.parse(response);
                        $('#editStartdate').val(data.StartDate);
                        $('#editEnddate').val(data.EndDate);
                        $('#editReason').val(data.Reason);
                        $('#editStartdate').attr('min', today); // Set minimum date for editing
                    },
                    error: function() {
                        alert("Error retrieving leave details. Please try again.");
                    }
                });
            } else {
                $('#editStartdate').val('');
                $('#editEnddate').val('');
                $('#editReason').val('');
            }
        });

        // Validate date selections for edit form
        // Script for the edit/update form
            $('#editForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default submission
                var startDate = $('#editStartdate').val();
                var endDate = $('#editEnddate').val();

                if (new Date(endDate) < new Date(startDate)) {
                    alert("End Date must be after Start Date.");
                    return;
                }

                // Submit the form using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'update_egerak.php', // PHP file to handle the update
                    data: $(this).serialize(),
                    success: function(response) {
                        alert("Update successful!");
                        location.reload(); // Refresh the page
                    },
                    error: function() {
                        alert("An error occurred during the update.");
                    }
                });
            });

            $('#deleteButton').on('click', function() {
                var noKP = $('#editFname').val(); // Get selected name (assuming NoKP is the same as Nama)

                if (noKP) {
                    if (confirm("Are you sure you want to delete this entry?")) {
                        $.ajax({
                            type: 'POST',
                            url: 'update_egerak.php',
                            data: { deleteNoKP: noKP },
                            success: function(response) {
                                alert("Delete successful!");
                                location.reload(); // Refresh the page
                            },
                            error: function() {
                                alert("An error occurred during the deletion.");
                            }
                        });
                    }
                } else {
                    alert("Please select a name to delete.");
                }
            });

});


</script>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
<?php include 'footer.php';?>
</html>

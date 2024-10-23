<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sumber dan Teknologi Pendidikan</title>
    <link rel="icon" type="image/x-icon" href="assets/malaysia.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body id="page-top">
    <?php include 'header.php'; ?>

    <header class="masthead" style="background-image: url('assets/senaraiegerak.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
        <div class="container">
            <div class="masthead-subheading">SELAMAT DATANG</div>
            <div class="masthead-heading text-uppercase">SENARAI E-GERAK</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#egerak">LIHAT</a>
        </div>
    </header>

    <?php
        $servername = "localhost";
        $username = "root";     
        $password = "";          
        $dbname = "ustp";           

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch distinct sectors and staff names
        $sectors = $conn->query("SELECT DISTINCT sector FROM staff");
        $names = $conn->query("SELECT DISTINCT nama FROM staff");
    ?>

    <section id="egerak" class="py-5 bg-light">
        <div class="container">
            <h2>Senarai e-GERAK</h2>
            <div class="form-group">
                <label for="nameSelect">Pilih Nama:</label>
                <select id="nameSelect" class="form-control select2" multiple>
                    <?php while ($row = $names->fetch_assoc()): ?>
                        <option value="<?php echo $row['nama']; ?>"><?php echo $row['nama']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="sectorSelect">Pilih Sektor:</label>
                <select id="sectorSelect" class="form-control select2 sector-select">
                    <option value="">Semua Sektor</option>
                    <?php while ($row = $sectors->fetch_assoc()): ?>
                        <option value="<?php echo $row['sector']; ?>"><?php echo $row['sector']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jawatan</th>
                        <th>Email</th>
                        <th>Tarikh Mula</th>
                        <th>Tarikh Tamat</th>
                        <th>Sektor</th>
                        <th>Sebab</th>
                    </tr>
                </thead>
                <tbody id="reportData">
                    <!-- Data will be populated here -->
                </tbody>
            </table>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();

            function fetchData() {
                const selectedNames = $('#nameSelect').val();
                const selectedSector = $('#sectorSelect').val();

                // Fetch e-GERAK data based on selected filters
                fetch('get_egerak_display.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ names: selectedNames, sector: selectedSector })
                })
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('reportData');
                    tableBody.innerHTML = ""; // Clear table before appending new rows

                    // Loop through data and add table rows
                    data.forEach(item => {
                        const row = `
                            <tr>
                                <td>${item.nama}</td>
                                <td>${item.jawatan}</td>
                                <td>${item.email}</td>
                                <td>${item.startDate}</td>
                                <td>${item.endDate}</td>
                                <td>${item.sector}</td>
                                <td>${item.reason}</td>
                            </tr>
                        `;
                        tableBody.innerHTML += row;
                    });
                })
                .catch(error => {
                    console.error('Error fetching e-GERAK data:', error);
                    document.getElementById('reportData').innerHTML = '<tr><td colspan="7">Error loading data.</td></tr>';
                });
            }

            // Fetch data on filter change
            $('#nameSelect, #sectorSelect').on('change', fetchData);

            // Initial data fetch
            fetchData();
        });
    </script>

    <style>
        h2 {
            margin-top: 20px;
            margin-bottom: 10px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #34E4CB;
        }
        tr:hover {
            background-color: #f1f1f1;
        }

        .sector-select {
            height: 40px; /* Adjust the height */
            font-size: 16px; /* Increase font size */
        }

        .form-group {
            margin-bottom: 30px; /* Add space below the sector selection */
        }

        @media (max-width: 768px) {
            body {
                padding-top: 60px;
            }
            h2 {
                font-size: 24px;
            }
            table {
                font-size: 14px;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
<?php include 'footer.php'; ?>
</html>

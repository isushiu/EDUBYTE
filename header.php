<html>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>USTP</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <body>
        <!-- header.php -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="http://localhost/PROJECT%20PPD%20LATEST/index.php#page-top">
                    <img src="assets/img/Logo-USTP.png" alt="USTP Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PROJECT%20PPD%20LATEST/index.php#about">INFO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PROJECT%20PPD%20LATEST/index.php#services">FUNGSI USTP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PROJECT%20PPD%20LATEST/index.php#portfolio">AKTIVITI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PROJECT%20PPD%20LATEST/index.php#team">AHLI USTP</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="https://sites.google.com/view/sstpjpnjohor/dashboard-sstp">Dashboard Sumber Data</a></li>
                                <li><a class="dropdown-item" href="http://localhost/PROJECT%20PPD%20LATEST/scoreboard.php">Scoreboard</a></li>
                                <li><a class="dropdown-item" href="laporanbulanan.php">Laporan Bulanan</a></li>
                                <li><a class="dropdown-item" href="mainegerak.php">e-Gerak</a></li>
                                <li><a class="dropdown-item" href="senaraiPautan.php">Senarai Pautan</a></li>
                            </ul>
                        </li>

                        <!-- Custom Styling for Dropdown -->
                        <style>
                            .nav-item.dropdown {
                                position: relative;
                            }

                            /* Extended hover area */
                            .nav-item.dropdown::before {
                                content: "";
                                position: absolute;
                                top: 100%;
                                left: 0;
                                right: 0;
                                height: 50px; 
                                z-index: 5;
                            }

                            .nav-item.dropdown .nav-link {
                                position: relative;
                                top: -5px;
                                padding: 15px 20px; 
                            }

                            /* Show dropdown on hover */
                            .nav-item.dropdown:hover .dropdown-menu,
                            .nav-item.dropdown:focus-within .dropdown-menu {
                                display: block;
                                left: -80px;
                            }

                            .nav-item.dropdown:hover .dropdown-toggle::after,
                            .nav-item.dropdown:focus-within .dropdown-toggle::after {
                                display: none;
                            }

                            .dropdown-menu {
                                display: none; 
                                position: absolute;
                                top: 146%; 
                                left: 0;
                                z-index: 1000;
                                background-color: #fff;
                                border: 1px solid rgba(0, 0, 0, 0.15);
                                border-radius: 0.25rem;
                                padding: 0.5rem 0;
                                transition: all 0.3s ease-in-out;
                            }

                            /* Ensure dropdown fits smaller screens */
                            @media (max-width: 768px) {
                                .dropdown-menu {
                                    left: 0 !important;
                                    width: 100%;
                                    position: static; /* Let it flow below the toggle */
                                }
                            }

                            /* Add z-index to ensure proper layering */
                            .nav-item.dropdown:hover .dropdown-menu {
                                z-index: 10;
                            }
                        </style>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>

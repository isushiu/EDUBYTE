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
</head>
<body id="page-top">
    <!-- Navigation-->
    <?php include 'header.php'; ?>
    <header class="masthead" style="background-image: url('assets/ppd.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
    <div class="container">
            <div class="masthead-subheading">SELAMAT DATANG</div>
            <div class="masthead-heading text-uppercase">E-GERAK</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#team">LIHAT</a>
        </div>
    </header>

    <section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"></h2>
            <h3 class="section-subheading text-muted"> </h3>
        </div>
        <div class="row justify-content-center"> 
            <div class="col-lg-4 text-center"> 
                <a href="egerak.php" class="team-member-link">
                    <div class="team-member">
                        <i class="fas fa-edit team-photo" style="font-size: 80px; color: #007bff; width: auto; height: 200px;"></i>
                        <br><br>
                        <h3>ISI E-GERAK</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 text-center">
                <a href="egerak2.php" class="team-member-link">
                    <div class="team-member">
                        <i class="fas fa-eye team-photo" style="font-size: 80px; color: #007bff; width: auto; height: 200px;"></i>
                        <br><br>
                        <h3>LIST E-GERAK</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>



<style>
    .team-member-link {
        display: block;
        text-decoration: none;
        color: inherit; /* Ensure link inherits text color */
    }

    .team-photo {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 100%; /* Ensure the image fits within its container */
        height: auto; /* Maintain aspect ratio */
    }

    .team-photo:hover {
        transform: scale(1.01); /* Slightly enlarge the image */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Add shadow to give a pop-out effect */
    }

    .team-member {
        overflow: hidden;
        position: relative;
    }

    .team-member img {
        border-radius: 50%;
    }

    /* Ensure text color remains black */
    .team-member h3 {
        color: black; /* Text color is black */
    }
</style>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
<?php include 'footer.php';?>
</html>

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
        <link href="../css/styles.css" rel="stylesheet" />
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include 'header.php'; ?>

        <!-- Masthead-->
        <header class="masthead" style="background-image: url('assets/BigBG/scoreboard.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">

            <div class="container">
                <div class="masthead-subheading">SELAMAT DATANG</div>
                <div class="masthead-heading text-uppercase">SCOREBOARD</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#contact">Cari Scoreboard Sekolah Anda!</a>
            </div>
        </header>
        <!-- Cari Scoreboard Sekolah Form-->
        <section class="page-section" id="contact" style="background-color: white";>
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="color: black";>SCOREBOARD SEKOLAH</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <form id="contactForm" action="search_code.php" method="POST">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-8">
                            <div class="form-group d-flex align-items-center justify-content-center">
                                <!-- Code Sekolah input -->
                                <input class="form-control me-3" id="COL2" name="code_sekolah" type="text" placeholder="CODE SEKOLAH (EG: JBA1234)*" required style="max-width: 400px;" />
                                <!-- Submit Button -->
                                <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Hantar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
    <?php include 'footer.php';?>
</html>


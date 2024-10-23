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
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include 'header.php'; ?>

        <!-- Masthead-->
        <header class="masthead" style="background-image: url('assets/BigBG/pemerkasan.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
            <div class="container">
                <div class="masthead-subheading">SELAMAT DATANG</div>
                <div class="masthead-heading text-uppercase">PEMERKASAAN MURID PUSAT SUMBER SEKOLAH<Br><span style="COLOR: #FFFF99; padding: 0 3px; border-radius: 3px;">DAERAH KOTA TINGGI</span></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#about">LIHAT</a>
            </div>
        </header>
        <section class="page-section" id="about">
        <div class="container">
            <div class="text-6center">
                <h2 class="section-heading text-uppercase"><center>terkini</center></h2>
                <style>
                    .gallery {
                        position: relative;
                        max-width: 50%; 
                        margin: auto;
                        overflow: hidden;
                        border-radius: 5px; 
                        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); 
                        height: 0;
                        padding-bottom: 28%; 
                        transition: transform 0.3s ease-in-out; 
                    }

                    .gallery:hover {
                        transform: scale(1.05); 
                    }

                    .gallery-images {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        width: 100%;
                        height: 100%;
                        transform: translate(-50%, -50%);
                    }

                    .gallery-photo {
                        width: 100%; 
                        height: 100%; 
                        object-fit: cover; 
                        position: absolute;
                        top: 0;
                        left: 0;
                        opacity: 0;
                        transition: opacity 1s ease-in-out;
                    }

                    .gallery-photo.active {
                        opacity: 1;
                    }

                    
                    .gallery a {
                        display: block;
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        z-index: 1;
                    }
                </style>
                <div class="gallery">
                    <a href="https://www.youtube.com/watch?v=0SVFbPJq9vg&ab_channel=PPDKOTATINGGIKPM"></a>
                    <div class="gallery-images">
                        <img src="assets/sesilibaturus.jpg" alt="Photo 1" class="gallery-photo">
                    </div>
                    <br>
                </div>
                <script>
                    let currentIndex = 0;

                    function showPhoto(index) {
                        const photos = document.querySelectorAll('.gallery-photo');
                        const totalPhotos = photos.length;

                        photos.forEach(photo => photo.classList.remove('active'));

                        if (index >= totalPhotos) {
                            currentIndex = 0;
                        } else if (index < 0) {
                            currentIndex = totalPhotos - 1;
                        } else {
                            currentIndex = index;
                        }

                        photos[currentIndex].classList.add('active');
                    }

                    showPhoto(currentIndex);
                </script>
            </div>
            <br>
            <p class="text-muted" style="text-align: center; max-width: 600px; margin: 0 auto;">
                <b>RAKAMAN SESI LIBAT URUS PROGRAM PEMERKASAAN MURID PUSAT SUMBER SEKOLAH TAHUN 2024</b>
                <a href="https://www.youtube.com/watch?v=0SVFbPJq9vg&ab_channel=PPDKOTATINGGIKPM" style="background-color: #FFFF99; padding: 0 3px; border-radius: 3px; color: blue; text-decoration: none;">SILA KLIK PAUTAN INI.</a>
            </p>
        </div>
</section>


<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">ACARA & PROGRAM JOHOR</h2>
            <h3 class="section-subheading text-muted"> </h3>
        </div>
        <div class="row">
            <!-- BICARA BUKU JOHOR -->
            <div class="col-lg-4">
                <a href="https://www.youtube.com/watch?v=0SVFbPJq9vg&ab_channel=PPDKOTATINGGIKPM" class="team-member-link">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle team-photo" src="assets/BICARA.png" alt="BICARA BUKU JOHOR" />
                        <br><br>
                        <h3>BICARA BUKU JOHOR</h3>
                    </div>
                </a>
            </div>
            <!-- PENGKARYA MUDA JOHOR -->
            <div class="col-lg-4">
                <a href="https://www.youtube.com/watch?v=0SVFbPJq9vg&ab_channel=PPDKOTATINGGIKPM" class="team-member-link">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle team-photo" src="assets/pengkarya.png" alt="PENGKARYA MUDA JOHOR" />
                        <br><br>
                        <h3>PENGKARYA MUDA JOHOR</h3>
                    </div>
                </a>
            </div>
            <!-- VIDEO KREATIF TVPSS -->
            <div class="col-lg-4">
                <a href="https://www.youtube.com/watch?v=0SVFbPJq9vg&ab_channel=PPDKOTATINGGIKPM" class="team-member-link">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle team-photo" src="assets/TVPSS.png" alt="VIDEO KREATIF TVPSS" />
                        <br><br>
                        <h3>VIDEO KREATIF TVPSS</h3>
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

<section class="page-section" id="pdf-section">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">BORANG PERSETUJUAN DAN PELEPASAN <BR>(BORANG BSKK 05)</h2>
            <h3 class="section-subheading text-muted">Dilampirkan borang perjanjian dan pelepasan.</h3>
        </div>
        <div class="row">
            <!-- PDF Scrolling Container -->
            <div class="col-lg-8">
                <div class="pdf-container">
                    <iframe src="assets/borang.pdf" class="pdf-viewer" frameborder="0"></iframe>
                </div>
            </div>
            <!-- Download Link -->
            <div class="col-lg-4">
                <div class="pdf-info">
                    <p class="text-muted">Borang BSKK 05</p>
                    <a href="assets/borang.pdf" class="download-link" download>Muat Turun</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* PDF Section Styles */
#pdf-section {
    padding: 60px 0;
}

.pdf-container {
    position: relative;
    width: 100%;
    height: 500px; /* Adjust as needed */
    overflow: hidden;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.pdf-viewer {
    width: 100%;
    height: 100%;
    border: none;
}

.pdf-info {
    text-align: center;
    margin-top: 30px;
}

.download-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff; /* Blue background */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.download-link:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

.pdf-info p {
    margin-bottom: 10px;
}

</style>


               
      
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


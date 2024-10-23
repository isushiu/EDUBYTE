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
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">SELAMAT DATANG</div>
                <div class="masthead-heading text-uppercase">UNIT SUMBER DAN TEKNOLOGI PENDIDIKAN</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#about">Info Selanjutnya</a>
            </div>
        </header>
                <!-- About-->
            <section class="page-section" id="about">
            <div class="container">
                <div class="text-6center">
                    <h2 class="section-heading text-uppercase"><center>Info</center></h2>
                    <style>
                        .gallery {
                            position: relative;
                            max-width: 800px;
                            margin: auto;
                            overflow: hidden;
                            border-radius: 15px;
                            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7);
                        }

                        .gallery-images {
                            position: relative;
                        }

                        .gallery-photo {
                            width: 100%;
                            height: auto;
                            object-fit: cover;
                            position: absolute;
                            opacity: 0;
                            transition: opacity 1s ease-in-out;
                        }

                        .gallery-photo.active {
                            opacity: 1; 
                            position: relative; 
                        }
                    </style>
                    <div class="gallery">
                        <div class="gallery-images">
                            <img src="assets/img/main.jpg" alt="Photo 1" class="gallery-photo">
                            <img src="assets/img/azam.jpg" alt="Photo 2" class="gallery-photo">
                            <img src="assets/img/kamal.jpg" alt="Photo 3" class="gallery-photo">
                            <img src="assets/img/shaifuzi.jpg" alt="Photo 4" class="gallery-photo">
                            <img src="assets/img/zimah.jpg" alt="Photo 5" class="gallery-photo">
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

                        function autoSlide() {
                            setInterval(() => {
                                showPhoto(currentIndex + 1);  
                            }, 5000);  
                        }

                        
                        showPhoto(currentIndex);

                        
                        autoSlide();
                    </script>
                    <h3 class="section-subheading text-muted"> </h3>
                </div>
                <p class="text-muted" style="text-align: center; max-width: 600px; margin: 0 auto;">Unit Sumber dan Teknologi Pendidikan (USTP) yang bernaung di bawah 
                <span style="background-color: #FFFF99; padding: 0 3px; border-radius: 3px;">Pejabat Pendidikan Daerah (PPD) Kota Tinggi komited untuk memperkasa pendidikan melalui teknologi.</span> Kami menyediakan pelbagai latihan dan pendedahan teknologi pendidikan, 
                    membimbing serta menyokong dalam pembinaan bahan pengajaran dan pembelajaran digital (PDPC) yang inovatif dan kreatif. 
                    Tambahan lagi, kami aktif dalam pembangunan serta penyebaran bahan teknologi pendidikan bagi memastikan guru-guru sentiasa dilengkapi dengan sumber terkini.</p>
            </div>
        </section>
        <!-- Fungsi USTP -->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Fungsi Unit Sumber dan Teknologi Pendidikan</h2>
                    <h3 class="section-subheading text-muted"> </h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-6 mb-4">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-solid fa-brain fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3">Latihan dan Pendedahan Teknologi Pendidikan</h4>
                                <br><p></p>
                                <p class="text-muted">Merancang dan melaksanakan latihan serta memberi pendedahan dan bidang teknologi pendidikan bagi meningkatkan keupayaan guru-guru dalam PDPC.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-solid fa-chalkboard-user fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3">Bimbingan dan Sokongan dalam Pembinaan Bahan PDPC</h4>
                                <p class="text-muted">Melaksanakan bimbingan dan sokongan kepada sekolah dalam aspek dalam pembinaan, penilaian dan pemilihan bahan yang sesuai untuk PDPC dan pengurusan serta penggunaan pusat sumber sekolah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-solid fa-lightbulb fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3">Inovasi dan Kreativiti dalam PDPC</h4>
                                <br>
                                <p class="text-muted">Merancang, melaksana dan memberi khidmat bimbingan dan kepakaran teknologi pendidikan bagi mempertingkatkan inovasi dan kreativiti dalam PDPC.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fas fa-solid fa-laptop fa-stack-1x fa-inverse"></i>
                                </span>
                                <h4 class="my-3">Pembangunan dan Penyebaran Bahan Teknologi Pendidikan</h4>
                                <p class="text-muted">Merancang, melaksana dan mengawal selia aktiviti pembangunan bahan teknologi pendidikan berasaskan PDP dan penyebaran dalam pelbagai media kepada pelajar. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <!-- Menu USTP-->
                <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Aktiviti USTP</h2>
                    <h3 class="section-subheading text-muted">   </h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/p1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pemerkasan Murid Pusat Sumber Sekolah</div>
                                <!---<div class="portfolio-caption-subheading text-muted">Illustration</div>--->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/p2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sumber Pendidikan<br><br></div>
                                <!---<div class="portfolio-caption-subheading text-muted">Graphic Design</div>--->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/p3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pendidikan Digital<br><br></div>
                                <!---<div class="portfolio-caption-subheading text-muted">Identity</div>--->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/p4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Aplikasi Media Pendidikan<br><br></div>
                                <!---<div class="portfolio-caption-subheading text-muted">Branding</div>--->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/p5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pengurusan<br><br></div>
                                <!---<div class="portfolio-caption-subheading text-muted">Website Design</div>--->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/p6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sijil Penyertaan Sumber Pendidikan</div>
                                <!---<div class="portfolio-caption-subheading text-muted">Photography</div>--->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ahli USTP-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">AHLI-AHLI USTP</h2>
                    <h3 class="section-subheading text-muted"> </h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Zimah.jpg" alt="..." />
                            <h4>NORAZIMAH BINTI ALLAWUDDIN</h4>
                            <p class="text-muted">PEN. PPD SUMBER DAN TEKNOLOGI PENDIDIKAN</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://wa.me/60137294269" aria-label="Whatsapp Puan Zymah"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="mailto:zimah.nora06@moe.gov.my" aria-label="Email Puan Zymah"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Shaifuzi.jpg" alt="..." />
                            <h4>SHAIFUZI BIN MOHD JOFRRY</h4><br />
                            <p class="text-muted">PEN. PPD SUMBER DAN TEKNOLOGI PENDIDIKAN</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://wa.me/60137294269" aria-label="Whatsapp Encik Shaifuzi"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="mailto:shaifuzi.jofrry@moe.gov.my" aria-label="Email Encik Shaifuzi"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Kamal.jpg" alt="..." />
                            <h4>MOHD KAMAL ISKANDAR BIN MOHD SHAFRI</h4>
                            <p class="text-muted">PEN. PPD SUMBER DAN TEKNOLOGI PENDIDIKAN</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://wa.me/60127259255" aria-label="Whatsapp Encik Kamal"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="mailto:kamal.iskandar@moe.gov.my" aria-label="Email Encik Kamal"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Maklumbalas</h2>
                    <h3 class="section-subheading text-muted">Masukkan segala maklumat di bawah jika mempunyai sebarang pertanyaan. Maklumbalas dari anda amat kami hargai.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nama Anda*" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama diperlukan.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Email Anda *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email diperlukan.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak sah.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Nombor Telefon *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Nombor telefon diperlukan</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Mesej Anda *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Mesej diperlukan.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Penyerahan Borang Berjaya!</div>
                            Untuk mengaktifkan borang ini, daftar di
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Ralat menghantar mesej!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Hantar</button></div>
                </form>
            </div>
        </section>
<!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">PEMERKASAAN MURID PUSAT SUMBER SEKOLAH</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/p1.jpg" alt="..." />
                                    <p>Pemerkasaan murid melalui pusat sumber sekolah adalah inisiatif penting dalam membina budaya pembelajaran kendiri yang proaktif. Melalui akses kepada pelbagai sumber, murid dapat memperkaya ilmu pengetahuan di luar bilik darjah dan meningkatkan kemahiran berfikir kritis.</p>
                                    <a class="btn btn-primary btn-xl text-uppercase" href="pemerkasaan_page.php">
                                        Selanjutnya
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SUMBER PENDIDIKAN</h2>                                   
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/p2.jpg" alt="..." />
                                    <p>Sumber pendidikan yang berkualiti adalah asas kepada keberkesanan proses pengajaran dan pembelajaran. Dengan menyediakan bahan pendidikan yang relevan dan terkini, guru-guru dan murid dapat memanfaatkan sepenuhnya peluang untuk mempertingkatkan pencapaian akademik.</p>
                                    <a class="btn btn-primary btn-xl text-uppercase" href="sumber_pendidikan.php">
                                        Selanjutnya
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                            <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">PENDIDIKAN DIGITAL</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/p3.jpg" alt="..." />
                                    <p>Pendidikan digital membawa transformasi besar dalam dunia pendidikan, menyediakan akses kepada teknologi yang memperkasa pengajaran dan pembelajaran. Dengan penggunaan alat-alat digital, proses pembelajaran menjadi lebih dinamik dan interaktif, menjadikan pembelajaran lebih menarik dan mudah diakses.</p>
                                    <a class="btn btn-primary btn-xl text-uppercase" href="pendidikanDigital.php">
                                        Selanjutnya
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">APLIKASI MEDIA PENDIDIKAN</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/p4.jpg" alt="..." />
                                    <p>Platform digital yang dirancang untuk membantu proses pembelajaran melalui pelbagai media seperti video, audio, teks, atau simulasi interaktif. Aplikasi ini dapat membantu guru dan pelajar dalam mengakses sumber pembelajaran secara lebih efisien dan interaktif.</p>
                                    <a class="btn btn-primary btn-xl text-uppercase" href="aplikasimedia.php">
                                        Selanjutnya
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">DASHBOARD PENGURUSAN</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/p5.jpg" alt="..." />
                                    <p>Dashboard pengurusan berperanan sebagai alat penting untuk memantau dan mengurus data pendidikan secara sistematik. Dengan penyediaan data yang mudah diakses dan dianalisis, ia memudahkan pentadbiran pendidikan dalam membuat keputusan yang lebih tepat dan efisien.</p>
                                    <a class="btn btn-primary btn-xl text-uppercase" href="https://sites.google.com/moe-dl.edu.my/ustpppdkotatinggi/pertandingan-pemerkasaan-murid-pusat-sumber-sekolah?authuser=0">
                                        Selanjutnya
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SIJIL PENYERTAAN SUMBER PENDIDIKAN</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/p6.jpg" alt="..." />
                                    <p>Sijil penyertaan sumber pendidikan adalah pengiktirafan kepada murid atau guru yang berjaya menyertai program-program pendidikan yang bermanfaat. Pengiktirafan ini memberi motivasi kepada mereka untuk terus meningkatkan pengetahuan dan kemahiran dalam pembelajaran.</p>
                                    <a class="btn btn-primary btn-xl text-uppercase" href="sijilpenyertaan.php">
                                        Selanjutnya
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
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


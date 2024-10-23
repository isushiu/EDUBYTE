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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include 'header.php'; ?>

        <!-- Masthead-->
        <header class="masthead" style="background-image: url('assets/BigBG/sumberpendidikan.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
            <div class="container">
                <div class="masthead-subheading">SELAMAT DATANG</div>
                <div class="masthead-heading text-uppercase">SUMBER PENDIDIKAN</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#faq">LIHAT</a>
            </div>
        </header>


        <section class="page-section bg-light" id="faq">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">FAQ MODUL NILAM JOHOR</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <iframe src="https://docs.google.com/presentation/d/1L8NIoabVPPTa0jOyAw3VH7LLVPsvLVBOM4x2hxSaAgI/edit?usp=sharing" style="width: 100%; height: 600px; border: none;" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4">
                        <p>Seksyen ini menyediakan <span style="background-color: #FFFF99; padding: 0 3px; border-radius: 3px;">soalan lazim (FAQ) berkaitan dengan Modul NILAM Johor.</span>
                            Di sini, anda boleh melihat slaid PowerPoint yang mengandungi maklumat penting mengenai modul ini. 
                            Selain itu, anda juga boleh memuat turun slaid untuk rujukan lebih lanjut. 
                            Jika anda mempunyai sebarang pertanyaan tambahan, sila hubungi kami melalui maklumat yang disediakan.</p>
                        <a href="assets/faq.pptx" download="assets/faq.pptx" class="btn btn-primary">Muat Turun PPTX</a>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .faq-section {
                padding: 60px 0;
            }

            .faq-section iframe {
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .faq-section .btn {
                margin-top: 20px;
            }
        </style>

<section class="page-section" id="sheet">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">GOOGLE SHEET NISBAH BUKU</h2>
            <h3 class="section-subheading text-muted">Dilampirkan Spreadsheet bagi Nisbah Buku</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Embed Google Sheet -->
                <div class="embed-container">
                    <iframe src="https://docs.google.com/spreadsheets/d/1frMRC1vILKwrGY9uMijoa-GhG41xpTlT0xp3LqXggU4/edit?usp=sharing" width="100%" height="600" frameborder="0" scrolling="auto"></iframe>
                </div>
                <br>
                <!-- Download Link -->
                <p class="text-center">
                    <a href="https://docs.google.com/spreadsheets/d/1frMRC1vILKwrGY9uMijoa-GhG41xpTlT0xp3LqXggU4/export?format=xlsx" class="btn btn-primary" download>Muat Turun Spreadsheet</a>
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    .embed-container {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #f0f0f0;
    }
    
    .embed-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
    }
    
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>


<section class="page-section bg-light" id="data-pemetaan">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase" style="font-family: 'Poppins', sans-serif;">DATA PEMETAAN</h2>
            <h3 class="section-subheading text-muted" style="font-family: 'Poppins', sans-serif;">Cari Menggunakan Kod Sekolah</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <input type="text" id="schoolCode" class="form-control" placeholder="Masukkan Kod Sekolah" style="border: 2px solid #34E4CB; border-radius: 8px; padding: 10px; font-family: 'Poppins', sans-serif;"/>
                <button class="btn btn-primary mt-3" id="searchButton" style="background-color: #34E4CB; border: none; border-radius: 8px; padding: 10px 20px; font-family: 'Poppins', sans-serif;">Cari</button>
            </div>
        </div>
        <div class="row mt-5" id="resultContainer" style="display:none;">
            <div class="col-lg-12">
                <h4 style="font-family: 'Poppins', sans-serif;">Maklumat Sekolah</h4>
                <div class="table-responsive">
                    <table class="table table-bordered" style="font-family: 'Poppins', sans-serif;">
                        <tbody id="resultBody">
                            <!-- Data will be dynamically inserted here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* General Page Styling */
.page-section {
    padding: 60px 0;
}


.table th {
    background-color: #34E4CB; /* Table header background */
    color: black; /* Header text color stays black */
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    padding: 10px;
}

.table td {
    background-color: #f9f9f9; /* Light background for data rows */
    color: black; /* Text color stays black */
    padding: 12px;
    border: 1px solid #34E4CB; /* Table border color */
}

.table-bordered {
    border: 2px solid #34E4CB; /* Main border color for the table */
}

h2, h3, h4 {
    margin-bottom: 20px;
}

input.form-control {
    transition: border-color 0.3s ease;
}

input.form-control:focus {
    border-color: #34E4CB;
    outline: none;
}

button.btn-primary:hover {
    background-color: #2ec3b0;
    transition: 0.3s;
}

/* Font Import */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
</style>

<script>
$(document).ready(function() {
    $('#searchButton').click(function() {
        const schoolCode = $('#schoolCode').val().trim();
        if (!schoolCode) {
            alert('Sila masukkan kod sekolah.');
            return;
        }

        $.ajax({
            url: 'get_data_pemetaan.php',
            type: 'GET',
            data: { KOD_SEKOLAH: schoolCode },
            dataType: 'json',
            success: function(data) {
                console.log(data); // Check the data in the console
                if (data && !data.error) {
                    $('#resultContainer').show();
                    const resultBody = $('#resultBody');
                    resultBody.empty(); // Clear previous results
                    
                    // Add each data field as a row in the table
                    resultBody.append(`
                    <tr style="background-color: #34E4CB;"><td><strong>COLUMN</strong></td><td><strong>BUTIRAN</strong></td></tr>

                        <tr><td><strong>NEGERI:</strong></td><td>${data.NEGERI || 'TIADA'}</td></tr>
                        <tr><td><strong>DAERAH:</strong></td><td>${data.DAERAH || 'TIADA'}</td></tr>
                        <tr><td><strong>ZON:</strong></td><td>${data.ZON || 'TIADA'}</td></tr>
                        <tr><td><strong>KOD SEKOLAH:</strong></td><td>${data.KOD_SEKOLAH || 'TIADA'}</td></tr>
                        <tr><td><strong>NAMA SEKOLAH:</strong></td><td>${data.NAMA_SEKOLAH || 'TIADA'}</td></tr>
                        <tr><td><strong>GRED SEKOLAH:</strong></td><td>${data.GRED_SEKOLAH || 'TIADA'}</td></tr>
                        <tr><td><strong>KATEGORI:</strong></td><td>${data.KATEGORI || 'TIADA'}</td></tr>
                        <tr><td><strong>NAMA PENGETUA/GURU BESAR:</strong></td><td>${data.NAMA_PENGETUA_GURU_BESAR || 'TIADA'}</td></tr>
                        <tr><td><strong>BILANGAN GURU:</strong></td><td>${data.BILANGAN_GURU || 'TIADA'}</td></tr>
                        <tr><td><strong>BILANGAN MURID:</strong></td><td>${data.BILANGAN_MURID || 'TIADA'}</td></tr>
                        <tr><td><strong>NAMA PENUH GPM:</strong></td><td>${data.NAMA_PENUH_GPM || 'TIADA'}</td></tr>
                        <tr><td><strong>NO KAD PENGENALAN:</strong></td><td>${data.NO_KAD_PENGENALAN || 'TIADA'}</td></tr>
                        <tr><td><strong>OPSYEN:</strong></td><td>${data.OPSYEN || 'TIADA'}</td></tr>
                        <tr><td><strong>GRED DG:</strong></td><td>${data.GRED_DG || 'TIADA'}</td></tr>
                        <tr><td><strong>BILANGAN MASA MENGAJAR:</strong></td><td>${data.BILANGAN_MASA_MENGAJAR || 'TIADA'}</td></tr>
                        <tr><td><strong>TARIKH LANTIKAN PERTAMA:</strong></td><td>${data.TARIKH_LANTIKAN_PERTAMA || 'TIADA'}</td></tr>
                        <tr><td><strong>TARIKH LANTIKAN GPM:</strong></td><td>${data.TARIKH_LANTIKAN_GPM || 'TIADA'}</td></tr>
                        <tr><td><strong>TEMPOH SEBAGAI GPM:</strong></td><td>${data.TEMPOH_SEBAGAI_GPM || 'TIADA'}</td></tr>
                        <tr><td><strong>NO TELEFON:</strong></td><td>${data.NO_TELEFON || 'TIADA'}</td></tr>
                        <tr><td><strong>EMEL PERIBADI:</strong></td><td>${data.EMEL_PERIBADI || 'TIADA'}</td></tr>
                        <tr><td><strong>EMEL DELIMA:</strong></td><td>${data.EMEL_DELIMA || 'TIADA'}</td></tr>
                        <tr><td><strong>NAMA PUSAT SUMBER SEKOLAH:</strong></td><td>${data.NAMA_PUSAT_SUMBER_SEKOLAH || 'TIADA'}</td></tr>
                        <tr><td><strong>JUMLAH PCG:</strong></td><td>${data.JUMLAH_PCG || 'TIADA'}</td></tr>
                        <tr><td><strong>JUMLAH BUKU:</strong></td><td>${data.JUMLAH_BUKU || 'TIADA'}</td></tr>
                        <tr><td><strong>SISTEM AUTOMASI:</strong></td><td>${data.SISTEM_AUTOMASI || 'TIADA'}</td></tr>
                        <tr><td><strong>JENIS SISTEM AUTOMASI:</strong></td><td>${data.JENIS_SISTEM_AUTOMASI || 'TIADA'}</td></tr>
                        <tr><td><strong>RAK BUKU MAYA DIGITAL:</strong></td><td>${data.RAK_BUKU_MAYA_DIGITAL || 'TIADA'}</td></tr>
                        <tr><td><strong>JENIS RAK BUKU MAYA:</strong></td><td>${data.JENIS_RAK_BUKU_MAYA || 'TIADA'}</td></tr>
                        <tr><td><strong>CHANNEL TVPSS:</strong></td><td>${data.CHANNEL_TVPSS || 'TIADA'}</td></tr>
                        <tr><td><strong>PAUTAN CHANNEL TVPSS:</strong></td><td>${data.PAUTAN_CHANNEL_TVPSS || 'TIADA'}</td></tr>
                    `);
                } else {
                    alert('Data tidak dijumpai untuk kod sekolah tersebut.');
                }
            },
            error: function(err) {
                alert('Terdapat ralat dalam mendapatkan data. Sila cuba lagi.');
                console.error(err);
            }
        });
    });
});
</script>








               
      
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


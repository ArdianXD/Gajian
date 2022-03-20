<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gajian | Perhitungan Total Gaji</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.php">Gajian</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php">About</a></li>
                    <li><a class="nav-link scrollto" href="index.php">Perhitungan</a></li>
                    <li><a class="nav-link scrollto" href="index.php">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">About</a></li>
                            <li><a href="index.php">Perhitungan</a></li>
                            <li><a href="index.php">Team</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="index.php">Contact</a></li>
                    <li><a class="getstarted scrollto" href="index.php">Kembali</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Perhitungan Total Gaji</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Hero Section ======= -->

    <!-- Perhitungan Section -->
    <section id="perhitungan" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Form</h2>
            </div>
            <form class="form-group row g-3 mt-1" method="post" action="hasil.php">
                <div class="col-lg-6">
                    <label for="inputNama" class="form-label">Nama </label><br>
                    <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col-lg-6">
                    <label for="inputNIK" class="form-label">NIK</label><br>
                    <input type="text" class="form-control" placeholder="NIK" name="nik" required>
                </div>
                <div class="col-lg-6">
                    <label for="inputState" class="form-label">
            <strong>Golongan</strong>
            </label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="inputState" name="golongan">
            <option value="2500000">Golongan 1 (Rp. 2,500,000)</option>
            <option value="3250000">Golongan 2 (Rp. 3,250,000)</option>
            <option value="4000000">Golongan 3 (Rp. 4,000,000)</option>
          </select>
                </div>
                <div class="col-lg-6">
                    <label for="inputState" class="form-label">
            <strong>Tunjangan</strong>
            </label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="inputState" name="tunjangan">
            <option value="100000">Rp. 100,000 </option>
            <option value="200000">Rp. 200,000 </option>
            <option value="300000">Rp. 300,000 </option>
            <option value="400000">Rp. 400,000 </option>
            <option value="500000">Rp. 500,000 </option>
            <option value="600000">Rp. 600,000 </option>
            <option value="700000">Rp. 700,000 </option>
            <option value="800000">Rp. 800,000 </option>
            <option value="900000">Rp. 900,000 </option>
            <option value="1000000">Rp. 1,000,000 </option>
          </select>
                </div>
                <div class="col-lg-6">
                    <label for="inputState" class="form-label">
            <strong>Potongan</strong>
            </label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="inputState" name="potongan">
            <option value="100000">Rp. 100,000 </option>
            <option value="200000">Rp. 200,000 </option>
            <option value="300000">Rp. 300,000 </option>
            <option value="400000">Rp. 400,000 </option>
            <option value="500000">Rp. 500,000 </option>
            <option value="600000">Rp. 600,000 </option>
            <option value="700000">Rp. 700,000 </option>
            <option value="800000">Rp. 800,000 </option>
            <option value="900000">Rp. 900,000 </option>
            <option value="1000000">Rp. 1,000,000 </option>
          </select>
                </div>
                <div class="text-center">
                    <input type="submit" name="submit" value="submit" class="btn-get-started scrollto"></a>
                </div>
        </form>
        </div>
    </section>
    <!-- End Perhitungan Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Gajian</h3>
                        <p>
                            <strong>Phone:</strong> +62 81211690387<br>
                            <strong>Email:</strong> ardian25hilman@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>

            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://www.instagram.com/not_ardian_hilman/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/ardian-hilman-8512ab1b6/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Bootslander Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="client/client/assets/img/favicon.png" rel="icon">
    <link href="client/client/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="client/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="client/assets/css/main.css" rel="stylesheet">
    <style>
        /* Styling for Data Visualization Section */
        .data-visualization {
            padding: 60px 0;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-align: center;
            color: #003366;
            /* Biru gelap untuk judul */
            font-weight: bold;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
            /* Efek bayangan lebih halus */
        }

        .table {
            width: 100%;
            margin: 0 auto;
            border-collapse: separate;
            /* Memisahkan border agar lebih mudah menambahkan border-radius */
            border-radius: 12px;
            /* Border-radius untuk sudut tabel yang lebih halus */
            overflow: hidden;
            /* Untuk memastikan border-radius terlihat pada elemen tabel */
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Bayangan tabel untuk efek kedalaman */
        }

        .table thead th {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            /* Gradient biru untuk latar belakang header */
            color: #0277bd;
            /* Biru tua untuk teks header */
            padding: 15px 20px;
            /* Padding ditingkatkan untuk tampilan lebih luas */
            text-align: center;
            font-weight: bold;
            border-bottom: 2px solid #90caf9;
            /* Garis bawah lebih tebal dengan warna biru */
        }

        .table tbody td {
            padding: 15px 20px;
            /* Padding ditingkatkan untuk tampilan lebih luas */
            text-align: center;
            border-top: 1px solid #ddd;
            /* Garis pemisah antara baris tabel */
            background-color: #ffffff;
            /* Warna latar belakang putih untuk sel tabel */
            transition: background-color 0.3s ease;
            /* Transisi halus untuk efek hover */
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9fbe7;
            /* Biru muda kekuningan untuk baris ganjil tabel */
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #ddd;
        }

        .table tbody tr:hover {
            background-color: #e1f5fe;
            /* Biru muda lebih terang untuk efek hover */
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
            /* Bayangan dalam untuk efek hover */
        }

        .chart-container {
            width: 200px;
            height: 70px;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 12px;
            /* Border-radius untuk sudut container grafik yang lebih halus */
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            /* Gradient biru untuk latar belakang container grafik */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Bayangan yang lebih halus untuk tampilan lebih modern */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .table-responsive {
            overflow-x: auto;
            border-radius: 12px;
            /* Border-radius untuk sudut kontainer tabel */
            border: 1px solid #ddd;
            background-color: #fff;
            /* Background putih untuk kontainer tabel */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Bayangan untuk efek kedalaman */
            padding: 5px;
            /* Padding tambahan untuk kontainer tabel responsif */
        }

        /* auth/style.css atau file CSS lainnya */
        .growth {
            color: #4caf50;
            /* Hijau */
            font-weight: bold;
        }

   
    /* Optional additional styles for customization */
    #prediksi {
        border-top: 2px solid #007bff;
    }

    .card {
        border-radius: 0.75rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.2s, border-color 0.2s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .alert-success {
        border-radius: 0.75rem;
    }


    </style>
    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 01 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="client/client/assets/img/logo.png" alt="">
                <h1 class="sitename">Simo</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#stats">Stats</a></li>
                    <li><a href="#data-visualization">Data</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#faq">Faq</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="client/assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="client/assets/img/header-logo-removebg-preview.png" class="img-fluid animated" alt="">
                    </div>

                    <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                        <h1>Analisis Sentimen Berita Indonesia<span></span></h1>
                        <p>Temukan tren sentimen yang sedang berkembang dan buat keputusan yang lebih baik</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Mulai Mengekplorasi</a>
                        </div>
                    </div>

                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">

                    <div class="col-xl-5 content">
                        <h3>Tentang Kami</h3>
                        <h2>Memberdayakan Wawasan melalui Analisis Sentimen</h2>
                        <p>Kami mengkhususkan diri dalam analisis sentimen terhadap portal berita online untuk
                            memberikan wawasan berharga tentang opini publik dan tren. Teknologi dan metodologi mutakhir
                            kami memungkinkan kami untuk menganalisis sejumlah besar data guna mengungkap pola sentimen
                            dan memberikan intelijen yang dapat ditindaklanjuti. Kami berdedikasi untuk membantu bisnis
                            dan organisasi memahami nada emosional dari liputan berita untuk membuat keputusan yang
                            terinformasi.</p>
                        <a href="#" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h3>Analisis Canggih</h3>
                                    <p>Menggunakan algoritma canggih untuk menganalisis sentimen dan mengekstrak wawasan
                                        kunci dari artikel berita.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-bar-chart"></i>
                                    <h3>Pemantauan Real-Time</h3>
                                    <p>Memantau sentimen berita secara real-time untuk menyediakan informasi yang
                                        terkini dan relevan.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-pie-chart"></i>
                                    <h3>Laporan Komprehensif</h3>
                                    <p>Menyiapkan laporan terperinci yang menggambarkan tren sentimen, tema utama, dan
                                        dampak potensial.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-bezier2"></i>
                                    <h3>Solusi Kustom</h3>
                                    <p>Menawarkan solusi yang disesuaikan dengan kebutuhan spesifik klien, mulai dari
                                        lembaga media hingga institusi riset.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->


        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <i class="bi bi-bar-chart" style="color: #ffbb2c;"></i>
                            <h3><a href="" class="stretched-link">Analisis Sentimen</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-item">
                            <i class="bi bi-calendar-event" style="color: #5578ff;"></i>
                            <h3><a href="" class="stretched-link">Pemantauan Real-Time</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-item">
                            <i class="bi bi-clipboard-data" style="color: #e80368;"></i>
                            <h3><a href="" class="stretched-link">Laporan Mendalam</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="features-item">
                            <i class="bi bi-tools" style="color: #e361ff;"></i>
                            <h3><a href="" class="stretched-link">Integrasi Mudah</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <i class="bi bi-shield-check" style="color: #47aeff;"></i>
                            <h3><a href="" class="stretched-link">Keamanan Data</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="features-item">
                            <i class="bi bi-pie-chart" style="color: #ffa76e;"></i>
                            <h3><a href="" class="stretched-link">Visualisasi Data</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="features-item">
                            <i class="bi bi-people" style="color: #11dbcf;"></i>
                            <h3><a href="" class="stretched-link">Dukungan Pelanggan</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="features-item">
                            <i class="bi bi-speedometer" style="color: #4233ff;"></i>
                            <h3><a href="" class="stretched-link">Kinerja Tinggi</a></h3>
                        </div>
                    </div><!-- End Feature Item -->
                    <!-- End Feature Item -->

                </div>

            </div>

        </section><!-- /Features Section -->



        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-bar-chart" style="color: #ffbb2c;"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Artikel Berita Teranalisis</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-calendar" style="color: #5578ff;"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="365" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hari Pemantauan</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-graph-up" style="color: #e80368;"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Jumlah Berita</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-person" style="color: #e361ff;"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Tim Pengembang</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->
        <!-- Data Visualization Section -->
        <section id="data-visualization" class="data-visualization section light-background">
            <div class="container">
                <h2 class="section-title">Visualisasi Data</h2>

                <div class="table-responsive">
                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>User Target</th>
                                <th>Total Berita</th>
                                <th>Peningkatan Grafik (Per Bulan)</th>
                                <th>Growth (%)</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <!-- Data tabel akan diisi di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section><!-- /Data Visualization Section -->


        <section id="prediksi" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Coba Prediksi Sentimentnya</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ route('predict') }}">
                            @csrf
                            <div class="form-group">
                                <label for="inputText" class="form-label">Masukkan Text:</label>
                                <textarea class="form-control" id="inputText" rows="6"
                                    placeholder="Tuliskan text kamu di sini" name="text" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg mt-3 w-100">Analyze Sentiment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if(isset($prediction))
            <div class="alert alert-success mt-4" role="alert">
                <h4 class="alert-heading">Prediction Result:</h4>
                <p class="mb-0">{{ $prediction }}</p>
            </div>
        @endif
    </div>
</section>


        <!-- Details Section -->
        <section id="details" class="details section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Detail Fitur</h2>
                <div><span>Periksa </span> <span class="description-title">Fitur Utama Kami</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="client/assets/img/details-1.png" class="img-fluid" alt="Analisis Sentimen">
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Analisis Sentimen yang Mendalam</h3>
                        <p class="fst-italic">
                            Sistem kami menggunakan teknik analisis sentimen canggih untuk memahami sentimen dari berita
                            online.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i><span> Analisis sentimen yang akurat dan cepat.</span></li>
                            <li><i class="bi bi-check"></i> <span>Dukungan untuk berbagai bahasa dan platform
                                    berita.</span></li>
                            <li><i class="bi bi-check"></i> <span>Visualisasi hasil analisis untuk pemahaman yang lebih
                                    baik.</span></li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="client/assets/img/details-2.png" class="img-fluid" alt="Pemantauan Real-Time">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Pemantauan Berita Real-Time</h3>
                        <p class="fst-italic">
                            Kami menawarkan pemantauan berita secara real-time untuk memberikan informasi terkini kepada
                            Anda.
                        </p>
                        <p>
                            Sistem kami memungkinkan Anda untuk mengikuti berita terbaru secara langsung dan mendapatkan
                            pembaruan
                            tentang sentimen berita secara otomatis. Ini memastikan bahwa Anda selalu mendapatkan
                            informasi yang
                            relevan dan terkini.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="client/assets/img/details-3.png" class="img-fluid" alt="Laporan Mendalam">
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <h3>Laporan Mendalam dan Terperinci</h3>
                        <p>Kami menyediakan laporan mendalam yang menganalisis tren sentimen dan pola dari berita yang
                            dianalisis.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Rangkuman tren sentimen utama dari berita.</span></li>
                            <li><i class="bi bi-check"></i><span>Insight yang mendalam mengenai sentimen publik.</span>
                            </li>
                            <li><i class="bi bi-check"></i> <span>Laporan yang dapat disesuaikan sesuai kebutuhan
                                    Anda.</span></li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="client/assets/img/details-4.png" class="img-fluid" alt="Integrasi dan Keamanan">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <h3>Integrasi Mudah dan Keamanan Data</h3>
                        <p class="fst-italic">
                            Sistem kami mudah diintegrasikan dengan berbagai platform dan menjaga keamanan data Anda.
                        </p>
                        <p>
                            Kami memastikan bahwa data Anda aman dan terjaga dengan standar keamanan tinggi. Sistem kami
                            juga
                            dirancang untuk integrasi yang mudah dengan berbagai platform analisis dan pelaporan.
                        </p>
                    </div>
                </div><!-- Features Item -->

            </div>

        </section><!-- /Details Section -->



        <section id="testimonials" class="testimonials section dark-background">

            <img src="client/assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="Background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            }
                        }

                    </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="client/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="Client 1">
                                <h3>Anna Pradita</h3>
                                <h4>Analisis Berita</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Sistem analisis sentimen ini telah memberikan kami wawasan yang mendalam
                                        tentang persepsi publik terhadap berita. Hasilnya akurat dan mudah
                                        dipahami.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="client/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="Client 2">
                                <h3>Rizky Mahendra</h3>
                                <h4>Editor Berita</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Platform ini sangat membantu dalam memantau tren sentimen berita secara
                                        real-time. Ini memberikan kami keuntungan kompetitif yang signifikan.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="client/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="Client 3">
                                <h3>Diana Wulan</h3>
                                <h4>Manajer Media Sosial</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Kami sangat terkesan dengan akurasi dan kecepatan sistem ini. Ini membantu
                                        kami memahami sentimen publik dengan lebih baik dan membuat keputusan yang lebih
                                        baik.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="client/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="Client 4">
                                <h3>Fadli Kurniawan</h3>
                                <h4>Jurnalis</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Sistem ini sangat membantu dalam analisis berita dan memberikan kami data yang
                                        bermanfaat untuk riset dan laporan.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="client/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="Client 5">
                                <h3>Lisa Hartanto</h3>
                                <h4>Pengelola Konten</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Ini adalah alat yang sangat berguna untuk menganalisis opini publik. Data yang
                                        diberikan sangat akurat dan mendalam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->


        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <div><span>Check Our</span> <span class="description-title">Team</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5 justify-content-center">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="pic"><img src="client/assets/img/team/fotoemail.png" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Dhika Ro'id Hakim</h4>
                                <span>Developer<br>Data Analyst</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->


        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <div><span>Check Our</span> <span class="description-title">Pricing</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="alert alert-info text-center mb-4" role="alert">
                    <strong>Note:</strong> This section is currently under development. Pricing information will be
                    available soon.
                </div>
            </div>

        </section><!-- /Pricing Section -->


        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <div class="container-fluid">

                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3><span>Pertanyaan </span><strong>Yang Sering Diajukan</strong></h3>
                            <p>
                                Temukan jawaban untuk pertanyaan umum mengenai analisis sentimen dan bagaimana portal
                                berita online kami
                                dapat membantu Anda memahami opini publik tentang berita terbaru.
                            </p>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                            <!-- FAQ Item -->
                            <div class="faq-item faq-active">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Apa itu analisis sentimen dalam konteks portal berita online?</h3>
                                <div class="faq-content">
                                    <p>Analisis sentimen adalah teknik yang digunakan untuk memahami dan
                                        mengklasifikasikan opini publik terhadap
                                        berita atau artikel di portal berita online. Dengan menganalisis kata-kata dan
                                        frasa dalam artikel
                                        berita, kami dapat mengidentifikasi apakah sentimen umum adalah positif,
                                        negatif, atau netral. Ini
                                        membantu pembaca dan analis memahami bagaimana berita diterima oleh masyarakat
                                        dan mengidentifikasi
                                        tren sentimen dari waktu ke waktu.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <!-- FAQ Item -->
                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Bagaimana cara kerja analisis sentimen di portal berita ini?</h3>
                                <div class="faq-content">
                                    <p>Kami menggunakan algoritma pemrosesan bahasa alami (NLP) dan teknik machine
                                        learning untuk menganalisis
                                        konten berita dari berbagai sumber. Artikel berita diproses untuk
                                        mengidentifikasi kata-kata kunci
                                        dan frasa yang menunjukkan sentimen. Hasil analisis kemudian diklasifikasikan
                                        menjadi kategori positif,
                                        negatif, atau netral, dan ditampilkan dalam bentuk visualisasi atau ringkasan
                                        untuk memudahkan pemahaman.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <!-- FAQ Item -->
                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Apakah analisis sentimen ini dapat digunakan untuk semua jenis berita?</h3>
                                <div class="faq-content">
                                    <p>Ya, analisis sentimen kami dapat diterapkan pada berbagai jenis berita, termasuk
                                        berita politik, ekonomi,
                                        hiburan, dan lainnya. Sistem kami dirancang untuk menangani berbagai topik dan
                                        memberikan wawasan
                                        tentang bagaimana berita di setiap kategori diterima oleh publik. Ini
                                        memungkinkan pengguna untuk
                                        mendapatkan gambaran menyeluruh tentang tren sentimen di berbagai area berita.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="client/assets/img/faq.jpg" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- /Faq Section -->


        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <div><span>Check Our</span> <span class="description-title">Contact</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Blok Sukamekar</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Hubungi Kami</h3>
                                <p>08815177678</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>yokim051019@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Simo</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Blok Sukamekar</p>
                        <p>Cigadung Subang</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>0881934932</span></p>
                        <p><strong>Email:</strong> <span>yokim051019@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">

                </div>

                <div class="col-lg-2 col-md-3 footer-links">

                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Bootslander</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="client/assets/vendor/php-email-form/validate.js"></script>
    <script src="client/assets/vendor/aos/aos.js"></script>
    <script src="client/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="client/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="client/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Include ECharts Library -->
    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
    <!-- Include jQuery and DataTables Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />



    <!-- Main JS File -->
    <script src="client/kostum.js"></script>
    <script src="client/assets/js/main.js"></script>

</body>

</html>

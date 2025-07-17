<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    {{-- font family --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <style>
            .text-justify {
                text-align: justify;
            }
        </style>


</head>

<body>

<div style="background-color: #1a94aa;">
            <!-- Responsive navbar-->
            <nav class="navbar navbar-expand-lg navbar  bg-transparent">
                <div class="container px-5">
                    <a class="navbar-brand d-flex align-items-center gap-2 text-white fw-bold" href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo"
                        class="bg-white rounded-circle border-white" style="height: 40px;">
                        ListrikIN
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white">
                            <li class="nav-item"><a class="nav-link active text-white fw-semibold" aria-current="page"
                                    href="/">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#tentang">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#layanan">Layanan</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="/cek-tagihan">Cek Tagihan</a></li>
                            @guest
                                <li class="nav-item" wire:navigate><a class="nav-link text-white ms-2"
                                        href="/admin/login">Masuk</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Header-->
        <div>
        <header class="bg-transparent py-5 ">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-black mb-2">
                                Tagihan Beres, Hidup Terang Terus!
                            </h1>
                            <p class=" text-black mb-4 fw-medium">Bayar Listrik Pascabayar Sekarang, Cepat, Aman & Tanpa Antri!</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-lg px-4 me-sm-3 fw-medium text-white" href="/cek-tagihan" 
                                style="background-color: #1a94aa; border-color: #1a94aa;">
                                Cek Tagihan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <!-- About section -->
    <section id="tentang" class="py-5 bg-light">
        <div class="container px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Tentang Perusahaan</h2>
                <p class="lead text-muted">Kenali lebih dekat siapa kami dan misi kami.</p>
            </div>
            <div class="row gx-5">
                <!-- Siapa Kami -->
                <div class="col-lg-6 mb-4">
                    <div class="h-100 p-4 border rounded bg-white shadow-sm">
                        <h4 class="fw-bold mb-3 text-dark">⚡ Siapa Kami?</h4>
                        <p class="text-justify">
                            <strong>ListrikIN</strong> adalah platform digital yang menyediakan layanan pembayaran listrik pascabayar secara online, cepat, dan aman. Kami hadir untuk memudahkan masyarakat Indonesia dalam mengelola tagihan listrik tanpa harus antre dan tanpa batas waktu.
                            <br><br>
                            Kami percaya bahwa kebutuhan dasar seperti listrik harus didukung oleh sistem layanan yang efisien dan terpercaya. Karena itu, kami membangun solusi yang mengutamakan kemudahan pengguna, keamanan transaksi, dan kecepatan proses.
                        </p>
                    </div>
                </div>

                <!-- Visi & Misi -->
                <div class="col-lg-6 mb-4">
                    <div class="h-100 p-4 border rounded bg-white shadow-sm">
                        <h4 class="fw-bold mb-3 text-dark">🎯 Visi & Misi</h4>
                        <p class="text-muted mb-2"><strong>Visi:</strong><br>
                            Menjadi platform pembayaran listrik terpercaya yang membantu masyarakat Indonesia menjalani hidup lebih praktis dan bebas repot.
                        </p>
                        <p class="text-muted mb-0"><strong>Misi:</strong></p>
                        <ul class="text-muted mb-0">
                            <li>Menyediakan layanan pembayaran listrik pascabayar yang mudah diakses oleh siapa saja.</li>
                            <li>Meningkatkan efisiensi proses pembayaran melalui teknologi digital.</li>
                            <li>Menjaga keamanan dan kenyamanan pelanggan dalam setiap transaksi.</li>
                            <li>Berkomitmen berkolaborasi dengan mitra terpercaya demi membangun ekosistem pembayaran yang handal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features section-->
<section class="py-5 border-bottom bg-grey" id="layanan" style="background-color: #e7f6f9">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-3 mb-5">
                <div class="text-center mt-1 mb-1">
                    <img src="/assets/img/terhubung.svg" style="width:75px" alt="">
                </div>
                <h2 class="h5 fw-bolder text-center">Terhubung Langsung ke PLN</h2>
                <p style="text-align: justify">
                    ListrikIN terkoneksi langsung dengan sistem resmi PLN, sehingga data tagihan yang Anda lihat benar-benar real-time dan akurat. 
                    Tidak ada selisih tagihan, tidak ada keterlambatan proses.
                </p>
            </div>

            <div class="col-lg-3 mb-5">
                <div class="text-center mt-1 mb-1">
                    <img src="/assets/img/instant.svg" style="width:75px" alt="">
                </div>
                <h2 class="h5 fw-bolder text-center">Instan & Nyaman</h2>
                <p style="text-align: justify">
                    Sistem kami dirancang untuk memproses pembayaran dalam hitungan detik. Nikmati pengalaman membayar tagihan listrik yang mulus dan efisien.
                </p>
            </div>

            <div class="col-lg-3 mb-5">
                <div class="text-center mt-1 mb-1">
                    <img src="/assets/img/riwayat.svg" style="width:75px" alt="">
                </div>
                <h2 class="h5 fw-bolder text-center">Riwayat Pembayaran Tertata</h2>
                <p style="text-align: justify">
                    Setiap transaksi Anda akan tercatat dan dapat dilihat kembali di halaman riwayat. Tidak perlu khawatir kehilangan bukti bayar, semua data tersimpan dan dapat diakses kapan saja.
                </p>
            </div>

            <div class="col-lg-3 mb-5">
                <div class="text-center mt-1 mb-1">
                    <img src="/assets/img/24hours.svg" style="width:75px" alt="">
                </div>
                <h2 class="h5 fw-bolder text-center">Penanganan Cepat</h2>
                <p style="text-align: justify">
                    Tim layanan pelanggan kami selalu siap membantu jika Anda mengalami kendala. Hubungi kami melalui live chat, WhatsApp, atau email, dan kami akan bantu dengan sigap.
                </p>
            </div>
        </div>
    </div>
</section>

    {{-- footer --}}
    <div>
        <footer class="py-4" style="background-color: #1a94aa">
            <div class="container px-5">
                <p class="m-0 text-center text-white">Copyright &copy; ListrikIN 2025. Created with ❤️</p>
            </div>
        </footer>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous">
    </script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>



</body>

</html>

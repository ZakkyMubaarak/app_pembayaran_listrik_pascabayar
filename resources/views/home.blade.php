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



</head>

<body>

    <div
        style="background-image: url('assets/img/hero.jpg');background-position-y: -200px;background-position-x:-120px;background-repeat:no-repeat">
        {{-- navbar --}}
        <div>
            <!-- Responsive navbar-->
            <nav class="navbar navbar-expand-lg navbar  bg-transparent">
                <div class="container px-5">
                    <a class="navbar-brand fw-bold text-white" href="/">PascaPay</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white">
                            <li class="nav-item"><a class="nav-link active text-white fw-semibold" aria-current="page"
                                    href="/">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#layanan">Layanan</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#kontak">Kontak</a></li>
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
        <header class="bg-transparent py-5 ">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">
                                Bayar Tagihan Listrik Cepat & Praktis
                            </h1>
                            <p class=" text-white mb-4 fw-medium">Cek dan bayar tagihan listrikmu dalam satu web —
                                aman dan tanpa antrean.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3 fw-medium" href="/cek-tagihan">Cek
                                    Tagihan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- Features section-->
    <section class="py-5 border-bottom bg-white" id="layanan" style="background-color: white">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0 ">
                    <div class=" text-center mt-1 mb-1">
                        <img class="bg-white text-white" src="/assets/img/time.svg" style="width:75px" alt="">
                    </div>
                    <h2 class="h4 fw-bolder text-center">Cepat & Praktis</h2>
                    <p style="text-align: justify">Proses pemesanan hanya dalam hitungan detik! Tanpa ribet, tanpa
                        antri —
                        cukup beberapa klik,
                        pilih pembayaran dan langsung diproses.</p>

                </div>
                <div class="col-lg-4 mb-5 mb-lg-0 ">
                    <div class=" text-center mt-1 mb-1">
                        <img class="bg-white text-white" src="/assets/img/pay.svg" style="width:75px" alt="">
                    </div>
                    <h2 class="h4 fw-bolder text-center">Variasi Pembayaran</h2>
                    <p style="text-align: justify">Mendukung berbagai metode pembayaran mulai dari transfer bank,
                        e-wallet, hingga pembayaran
                        QRIS. Pilih yang paling nyaman untukmu!</p>

                </div>
                <div class="col-lg-4 mb-5 mb-lg-0 ">
                    <div class=" text-center mt-1 mb-1">
                        <img class="bg-white text-white" src="/assets/img/24hours.svg" style="width:75px"
                            alt="">
                    </div>
                    <h2 class="h4 fw-bolder text-center">Pelayanan 24/7</h2>
                    <p style="text-align: justify">Kapan pun kamu butuh, kami selalu siap. Tim kami tersedia 24 jam
                        setiap hari untuk memastikan
                        pengalaman terbaikmu.</p>

                </div>

            </div>
        </div>
    </section>

    <!-- Testimonials section-->
    <section class="py-5 border-bottom bg-white">
        <div class="container px-5 my-5 ">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Customer Testimoni</h2>
                <p class="lead mb-0">Apa kata mereka ?</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- Testimonial 1-->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i
                                        class="bi bi-chat-right-quote-fill text-primary fs-1"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-1"> "Cepat banget prosesnya!
                                        Saya sempat ragu awalnya, tapi ternyata benar-benar praktis dan nggak perlu
                                        nunggu lama. Cocok banget buat yang butuh serba cepat."
                                    </p>
                                    <div class="small text-muted">— Aulia Ramadhani, Jakarta</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2-->
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i
                                        class="bi bi-chat-right-quote-fill text-primary fs-1"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-1">"Pembayarannya fleksibel banget
                                        Saya suka karena bisa bayar lewat e-wallet favorit saya. Nggak perlu repot
                                        transfer antar bank."</p>
                                    <div class="small text-muted">— Rizky Bayek, Bandung</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section class="bg-light py-5" id="kontak">
        <div class="container px-5 my-5 ">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Kontak</h2>
                <p class="lead mb-0">Kami siap membantu!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <div class=" row">
                    <div class="col-md-6 text-center justify-content-center mx-auto">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no"
                                    marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=bina sarana informatika fatmawati&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                    href="https://embed-googlemap.com">embed google map</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 600px;
                                    height: 400px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 600px;
                                    height: 400px;
                                }

                                .gmap_iframe {
                                    width: 600px !important;
                                    height: 400px !important;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text"
                                    placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                </div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email"
                                    placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                                    required.
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                                </div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel"
                                    placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                    required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                    style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                    required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                                    type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>










    {{-- footer --}}
    <div>
        <footer class="py-4 bg-dark">
            <div class="container px-5">
                <p class="m-0 text-center text-white">Copyright &copy; Ferdinand 2025. Created with ❤️</p>
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

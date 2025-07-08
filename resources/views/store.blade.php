<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Solo Chifles: Disfruta del auténtico sabor artesanal con nuestros deliciosos chifles. Hechos con los mejores ingredientes locales.">
        <meta name="keywords" content="chifles, plátanos, snacks artesanales, Solo Chifles, sabor tradicional">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="" />
        <title>Start Sitio Web Solo Chifles</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <style>
            .section-heading-upper {
                font-family: 'Pacifico', cursive;
                font-size: 1.5rem;
                color: #d57a28;
            }
            .section-heading-lower {
                font-family: 'Pacifico', cursive;
                font-size: 2rem;
                color: #ff9800;
            }
            p {
                font-family: 'Roboto', sans-serif;
                font-size: 1rem;
                line-height: 1.6;
                color: #333;
            }
            .logo img {
                max-width: 180px;
                width: 100%;
                height: auto;
            }
            @media (max-width: 576px) {
                .intro-img {
                    width: 100% !important;
                    max-width: 320px;
                }
                .intro-text {
                    padding: 1.5rem !important;
                }
                .section-heading-upper, .section-heading-lower {
                    font-size: 1.2rem;
                }
            }
        </style>
    </head>
    <body>
        <header class="main-header py-3">
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                <div class="logo mb-3 mb-md-0">
                    <img src="{{ asset('assets/img/solo-chifles-sin-fondo-1.png') }}" alt="Logo Solo Chifles" class="img-fluid">
                </div>
                <div class="site-title text-center text-md-start">
                    <span class="site-heading-upper d-block">El sabor que cruje en cada momento especial</span>
                    <h1 class="site-heading-lower m-0">Solo Chifles</h1>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="mainNav">
            <div class="container">
                <a class="navbar-brand d-lg-none" href="#">Solo Chifles</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Acerca de Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Catálogo de Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/store') }}">Contactos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/reviews') }}">Reseñas</a></li>
                    </ul>
                </div>
                <div class="d-flex ms-lg-3 mt-3 mt-lg-0">
                    <a href="{{ route('login') }}" class="btn btn-warning btn-lg px-4 py-2 fw-bold text-dark shadow-sm w-100">
                        <i class="fas fa-sign-in-alt me-2"></i>Acceder
                    </a>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('assets/img/logo transparebte.png') }}" alt="..." style="max-width: 100%; height: auto;"/>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="intro-text left-0 text-center bg-faded p-5 rounded h-100 d-flex flex-column justify-content-center">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Solo Chifles</span>
                                <span class="section-heading-lower">Vale la pena disfrutar</span>
                            </h2>
                            <p class="mb-3">{{ $page->content ?? 'Cada bocado de nuestros chifles artesanales comienza con ingredientes frescos y de origen local, preparados con dedicación y cuidado. Una vez que los pruebes, nuestros chifles se convertirán en una deliciosa adición a tus momentos especiales, ¡te lo garantizamos!' }}</p>
                            <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="{{ url('/products') }}">Pruebalos Hoy!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="cta-inner bg-faded text-center rounded p-4 p-md-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Nuestra Promesa</span>
                                <span class="section-heading-lower">Para Ti</span>
                            </h2>
                            <p class="mb-0">{{ $page->cta_content?? 'Cuando eliges "Solo Chifles", estamos comprometidos a ofrecerte un trato amable, una experiencia cálida y, sobre todo, productos de calidad excepcional, elaborados con los mejores ingredientes. Si no estás satisfecho, háznoslo saber y haremos todo lo posible para solucionarlo.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12">
                        <h class="m-0 small">Copyright &copy; SoloChifles Sitio Web</h>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="social-icons d-flex justify-content-center gap-3">
                            <a href="https://www.facebook.com/solochifles" target="_blank" class="social-link">
                                <img src="{{ asset('assets/img/icon/facebook.png') }}" alt="Facebook" class="img-fluid" style="max-width:32px;">
                            </a>
                            <a href="https://www.instagram.com/solochifles?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="social-link">
                                <img src="{{ asset('assets/img/icon/instagram.png') }}" alt="Instagram" class="img-fluid" style="max-width:32px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
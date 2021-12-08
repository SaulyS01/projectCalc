<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INTPLUSS</title>
    @include('components.css')
</head>

<body id="page-top">
    @include('components.nav')

    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <div>
                <h1 class="mb-1 hvr-underline-from-center" style="font-size: 200px">INTPLUSS</h1>
            </div>
            <h3 class="mb-5 hvr-underline-from-center"><em>Diviertete aprendiendo matemáticas</em></h3>
            <div>
                <a href="#about"><i class="fas fa-book-reader fa-4x text-dark hvr-grow-rotate"></i></a>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>¡Si estas listo para aprender, escoge tu curso favorito!</h2>
                    <p class="lead mb-5">
                        Aprende de una forma divertida las derivadas y integrales ¡Gratis! <br> Estudiante
                        <a href="https://unsplash.com/">Saul Ytucayasi</a>
                        !
                    </p>
                    <a href="{{route('integrales.index')}}" class="mb-1 ca hvr-underline-from-center me-5 ">Integrales</a>
                    <a class="mb-1 ca hvr-underline-from-center" href="#services">Derivadas</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0">Servicios</h3>
                <h2 class="mb-5">Lo que ofrecemos</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                    <h4><strong>Comodidad</strong></h4>
                    <p class="text-faded mb-0">Aprende desde tu celular o pc</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-pencil"></i></span>
                    <h4><strong>Aprendizaje</strong></h4>
                    <p class="text-faded mb-0">Calidad en la enseñanza</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
                    <h4><strong>Diversión</strong></h4>
                    <p class="text-faded mb-0">
                        Diviertete aprendiendo
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-check"></i></span>
                    <h4><strong>Gratis</strong></h4>
                    <p class="text-faded mb-0">Aprende de forma gratuita</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">¿QUIENES SOMOS?</h3>
                <h2 class="mb-5">Nosotros</h2>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Yo, Saul Ytucayasi</div>
                                <p class="mb-0">Estudiante de la carrera de ingeniería de Sistemas de la Universidad
                                    Peruana Unión (Juliaca).</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Nivel de enseñanza</div>
                                <p class="mb-0">La enseñanza va dirigido a todo tipo de estudiantes, nivel superior,
                                    intermedio, etc.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio-2.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Proyecto</div>
                                <p class="mb-0">Creamos el proyecto IntPluss para enseñar las matemáticas de forma
                                    divertida a nuestros estudiantes.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio-3.jpg" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Trabajo</div>
                                <p class="mb-0">Prestamos atención online a estudiantes con cierta dificultad en el
                                    aprendizaje.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio-4.jpg" alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout-->
    <section class="callout">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-5 text-center mx-auto hvr-underline-from-center">
                PASAR A PRO PARA MÁS BENEFICIOS
            </h2>
            <a class="btn btn-dark btn-xl hvr-grow-rotate" href="#services">Comprar ticket</a>
        </div>
    </section>

    @include('components.footer')

    @include('components.js')
</body>

</html>

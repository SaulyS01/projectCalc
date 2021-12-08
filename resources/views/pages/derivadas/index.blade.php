<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Derivadas</title>
    @include('components.css')
</head>

<body id="page-top">
    @include('components.nav')

    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <div>
                <h1 class="mb-1 hvr-underline-from-center" style="font-size: 200px">DERIVADAS</h1>
            </div>
            <h3 class="mb-5 hvr-underline-from-center"><em>Las derivadas y el calculo diferencial</em></h3>
            <div>
                <a href="#about"><i class="fas fa-book-reader fa-4x text-dark hvr-grow-rotate"></i></a>
            </div>
        </div>
    </header>

    <!-- Content-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-end">
                <div class="col-lg-12">
                    <h1 class="mb-4">TEMARIO</h1>
                    <div class="mb-2">
                        <p class="align-middle">
                            <i class="fas fa-circle mb-1 me-4"></i> <span class="ca-tem">Sesión I</span>
                        </p>
                        <a class="ca-tem ms-5 d-block">
                            ¿Que debo saber para derivar?
                        </a>
                        <a class="ca-tem ms-5 d-block">
                            ¿Como usa el formulario de derivación?
                        </a>
                        <a class="ca-tem ms-5 d-block">
                            ¿Que debo saber para derivar?
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    @include('components.js')
</body>

</html>

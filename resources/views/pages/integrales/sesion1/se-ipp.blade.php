<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Integrales</title>
    @include('components.css')
</head>

<body id="page-top">
    @include('components.nav')

    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <div>
                <h1 class="mb-1 hvr-underline-from-center" style="font-size: 200px">INTEGRALES</h1>
            </div>
            <h3 class="mb-5 hvr-underline-from-center"><em>Las integrales y el movimiento matemático</em></h3>
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
                            Métodos de integración
                        </a>
                    </div>
                    <div class="mb-2">
                        <p class="align-middle">
                            <i class="fas fa-circle mb-1 me-4"></i> <span class="ca-tem">Sesión II</span>
                        </p>
                        <a class="ca-tem ms-5 d-block">
                            Integral Indefinida
                        </a>
                    </div>
                    <div class="mb-2">
                        <p class="align-middle">
                            <i class="fas fa-circle mb-1 me-4"></i> <span class="ca-tem">Sesión III</span>
                        </p>
                        <a class="ca-tem ms-5 d-block">
                            Métodos de Integración: Cambio de Variable
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-end">
                <div class="col-lg-12">
                    <h1 class="mb-5 text-center ca">SESIÓN I</h1>
                    <h1 class="mb-4 text-center ca">MÉTODOS DE INTEGRACIÓN</h1>
                    <h1 class="mb-4">Integración por partes</h1>
                    <div class="fs-2 mb-5">
                        Antes de ver la fórmula de cambio de variable, resolveremos algunos ejercicios sencillos
                        que nos llevarán de manera natural a la mencionada fórmula.
                    </div>
                    <div class="fs-2 mb-5">
                        Tomemos la primera fórmula de la tabla de integrales del capítulo anterior:
                    </div>
                    <div class="text-center">
                        <img class="img-fluid hvr-bounce-in" src="assets/img/int1.png" alt="..." />
                    </div>
                    <div class="fs-2 my-5">
                        a partir de ésta podemos encontrar integrales como
                    </div>
                    <div class="text-center">
                        <img class="img-fluid hvr-bounce-in" src="assets/img/int2.png" alt="..." />
                    </div>
                    <div class="fs-2 my-5">
                        Sin embargo, si la variable no aparece de manera sencilla en la función a integrar, podemos
                        afirmar que
                    </div>
                    <div class="text-center">
                        <img class="img-fluid hvr-bounce-in" src="assets/img/int3.png" alt="..." />
                    </div>
                    <div class="fs-2 my-5">
                        La respuesta es NO, pues al derivar el lado derecho no obtenemos el integrando
                    </div>
                    <div class="text-center">
                        <img class="img-fluid hvr-bounce-in" src="assets/img/int4.png" alt="..." />
                    </div>
                    <div class="fs-2 my-5">
                        Lo correcto sería
                    </div>
                    <div class="text-center">
                        <img class="img-fluid hvr-bounce-in" src="assets/img/int5.png" alt="..." />
                    </div>
                    <div class="fs-2 my-5">
                        o bien
                    </div>
                    <div class="text-center">
                        <img class="img-fluid hvr-bounce-in" src="assets/img/int6.png" alt="..." />
                    </div>
                    <div class="fs-2 my-5">
                        <span class="ca">Ejercicios</span>
                    </div>
                    <div class="fs-2 my-5">
                        ejercicio 1
                    </div>
                    <div class="text-center">
                        <img class="img-fluid hvr-bounce-in" src="assets/img/int7.png" alt="..." />
                    </div>
                    <div class="fs-2 my-5">
                        ejercicio 2
                    </div>
                    <div class="text-center">
                        <img class="img-fluid hvr-bounce-in" src="assets/img/int8.png" alt="..." />
                    </div>
                    <div class="text-center">
                        <div class="btn-group">
                            <a href="{{route('integrales.index')}}" class="btn btn-primary">Cambio de variable</a>
                            <a href="{{route('integrales.se-ipp')}}" class="btn btn-primary">Integracion por partes</a>
                            <a href="#" class="btn btn-primary">Funciones trigonométricas</a>
                            <a href="#" class="btn btn-primary">Sustitución trigonométrica</a>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary">Sesión I</a>
                            <a href="#" class="btn btn-primary">Sesión II</a>
                            <a href="#" class="btn btn-primary">Sesión III</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    @include('components.js')
</body>

</html>

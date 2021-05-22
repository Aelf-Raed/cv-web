<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alfred">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>CV Laravel</title>
    <!-- Fonts -->

    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/laptop-code-solid.svg') }}">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    {{-- NAVBAR --}}
    <div class="navbar-dark bg-dark bg-gradient fixed-top">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark bg-gradient shadow container p-2">
            <a class="navbar-brand text-danger" href="#"><i class="fas fa-laptop-code"></i> Lorem Ipsum Dolor</a>
            {{-- Barra toggler, barra que aparece en lugar del nav en modo resposive --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutme">Sobre Mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Conocimientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#works">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    {{-- FIN NAVBAR --}}
    <main>
        {{-- SECCION Inicio --}}
        <section id="inicio">
            <div class="container-fluid p-5 mt-5 mb-5 bg-light bg-gradient shadow-sm">
                <div class="row justify-content-center lead">
                    <div class="col-md-8">
                      <br>
                        <h1 class="text-center font-monospace display-5">
                            Hola!
                            <br>
                            Soy <span class="display-4 text-danger">Lorem Ipsum</span>
                            <br>
                            Desarrollador WEB
                            <br>
                            Bienvenido a mi CV Online!
                        </h1>
                        <br>
                    </div>
                </div>
            </div>
        </section>
        {{-- FIN Inicio --}}
        {{-- SECCION Sobre Mi --}}
        <section id="aboutme" class="shadow-sm">
            <div class="container">
                <div class="row justify-content-center lead p-5 mb-1">
                  <div class="col-md-1">

                  </div>
                    <div class="col-md-4 text-center mb-3">
                        <img src="{{ asset('img/neeko.jpg') }}" class="border border-2 border-danger rounded img-config" alt="" width="100%">
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <h2 class="text-danger fw-bold">Sobre mi</h2>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- FIN Sobre Mi --}}
        {{-- SECCION Conocimientos --}}
        <section id="skills">
            <div class="container-fluid p-5 bg-light bg-gradient shadow-sm">
                <div class="row justify-content-center lead">
                    <h2 class="text-danger text-center fw-bold">Conocimientos</h2>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-4 mt-4">
                        <table class="table table-borderless">
                            <tr>
                                <td><i class="fab fa-html5 fa-3x mt-1"></i></td>
                                <td><span class="fw-bold">HTML5</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-css3-alt fa-3x mt-1"></i></td>
                                <td><span class="fw-bold">CSS3</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-js-square fa-3x mt-1"></i></td>
                                <td><span class="fw-bold">Javascript</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-php fa-3x mt-1"></i></td>
                                <td><span class="fw-bold">PHP</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-database fa-3x mt-1"></i></td>
                                <td><span class="fw-bold">MySQL</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-bootstrap fa-3x mt-1"></i></td>
                                <td><span class="fw-bold">Bootstrap</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-git-alt fa-3x mt-1"></i></td>
                                <td><span class="fw-bold">Git</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-laravel fa-3x mt-1"></i></td>
                                <td><span class="fw-bold">Laravel</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <br>
        {{-- FIN Conocimientos --}}
        {{-- SECCION Portafolio --}}
        <section id="works">
            <div class="container">
                <div class="row justify-content-center lead p-5 mb-4">
                    <h2 class="text-danger text-center mb-5 fw-bold">Portafolio</h2>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="{{ asset('img/2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mi CV</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <a href="#" class="btn btn-danger stretched-link">Ver Sitio Web</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="{{ asset('img/3.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dentista Web</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <a href="#" class="btn btn-danger stretched-link">Ver Sitio Web</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="{{ asset('img/4.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tienda Online</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <a href="#" class="btn btn-danger stretched-link">Ver Sitio Web</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- FIN Portafolio --}}

    </main>
    {{-- FOOTER CONTACTO --}}
    <footer id="contact" class="bg-dark bg-gradient text-white mt-5 pt-5 pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-3 text-center">
                    <p class="fw-bolder">Información de Contacto:</p>
                    <p>Tel: +52 (xxx) xxx xx xx. <br>
                        Email: ejemplo@ejemplo.com</p>
                </div>
                <div class="col-sm-3 mb-4 text-center">
                    <p class="fw-bolder">Redes Sociales:</p>
                    <a href="#" class="link-light ms-2"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="link-light ms-2"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="link-light ms-2"><i class="fab fa-whatsapp fa-lg"></i></a>
                </div>
                <hr>
                <small class="text-muted text-center">Copyright©2020 X - Todos los derechos reservados.</small>
            </div>
        </div>
    </footer>
    {{-- FIN FOOTER--}}
    {{-- Scripts --}}
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>

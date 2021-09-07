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
    <div class="navbar-dark bg-dark fixed-top">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow container p-3">
            <a class="navbar-brand text-danger font-monospace" href="#"><i class="fas fa-laptop-code"></i> ALFREDO GUZMÁN</a>
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
                        <a class="nav-link " href="#aboutme">Sobre Mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#skills">Conocimientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#works">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    {{-- FIN NAVBAR --}}
    <main>
        {{-- SECCION Inicio --}}
        <section id="inicio" class="shadow" style="background-image: url({{ asset('img/head.jpg') }}); background-size: cover; ">
          <div class="container">
            <div id="myDiv" class="row justify-content-center m-5 p-5">
              <div class="col-12 col-md-8" data-aos="fade-up">
                <br>
                <h1 class="text-center display-5 text-light font-monospace t-shadow mt-4">Hola!,
                <br>
                Soy <span class="text-danger text-decoration-underline display-4">Alfredo Guzmán</span>
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

                    <div class="col-8 col-sm-7 col-md-6 col-lg-4 col-xl-3 text-center mb-5" data-aos="zoom-in">
                        <img src="{{ asset('img/foto.jpg') }}" class="border border-2 border-danger rounded img-config">
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-10 col-sm-9 col-md-8 col-lg-7 col-xl-6" data-aos="zoom-in">
                        <h2 class="text-danger fw-bold text-decoration-underline mt-4">Sobre mi</h2>

                        <p class="fw-normal mt-1 justify">Soy Desarrollador Autodidacta, actualmente Freelance, iniciante en el mundo del Desarrollo Web, aun así, día a día me esfuerzo en mejorar y aprender más.</p>
                        <p class="fw-normal justify">Cuento con conocimientos en HTML5, CSS3, Javascript, PHP, MySQL, Boostrap, Laravel, MVC, POO y Git. Además de contar con experiencia en Soporte, Mantenimiento Preventivo y Correctivo de Hardware y Software.</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- FIN Sobre Mi --}}
        {{-- SECCION Conocimientos --}}
        <section id="skills" class="shadow-sm">
            <div class="container-fluid p-5 bg-light bg-gradient">
                <div class="row justify-content-center lead">
                    <h2 class="text-danger text-center fw-bold pt-4 pb-3 text-decoration-underline" data-aos="fade-up">Conocimientos</h2>
                    <div class="col-md-4 mt-4">
                        <table class="table table-borderless">
                            <tr data-aos="fade-up" class="mb-1">
                                <td class="text-center">
                                    <i class="fab fa-html5 fa-3x mt-1"></i>
                                </td>
                                <td><span class="fw-bold">HTML5</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-aos="fade-up" class="mb-1">
                                <td class="text-center">
                                    <i class="fab fa-css3-alt fa-3x mt-1"></i>
                                </td>
                                <td><span class="fw-bold">CSS3</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-aos="fade-up" class="mb-1">
                                <td class="text-center">
                                    <i class="fab fa-js-square fa-3x mt-1"></i>
                                </td>
                                <td><span class="fw-bold">Javascript</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-aos="fade-up" class="mb-1">
                                <td class="text-center">
                                    <i class="fab fa-php fa-3x mt-1"></i>
                                </td>
                                <td><span class="fw-bold">PHP</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-aos="fade-up" class="mb-1">
                                <td class="text-center">
                                    <i class="fas fa-database fa-3x mt-1"></i>
                                </td>
                                <td><span class="fw-bold">MySQL</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-aos="fade-up" class="mb-1">
                                <td class="text-center">
                                    <i class="fab fa-bootstrap fa-3x mt-1"></i>
                                </td>
                                <td><span class="fw-bold">Bootstrap</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-aos="fade-up" class="mb-1">
                                <td class="text-center">
                                    <i class="fab fa-git-alt fa-3x mt-1"></i>
                                </td>
                                <td><span class="fw-bold">Git</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-aos="fade-up" class="mb-1">
                                <td class="text-center">
                                    <i class="fab fa-laravel fa-3x mt-1"></i>
                                </td>
                                <td><span class="fw-bold">Laravel</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
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
                    <h2 class="text-danger text-center mb-5 fw-bold text-decoration-underline" data-aos="zoom-in">Portafolio</h2>
                    <div class="col-10 col-sm-10 col-md-4 col-xl-3 mb-2" data-aos="zoom-in-right" data-aos-offset="300">
                        <div class="card">
                            <img src="{{ asset('img/head.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-danger fw-bold">Mi CV</h5>
                                <p class="card-text fw-normal lh-sm justify">Repositorio de mi Proyecto personal CV Online.</p>
                                <a href="https://github.com/Aelf-Raed/cv-web.git" target="_blank" class="btn btn-danger stretched-link">Ir a GitHub</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-sm-10 col-md-4 col-xl-3 mb-2" data-aos="zoom-in" data-aos-offset="300">
                        <div class="card">
                            <img src="{{ asset('img/dentista.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-danger fw-bold">Dentista Web</h5>
                                <p class="card-text fw-normal lh-sm justify">Repositorio del Proyecto Dentista Web</p>
                                <a href="https://github.com/Aelf-Raed/dentista-web.git" target="_blank" class="btn btn-danger stretched-link">Ir a GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- FIN Portafolio --}}

    </main>
    {{-- FOOTER CONTACTO --}}
    <footer id="contact" class="bg-dark text-white mt-5 pt-5 pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-3 text-center">
                    <p class="fw-bolder text-decoration-underline">Información de Contacto:</p>
                    <p>Tel: +52 (229) 324-44-80<br>
                        Email: j.alfred90@outlook.com</p>
                </div>
                <div class="col-sm-3 mb-4 text-center">
                    <p class="fw-bolder text-decoration-underline">Redes Sociales:</p>
                    <a href="https://www.linkedin.com/in/alfredo-guzm%C3%A1n-b380b7210/" target="_blank" class="link-light ms-2" title="Linkedin"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    <a href="https://github.com/Aelf-Raed" target="_blank" class="link-light ms-2" title="GitHub"><i class="fab fa-github fa-lg"></i></a>
                    <a href="https://wa.me/5212293244480" target="_blank" class="link-light ms-2" title="WhatsApp"><i class="fab fa-whatsapp fa-lg"></i></a>
                </div>
                <hr>
                <small class="text-muted text-center">Copyright©2021 - Todos los derechos reservados.</small>
            </div>
        </div>
    </footer>
    {{-- FIN FOOTER--}}
    {{-- Scripts --}}
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>

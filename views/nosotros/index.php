<?php
require 'views/header.php';
require 'views/navigation.php';
?>
<body>

<section class="page-title">
    <div class="page-title-img bg-img bg-overlay-darken" style="background-image: url(../assets/img/pages/page-title-bg13.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center" style="height: 200px;">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <div class="">
                            <h2 class="text-uppercase text-white font-weight-bold">MISIÓN Y VISIÓN</h2>
                        </div>
                        <p class="text-white mb-0">OBJETIVIDAD - SOLIDARIDAD - UNIÓN - CONFIANZA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-10">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-4 order-2">
                <form class="" action="index.html" method="GET">
                    <div class="card border">
                        <h2 class="card-header text-uppercase text-center bg-smoke border-bottom">
                            Booking
                        </h2>

                        <div class="card-body px-3 py-4">
                            <div class="border-bottom mb-5">
                                <div class="form-group mb-5">
                                    <div class="row">
                                        <label for="inputTime" class="col-xl-5 col-form-label text-center text-xl-right px-2">Select a
                                            date:</label>

                                        <div class="col-xl-7">
                                            <div class="form-group form-group-icon form-group-icon-category-2 mb-0">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <input type="text" class="form-control daterange-picker-category-2" name="dateRange" value=""
                                                       placeholder="MM/DD/YYYY">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="row">
                                        <label for="inputTime" class="col-xl-5 col-form-label text-center text-xl-right px-2">Select a time
                                            slot:</label>
                                        <div class="col-xl-7">
                                            <div class="form-group mb-0">
                                                <div class="select-default select-category-2 timer">
                                                    <select class="select-option">
                                                        <option>9:00 AM</option>
                                                        <option>10:00 AM</option>
                                                        <option>11:00 AM</option>
                                                        <option>12:00 AM</option>
                                                        <option>13:00 AM</option>
                                                        <option>14:00 AM</option>
                                                        <option>15:00 AM</option>
                                                        <option>16:00 AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="row align-items-center">
                                        <label class="control-label col-xl-5 text-center text-xl-right">Adults:</label>

                                        <div class="col-xl-5">
                                            <div class="count-input mx-auto">
                                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                                <input class="quantity" type="number" value="1">
                                                <a class="incr-btn" data-action="increase" href="#">+</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-2">
                                            <p class="text-center mt-3 mt-xl-0 mb-0">$99</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="row align-items-center">
                                        <label class="control-label col-xl-5 text-center text-xl-right">Children:</label>

                                        <div class="col-xl-5">
                                            <div class="count-input mx-auto">
                                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                                <input class="quantity" type="number" value="0">
                                                <a class="incr-btn" data-action="increase" href="#">+</a>
                                            </div>
                                        </div>

                                        <div class="col-xl-2">
                                            <p class="text-center mt-3 mt-xl-0 mb-0">$59</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between border-bottom mb-5 pb-5">
                                <span class="text-uppercase h4 mb-0">Total cost</span>
                                <span class="font-weight-bold text-primary h3 mb-0">$158</span>
                            </div>

                            <div class="text-center px-4">
                                <button type="button" onclick="location.href='booking-step-1.html';"
                                        class="btn btn-hover btn-lg btn-block btn-outline-secondary text-uppercase">
                                    Check Now <span class="ml-4"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-7 col-lg-8">
                <div id="package-slider" class="owl-carousel owl-theme package-slider">
                    <div class="item">
                        <img src="../assets/img/packages/package-slider-03.jpg" alt="image">
                    </div>

                    <div class="item">
                        <img src="../assets/img/packages/package-slider-04.jpg" alt="image">
                    </div>

                    <div class="item">
                        <img src="../assets/img/packages/package-slider-05.jpg" alt="image">
                    </div>
                </div>

                <div class="mt-8">
                    <h2 class="text-uppercase mb-5">Quienes Somos</h2>
                    <p class="mb-6"><p>El Grupo Turbo Mix es una cadena de radial fundada en la ciudad de Cajamarca-Perú por el Sr. Wilmer Huaripata Aguilar "Fantasmita Willy" , y está conformado por Radio Turbo Mix FM 92.5, Radio Turbo Mix AM 710, Canal 19 Turbo Mix TV y Radio Pirata FM 97.7. Asimismo tiene sus estaciones en las diferentes ciudades.</p>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Cajabamba 105.7 FM</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Cutervo 103.1 FM</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Namora 91.5 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Oxamarca 94.5 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>San Miguel 102.7 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Chota 91.5 FM</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Colasay 96.9 FM</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Huamachuco 90.5 FM</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>San Pablo 100.1 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Hualgayoc 101.9 FM</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Jaén 101.7 FM</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Santiago de Chuco 103.7 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Cospan 91.1 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Chilete 100.1 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Sorochuco 94.3 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>San Marcos 105.3 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Bambamarca 101.9 FM</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Celendín 105.3 FM</p>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="text-gray-color mr-2">
                                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Matara 91.5 FM</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Los medios de comunicación masiva que integran el GRUPO TURBO MIX, están desarrollados pensando en las necesidades de los diferentes rubros comerciales del mercado actual.</p>
                    <p>Poniendo a su disposición publicidad inmediata y efectiva, imponiendo su marca en el mercado, en respuesta a su inversión publicitaria.</p>
                    <p>30 años de experiencia, respaldados por los avances tecnológicos de nuestros medios de Radio AM Y FM, Televisión y Productora,sumado al talento creativo del equipo humano, garantizan la efectividad de nuestro trabajo.</p>
                    <p>GRUPO TURBO MIX...Un medio para cada objetivo. Ponemos voz e imagen a tus ideas</p>


                </div>

                <div class="mb-8">
                    <h3 class="text-uppercase mb-5">MISIÓN</h3>
                    <p class="mb-5">Ofrecer el servicio de radio y televisión a la población, con alta calidad, veracidad, oportunidad, profesionalismo y difusión de mensajes responsables, con la participación de la comunidad cajamarquina y la libre expresión, apta para todas las edades.</p>

                    <h3 class="text-uppercase mb-5">VISIÓN</h3>
                    <p class="mb-5">Ser un medio de comunicación regional de nivel competitivo dentro del mercado peruano adoptando y aportando nuevas ideas para que nuestra programación sea eficaz, permitiéndonos consolidar nuestra cadena radial en todo el norte del Perú.</p>

                    <h3 class="text-uppercase mb-5">Programación</h3>

                    <div class="media flex-column flex-lg-row align-items-lg-center border rounded px-6 py-7 bg-smoke mb-2">
                        <div class="mr-lg-5">
                            <h5 class="text-uppercase mb-3">Nunc ultricies dui</h5>
                            <p class="mb-5 mb-lg-0">Nunc ultricies dui sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>

                    <div class="media flex-column flex-lg-row align-items-lg-center border rounded px-6 py-7 bg-smoke mb-2">
                        <div class="mr-lg-5">
                            <h5 class="text-uppercase mb-3">Pulla consuat sed</h5>
                            <p class="mb-5 mb-lg-0">Pulla consuat sed libero eu feugiat. Praesent vel hendrerit erat. Phasellus
                                gravida efficitur lectus, placerat semper est tristique nec. Proin magna enim</p>
                        </div>

                        <div class="media-body d-flex">
                            <div class="badge badge-rounded-circle border">
                                <span class="d-block text-primary">Day2</span>
                            </div>
                        </div>
                    </div>

                    <div class="media flex-column flex-lg-row align-items-lg-center border rounded px-6 py-7 bg-smoke">
                        <div class="mr-lg-5">
                            <h5 class="text-uppercase mb-3">Donec phareta nec</h5>
                            <p class="mb-5 mb-lg-0">Donec phareta nec quam congue egestas. Sed aliquam mauris quam, id molestie erat
                                tristique vel. Donec euismod malesuada rhoncus. Nulla vestibulum</p>
                        </div>

                        <div class="media-body d-flex">
                            <div class="badge badge-rounded-circle border">
                                <span class="d-block text-primary">Day3</span>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require 'views/footer.php' ?>
</body>
</html>

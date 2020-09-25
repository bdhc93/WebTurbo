<?php
require 'views/header.php';
require 'views/navigation.php';
?>
<body>

<section class="page-title">
    <div class="page-title-img bg-img bg-overlay-darken"
         style="background-image: url(public/img/pages/page-title-bg5.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center" style="height: 200px;">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <div class="title-border">
                            <h2 class="text-uppercase text-white font-weight-bold">CONTÁCTANOS</h2>
                        </div>
                        <p class="text-white mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-9 pt-md-10">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5 col-xl-4">


                <div class="media mb-4">
                    <a href="" class="icon-contact-default bg-primary text-white mr-5">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </a>

                    <div class="media-body">
                        <h4 class="text-uppercase font-weight-medium">Dirección</h4>
                        <p class="mb-0">Jirón Miguel Iglesias N° 483-489</p>
                    </div>
                </div>

                <div class="media mb-4">
                    <a href="" class="icon-contact-default bg-primary text-white mr-5">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </a>

                    <div class="media-body">
                        <h4 class="text-uppercase font-weight-medium">Números de Publicidad</h4>
                        <div class="">
                            <a href="tel:+51976387244" class="text-gray-color hover-text-primary">+51 976 387 244</a>
                        </div>

                        <div class="">
                            <a href="tel:+51976575551" class="text-gray-color hover-text-primary">+51 976 575 551</a>
                        </div>
                    </div>
                </div>

                <div class="media mb-4">
                    <a href="" class="icon-contact-default bg-primary text-white mr-5">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </a>

                    <div class="media-body">
                        <h4 class="text-uppercase font-weight-medium">Números de Oficina</h4>
                        <div class="">
                            <a href="tel:+51976387244" class="text-gray-color hover-text-primary">+51 076 366 985</a>
                        </div>

                        <div class="">
                            <a href="tel:+51976575551" class="text-gray-color hover-text-primary">+51 076 367 759</a>
                        </div>
                    </div>
                </div>

                <div class="media mb-6 mb-md-0">
                    <a href="" class="icon-contact-default bg-primary text-white mr-5">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>

                    <div class="media-body">
                        <h4 class="text-uppercase font-weight-medium">Correo</h4>
                        <div class="">
                            <a href="mailto:ventas@turbomix.com.pe" class="text-gray-color hover-text-primary">ventas@turbomix.com.pe</a>
                        </div>

                        <div class="">
                            <a href="mailto:grupo@turbomix.com.pe" class="text-gray-color hover-text-primary">grupo@turbomix.com.pe</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-7 col-xl-8">
                <form action="" method="POST" role="form" class="form">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 bg-smoke" required="" placeholder="Tu nombre">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control border-0 bg-smoke" placeholder="Tu correo">
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control border-0 bg-smoke" placeholder="Tu teléfono">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control border-0 bg-smoke" rows="6" placeholder="Tu mensaje"></textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary text-uppercase">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="" id="map" style="width:100%; height:555px;"></div>
</section>


<?php require 'views/footer.php' ?>
</body>
</html>

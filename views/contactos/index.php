<?php
require 'views/header.php';
?>
<body id="body" class="up-scroll" data-spy="scroll" data-target=".element-right-sidebar">
<?php
//require 'views/preloader.php';
require 'views/navigation.php';
?>

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
                        <i class="<?php echo $this->contactos->icono_1; ?>" aria-hidden="true"></i>
                    </a>

                    <div class="media-body">
                        <h4 class="text-uppercase font-weight-medium"><?php echo $this->contactos->titulo_1; ?></h4>
                        <p class="mb-0"><?php echo $this->contactos->descripcion_1; ?></p>
                        <p class="mb-0"><?php echo $this->contactos->descripcion_1_2; ?></p>
                    </div>
                </div>
                <div class="media mb-4">
                    <a href="" class="icon-contact-default bg-primary text-white mr-5">
                        <i class="<?php echo $this->contactos->icono_2; ?>" aria-hidden="true"></i>
                    </a>

                    <div class="media-body">
                        <h4 class="text-uppercase font-weight-medium"><?php echo $this->contactos->titulo_2; ?></h4>
                        <p class="mb-0"><?php echo $this->contactos->descripcion_2; ?></p>
                        <p class="mb-0"><?php echo $this->contactos->descripcion_2_2; ?></p>
                    </div>
                </div>
                <div class="media mb-4">
                    <a href="" class="icon-contact-default bg-primary text-white mr-5">
                        <i class="<?php echo $this->contactos->icono_3; ?>" aria-hidden="true"></i>
                    </a>

                    <div class="media-body">
                        <h4 class="text-uppercase font-weight-medium"><?php echo $this->contactos->titulo_3; ?></h4>
                        <p class="mb-0"><?php echo $this->contactos->descripcion_3; ?></p>
                        <p class="mb-0"><?php echo $this->contactos->descripcion_3_2; ?></p>
                    </div>
                </div>
                <div class="media mb-6 mb-md-0">
                    <a href="" class="icon-contact-default bg-primary text-white mr-5">
                        <i class="<?php echo $this->contactos->icono_4; ?>" aria-hidden="true"></i>
                    </a>

                    <div class="media-body">
                        <h4 class="text-uppercase font-weight-medium"><?php echo $this->contactos->titulo_4; ?></h4>
                        <p class="mb-0"><?php echo $this->contactos->descripcion_4; ?></p>
                        <p class="mb-0"><?php echo $this->contactos->descripcion_4_2; ?></p>
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

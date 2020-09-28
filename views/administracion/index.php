<?php
require 'views/adm_header.php';
?>
<body id="page-top">
<div id="wrapper">


    <?php
    require 'views/adm_navigation.php';
    ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php
            require 'views/adm_navigation2.php';
            ?>

            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Inicio </h1>
                </div>

                <hr class="sidebar-divider">

                <div class="row border">
                    <div class="col-lg-12 border">
                        <h3>Imágenes Carrusel</h3>
                    </div>

                    <div class="col-lg-4">

                        <!-- Default Card Example -->
                        <div class="card text-center mb-4">
                            <div class="card-header">
                                <img src="<?php echo constant('URL'); ?>public/img/home/slider/slider-01.jpg" width="300px" alt="logo-img">
                            </div>
                            <div class="card-body">
                                <button class="btn btn-success"> Cambiar</button>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <!-- Default Card Example -->
                        <div class="card text-center mb-4">
                            <div class="card-header">
                                <img src="<?php echo constant('URL'); ?>public/img/home/slider/slider-02.jpg" width="300px" alt="logo-img">
                            </div>
                            <div class="card-body">
                                <button class="btn btn-success"> Cambiar</button>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <!-- Default Card Example -->
                        <div class="card text-center mb-4">
                            <div class="card-header">
                                <img src="<?php echo constant('URL'); ?>public/img/home/slider/slider-03.jpg" width="300px" alt="logo-img">
                            </div>
                            <div class="card-body">
                                <button class="btn btn-success"> Cambiar</button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <?php
        require 'views/adm_footer.php';
        ?>
    </div>

</div>
<?php
require 'views/adm_scripts.php';
?>

</body>

</html>

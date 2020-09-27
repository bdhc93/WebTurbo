<?php
$url = isset($_GET['url']) ? $_GET['url'] : null;
$url = rtrim($url, '/');
$url = explode('/', $url);
?>
<header class="header" id="pageTop">

    <!-- Top Bar -->
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-7">
                    <ul class="list-inline d-flex mb-0">
                        <li class="mr-6">
                            <a href="tel:51 976575551" class="media d-inline-flex align-items-center">
                                <i class="fa fa-phone mr-2"></i>
                                <div class="media-body">
                                    Telef: 51 976575551
                                </div>
                            </a>
                        </li>


                    </ul>
                </div>
                <div class="col-5">
                    <ul class="list-inline d-flex justify-content-end mb-0">

                        <li class="">
                            <a href="mailTo:ventas@turbomix.com.pe" class="media d-inline-flex align-items-center">
                                <i class="fa fa-envelope mr-2"></i>
                                <div class="media-body">
                                    Email: ventas@turbomix.com.pe
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Menuzord-->
    <nav class="nav-menuzord navbar-sticky">
        <div class="container clearfix">
            <div id="menuzord" class="menuzord">
                <a href="main" class="menuzord-brand">
                    <img src="<?php echo constant('URL'); ?>public/images/Logo.png" alt="logo-img">
                </a>

                <ul class="menuzord-menu menuzord-right pr-0">
                    <li class=" <?php if ($url[0] == 'main') {
                        echo 'active';
                    } ?> ">
                        <a class="" href="<?php echo constant('URL'); ?>main">INICIO</a>
                    </li>

                    <li class=" <?php if ($url[0] == 'nosotros') {
                        echo 'active';
                    } ?> ">
                        <a href="javascript:void(0)">NOSOTROS</a>
                        <ul class="dropdown drop-up">
                            <li class="<?php if ($url[0] == 'nosotros') {
                                if (empty($url[1])) {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>nosotros">MISIÓN Y VISIÓN</a>
                            </li>

                            <li class="<?php if (!empty($url[1])) {
                                if ($url[1] == 'responsabilidad_social') {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>nosotros/responsabilidad_social">RESPONSABILIDAD
                                    SOCIAL</a>
                            </li>

                        </ul>
                    </li>

                    <li class="<?php if ($url[0] == 'noticias') {
                        echo 'active';
                    } ?>">
                        <a href="javascript:void(0)">NOTICIAS</a>
                        <ul class="dropdown drop-up">
                            <li class="<?php if ($url[0] == 'noticias') {
                                if (empty($url[1])) {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>noticias">DEPORTES</a>
                            </li>

                            <li class="<?php if (!empty($url[1])) {
                                if ($url[1] == 'espectaculos') {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>noticias/espectaculos">ESPECTÁCULOS</a>
                            </li>
                            <li class="<?php if (!empty($url[1])) {
                                if ($url[1] == 'politica') {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>noticias/politica">POLÍTICA</a>
                            </li>
                        </ul>
                    </li>

                    <li class=" <?php if ($url[0] == 'programacion') {
                        echo 'active';
                    } ?> ">
                        <a href="javascript:void(0)">PROGRAMACIÓN</a>
                        <ul class="dropdown drop-up">
                            <li class="<?php if ($url[0] == 'programacion') {
                                if (empty($url[1])) {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>programacion">TURBO MIX FM</a>
                            </li>

                            <li class="<?php if (!empty($url[1])) {
                                if ($url[1] == 'programacion_am') {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>programacion/programacion_am">TURBO MIX AM</a>
                            </li>

                            <li class="<?php if (!empty($url[1])) {
                                if ($url[1] == 'programacion_tv') {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>programacion/programacion_tv">TURBO MIX TV</a>
                            </li>

                            <li class="<?php if (!empty($url[1])) {
                                if ($url[1] == 'programacion_pirata') {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>programacion/programacion_pirata">PIRATA FM </a>
                            </li>
                        </ul>
                    </li>

                    <li class=" <?php if ($url[0] == 'galeria') {
                        echo 'active';
                    } ?> ">
                        <a href="javascript:void(0)">GALERÍA</a>
                        <ul class="dropdown drop-up">
                            <li class="<?php if ($url[0] == 'galeria') {
                                if (empty($url[1])) {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>galeria">VIDEOS</a>
                            </li>

                            <li class="<?php if (!empty($url[1])) {
                                if ($url[1] == 'fotos') {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>galeria/fotos">FOTOS</a>
                            </li>
                        </ul>
                    </li>

                    <li class=" <?php if ($url[0] == 'ranking') {
                        echo 'active';
                    } ?> ">
                        <a href="javascript:void(0)">RANKING</a>
                        <ul class="dropdown drop-up">
                            <li class="<?php if ($url[0] == 'ranking') {
                                if (empty($url[1])) {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>ranking">TURBO MIX FM</a>
                            </li>

                            <li class="<?php if (!empty($url[1])) {
                                if ($url[1] == 'tv') {
                                    echo 'active';
                                }
                            } ?>">
                                <a href="<?php echo constant('URL'); ?>ranking/tv">TURBO MIX TV</a>
                            </li>
                        </ul>
                    </li>


                    <div class="menuzord-btn">
                        <a class="btn btn-primary" href="<?php echo constant('URL'); ?>contactos">
                            CONTÁCTANOS
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
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

                        <li>
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
                    <li class=" active ">
                        <a class="" href="<?php echo constant('URL'); ?>main">INICIO</a>
                    </li>

                    <li class="">
                        <a href="javascript:void(0)">NOSOTROS</a>
                        <ul class="dropdown drop-up">
                            <li class="">
                                <a href="<?php echo constant('URL'); ?><?php echo constant('URL'); ?>nosotros">MISIÓN Y VISIÓN</a>
                            </li>

                            <li class="">
                                <a href="<?php echo constant('URL'); ?><?php echo constant('URL'); ?>nosotros/responsabilidad_social">RESPONSABILIDAD SOCIAL</a>
                            </li>

                        </ul>
                    </li>

                    <li class=" ">
                        <a href="javascript:void(0)">NOTICIAS</a>
                        <ul class="dropdown drop-up">
                            <li class=" ">
                                <a href="views/noticias_deportes.html">DEPORTES</a>
                            </li>

                            <li class="">
                                <a href="views/noticias_espectaculos.html">ESPECTÁCULOS</a>
                            </li>
                            <li class="">
                                <a href="views/noticias_politica.html">POLÍTICA</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="javascript:void(0)">PROGRAMACIÓN</a>
                        <ul class="dropdown drop-up">
                            <li class="">
                                <a href="views/programacion_fm.html">TURBO MIX FM</a>
                            </li>

                            <li class="">
                                <a href="views/programacion_am.html">TURBO MIX AM</a>
                            </li>

                            <li class="">
                                <a href="views/programacion_tv.html">TURBO MIX TV</a>
                            </li>

                            <li class="">
                                <a href="views/programacion_pirata.html">PIRATA FM </a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="javascript:void(0)">GALERÍA</a>
                        <ul class="dropdown drop-up">
                            <li class="">
                                <a href="views/galeria_videos.html">VIDEOS</a>
                            </li>

                            <li class="">
                                <a href="views/galeria_fotos.html">FOTOS</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="javascript:void(0)">RANKING</a>
                        <ul class="dropdown drop-up">
                            <li class="">
                                <a href="views/ranking_fm.html">TURBO MIX FM</a>
                            </li>

                            <li class="">
                                <a href="views/ranking_tv.html">TURBO MIX TV</a>
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
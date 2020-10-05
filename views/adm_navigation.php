<?php
$url = isset($_GET['url']) ? $_GET['url'] : null;
$url = rtrim($url, '/');
$url = explode('/', $url);
?>
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo constant('URL'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Grupo Turbo Mix</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php if ($url[1] == 'administracion' || empty($url[1])) {
        echo 'active';
    } ?>">
        <a class="nav-link" href="<?php echo constant('URL'); ?>administracion">
            <i class="fas fa-fw fa-home"></i>
            <span>Principal</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        INTERFACE
    </div>

    <li class="nav-item <?php if (!empty($url[1])) {
        if ($url[1] == 'mision_vision' || $url[1] == 'responsabilidad_social') {
            echo 'active';
        }
    } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNosotros"
           aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Nosotros</span>
        </a>
        <div id="collapseNosotros" class="collapse <?php if (!empty($url[1])) {
            if ($url[1] == 'mision_vision' || $url[1] == 'responsabilidad_social') {
                echo 'show';
            }
        } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php if (!empty($url[1])) {
                    if ($url[1] == 'mision_vision') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/mision_vision">Misión
                    y Visión</a>
                <a class="collapse-item <?php if (!empty($url[1])) {
                    if ($url[1] == 'responsabilidad_social') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/responsabilidad_social">Responsabilidad
                    Social</a>
            </div>
        </div>
    </li>

    <li class="nav-item <?php if (!empty($url[1])) {
        if ($url[1] == 'deportes' || $url[1] == 'espectaculos' || $url[1] == 'politica') {
            echo 'active';
        }
    } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNoticias"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Noticias</span>
        </a>
        <div id="collapseNoticias" class="collapse <?php if (!empty($url[1])) {
            if ($url[1] == 'deportes' || $url[1] == 'espectaculos' || $url[1] == 'politica') {
                echo 'show';
            }
        } ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item  <?php if (!empty($url[1])) {
                    if ($url[1] == 'deportes') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/deportes">Deportes</a>
                <a class="collapse-item  <?php if (!empty($url[1])) {
                    if ($url[1] == 'espectaculos') {
                        echo 'active';
                    }
                } ?>"
                   href="<?php echo constant('URL'); ?>administracion/espectaculos">Espectáculos</a>
                <a class="collapse-item  <?php if (!empty($url[1])) {
                    if ($url[1] == 'politica') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/politica">Política</a>
            </div>
        </div>
    </li>

    <li class="nav-item <?php if (!empty($url[1])) {
        if ($url[1] == 'programacion_fm' || $url[1] == 'programacion_am' || $url[1] == 'programacion_tv' || $url[1] == 'programacion_pirata') {
            echo 'active';
        }
    } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProgramacion"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-tasks"></i>
            <span>Programación</span>
        </a>
        <div id="collapseProgramacion" class="collapse <?php if (!empty($url[1])) {
            if ($url[1] == 'programacion_fm' || $url[1] == 'programacion_am' || $url[1] == 'programacion_tv' || $url[1] == 'programacion_pirata') {
                echo 'show';
            }
        } ?>" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php if (!empty($url[1])) {
                    if ($url[1] == 'programacion_fm') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/programacion_fm">Turbo Mix
                    FM</a>
                <a class="collapse-item <?php if (!empty($url[1])) {
                    if ($url[1] == 'programacion_am') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/programacion_am">Turbo Mix
                    AM</a>
                <a class="collapse-item <?php if (!empty($url[1])) {
                    if ($url[1] == 'programacion_tv') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/programacion_tv">Turbo Mix
                    TV</a>
                <a class="collapse-item <?php if (!empty($url[1])) {
                    if ($url[1] == 'programacion_pirata') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/programacion_pirata">Pirata
                    FM</a>
            </div>
        </div>
    </li>

    <li class="nav-item  <?php if (!empty($url[1])) {
        if ($url[1] == 'fotos' || $url[1] == 'videos') {
            echo 'active';
        }
    } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGaleria"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-camera"></i>
            <span>Galería</span>
        </a>
        <div id="collapseGaleria" class="collapse <?php if (!empty($url[1])) {
            if ($url[1] == 'fotos' || $url[1] == 'videos') {
                echo 'show';
            }
        } ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php if (!empty($url[1])) {
                    if ($url[1] == 'fotos') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/fotos">Fotos</a>
                <a class="collapse-item <?php if (!empty($url[1])) {
                    if ($url[1] == 'videos') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>administracion/videos">Videos</a>
            </div>
        </div>
    </li>
    <li class="nav-item  <?php if (!empty($url[0])) {
        if ($url[0] == 'rankingadm' || $url[1] == 'ranking_tv') {
            echo 'active';
        }
    } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRanking"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-music"></i>
            <span>Ranking</span>
        </a>
        <div id="collapseRanking" class="collapse <?php if (!empty($url[0])) {
            if ($url[0] == 'rankingadm' || $url[1] == 'ranking_tv') {
                echo 'show';
            }
        } ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php if (!empty($url[0])) {
                    if ($url[0] == 'rankingadm' && empty($url[1])) {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>rankingadm">Turbo Mix FM</a>
                <a class="collapse-item <?php if (!empty($url[1])) {
                    if ($url[1] == 'rankingtv') {
                        echo 'active';
                    }
                } ?>" href="<?php echo constant('URL'); ?>rankingadm/rankingtv">Turbo Mix TV</a>
            </div>
        </div>
    </li>

    <li class="nav-item  <?php if (!empty($url[1])) {
        if ($url[0] == 'contactos') {
            echo 'active';
        }
    } ?>">
        <a class="nav-link" href="<?php echo constant('URL'); ?>contactos/admcontactos">
            <i class="fas fa-fw fa-comments"></i>
            <span>Contáctanos</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        ADMINISTRACIÓN
    </div>

    <li class="nav-item  <?php if (!empty($url[1])) {
        if ($url[1] == 'usuarios') {
            echo 'active';
        }
    } ?>">
        <a class="nav-link" href="<?php echo constant('URL'); ?>administracion/usuarios">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuarios</span></a>
    </li>

    <li class="nav-item  <?php if (!empty($url[1])) {
        if ($url[1] == 'roles') {
            echo 'active';
        }
    } ?>">
        <a class="nav-link" href="<?php echo constant('URL'); ?>administracion/roles">
            <i class="fas fa-fw fa-server"></i>
            <span>Roles</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
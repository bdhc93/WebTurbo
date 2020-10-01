<?php
require 'views/adm_header.php';
?>
<body id="page-top">
<div id="wrapper">
    <?php
    require 'views/adm_navigation.php';
    ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php
            require 'views/adm_navigation2.php';
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ranking - FM </h1>
                        <!--                        <div style="color: darkred">--><?php //echo $this->mensaje; ?><!--</div>-->
                    </div>
                    <div class="col-lg-3 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalNuevoRegistro">
                            Nuevo Registro
                        </button>
                    </div>
                </div>


            </div>
            <hr class="sidebar-divider">



            <div class="container-fluid">

                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example" class="display" width="100%"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th >Ubicación</th>
                                    <th>Canción</th>
                                    <th>Artista</th>
                                    <th>Fecha</th>
                                    <th>URL</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Ubicación</th>
                                    <th>Canción</th>
                                    <th>Artista</th>
                                    <th>Fecha</th>
                                    <th>URL</th>
                                    <th>Acciones</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                include_once 'models/ranking.php';
                                foreach ($this->ranking as $row) {
                                    $ranking = new MRanking();
                                    $ranking = $row;

                                    ?>

                                    <tr>
                                        <td>
                                            <?php echo $ranking->ubicacion; ?>
                                        </td>
                                        <td>
                                            <?php echo $ranking->titulo; ?>
                                        </td>
                                        <td>
                                            <?php echo $ranking->artista; ?>
                                        </td>
                                        <td>
                                            <?php echo $ranking->fecha; ?>
                                        </td>
                                        <td>
                                            <?php echo $ranking->url; ?>
                                        </td>
                                        <td>
                                            <div class="form-group  row">
                                                <a class="btn btn-info" style="color: white">Editar</a>
                                                <a class="btn btn-danger" style="color: white">Eliminar</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
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
<div class="modal fade" id="modalNuevoRegistro" tabindex="-1" role="dialog" aria-labelledby="modalNuevoRegistroTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="<?php echo constant('URL'); ?>rankingadm/registrarRankingTV" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ingreso de Ranking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <input type="text" name="empresa" value="TV" id="" hidden>

                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Título</label>
                        <div class="col-sm-10"><input type="text" name="titulo" class="form-control" required></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Artista</label>
                        <div class="col-sm-10"><input type="text" name="artista" class="form-control" required></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Fecha</label>
                        <div class="col-sm-10"><input type="date" name="fecha" class="form-control"></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10"><input type="text" name="url" class="form-control" required></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Ubicación</label>
                        <div class="col-sm-10"><input type="number" name="ubicacion" class="form-control" required></div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require 'views/adm_scripts.php';
?>
<script>
    $(document).ready(function () {

        $('#example').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ por página.",
                "zeroRecords": "Sin información encontrada.",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No se encuentra la información solicitada.",
                "infoFiltered": "(Filtrando _MAX_ del total.)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primera",
                    "last": "Última",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
    $(function () {
        new WOW().init();
    });
</script>
</body>
</html>

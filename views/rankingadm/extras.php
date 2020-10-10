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
                        <h1 class="h3 mb-0 text-gray-800">Recientes / Populares </h1>
                        <!--                        <div style="color: darkred">--><?php //echo $this->mensaje; ?><!--</div>-->
                    </div>
                    <div class="col-lg-3 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalNuevoRegistro" onclick="ModalNuevo()">
                            Nuevo Registro
                        </button>
                        <!--                        <a onclick="ModalNuevo()" class="btn btn-primary" style="color: white">Nuevo Registro</a>-->

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
                                    <th>Nombre</th>
                                    <th>Artista</th>
                                    <th>Fecha</th>
                                    <th>Url</th>
                                    <th>Imagen</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Artista</th>
                                    <th>Fecha</th>
                                    <th>Url</th>
                                    <th>Imagen</th>
                                    <th>Acciones</th>
                                </tr>
                                </tfoot>
                                <tbody id="list">
                                <?php
                                include_once 'models/rankingext.php';
                                foreach ($this->ranking as $row) {
//                                    $ranking = new MRankingext();
                                    $ranking = $row;
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $ranking->nombre; ?>
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
                                            <?php echo $ranking->imagen; ?>
                                        </td>
                                        <td>
                                            <div class="form-group  row">
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target="#modalModificar" onclick="EditarRanking(<?php echo $ranking->id; ?>)">
                                                    Editar
                                                </button>
                                                <button type="button" class="btn btn-danger" onclick="EliminarRanking(<?php echo $ranking->id; ?>)">
                                                    Eliminar
                                                </button>
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
            <form id="frmNuevoRanking" action="<?php echo constant('URL'); ?>rankingext/registrarExtra" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ingreso de Ranking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <input type="text" name="etiqueta" value="false" hidden>

                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Título</label>
                        <div class="col-sm-10"><input type="text" name="nombre" id="txtnombre" class="form-control" required></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Artista</label>
                        <div class="col-sm-10"><input type="text" name="artista" id="txtartista" class="form-control" required></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Fecha</label>
                        <div class="col-sm-10"><input type="date" name="fecha" id="txtfecha" class="form-control" required></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10"><input type="text" name="url" id="txturl" class="form-control" required></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Imagen</label>
                        <div class="col-sm-10"><input type="text" name="imagen" id="txtimagen" class="form-control" required></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" ">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="modalModificar"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="frmModificarRanking" action="<?php echo constant('URL'); ?>rankingext/actualizarExtras" method="post">
                <div id="ModalEditarRanking">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="Detalle"></div>
<?php
require 'views/adm_scripts.php';
?>
<script>

    $(function() {
        $('#frmNuevoRanking').on('submit', function (event) {
            var post_url = $(this).attr("action");
            var request_method = $(this).attr("method");
            var formData = new FormData($(this)[0]);
            event.preventDefault();

            $.ajax({
                url: post_url,
                type: request_method,
                data: formData,
                processData: false,  // tell jQuery not to process the data
                contentType: false,   // tell jQuery not to set contentType
                success: function (response) {
                    $('#list').html(response);
                    $('#modalNuevoRegistro').modal('toggle');
                },
                error: function (response) {
                    alert(response.Message);
                }
            });
        });

        $('#frmModificarRanking').on('submit', function (event) {
            var post_url = $(this).attr("action");
            var request_method = $(this).attr("method");
            var formData = new FormData($(this)[0]);
            event.preventDefault();
            $.ajax({
                url: post_url,
                type: request_method,
                data: formData,
                processData: false,  // tell jQuery not to process the data
                contentType: false,   // tell jQuery not to set contentType
                success: function (response) {
                    $('#list').html(response);
                    $('#modalModificar').modal('toggle');
                },
                error: function (response) {
                    alert(response.Message);
                }
            });
        });
    });

    function EliminarRanking(id){
        swal({
                title: "Estas seguro?",
                text: "No se podrá recuperar la información",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Si, Eliminarlo!",
                cancelButtonText: "No, Cancelar!",
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function () {

                $.get("<?php echo constant('URL') . 'rankingext/eliminarExtras/' ;?>"+id).done(function (data) {
                    $('#list').html(data);

                    if (msg == '3') {
                        sweetAlert
                        ({
                            title: "Eliminado!",
                            text: "Se ha eliminado correctamente!",
                            type: "success"
                        });
                    } else {
                        sweetAlert
                        ({
                            title: "Error!",
                            text: msg,
                            type: "error"
                        });
                    }

                })

            });
    }

    function EditarRanking(id){
        var url = "<?php echo constant("URL").'rankingext/partialeditar/'; ?>"+id;
        $("#ModalEditarRanking").load(url);
    }

    function ModalNuevo() {
        $("#txtnombre").val("");
        $("#txtartista").val("");
        $("#txtfecha").val("");
        $("#txturl").val("");
        $("#txtimagen").val("");
        $('#modalNuevoRegistro').modal('show');
    }

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
</script>
</body>
</html>

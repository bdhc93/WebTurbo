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
                        <h1 class="h3 mb-0 text-gray-800">Contactanos </h1>
                    </div>
                </div>


            </div>
            <hr class="sidebar-divider">



            <div class="container-fluid">

                <div class="card shadow mb-4">

                <div class="modal-body">

                    <form id="frmModificarContactos" action="<?php echo constant('URL'); ?>contactos/_updateContactos" method="post">

                        <input type="text" name="vista" value="CONTACTOS" hidden>
                        <input type="text" name="id" value="<?php echo $this->contactos->id; ?>" hidden>

                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label"><b>Título 1</b></label>
                            <div class="col-sm-5"><input type="text" name="titulo_1" id="txttitulo_1" class="form-control" value="<?php echo $this->contactos->titulo_1; ?>" required></div>
                            <label class="col-sm-1 col-form-label"><b>Texto 1</b></label>
                            <div class="col-sm-5"><input type="text" name="descripcion_1" id="txtdescripcion_1" value="<?php echo $this->contactos->descripcion_1; ?>" class="form-control" required></div>

                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-1 col-form-label"><b>Texto 1_2</b></label>
                            <div class="col-sm-5"><input type="text" name="descripcion_1_2" id="txtdescripcion_1_2" value="<?php echo $this->contactos->descripcion_1_2; ?>" class="form-control"></div>
                            <label class="col-sm-1 col-form-label"><b>Icono 1</b></label>
                            <div class="col-sm-5"><input type="text" name="icono_1" id="txticono1" value="<?php echo $this->contactos->icono_1; ?>" class="form-control" required></div>
                        </div>
                        <hr class="sidebar-divider">

                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label"><b>Título 2</b></label>
                            <div class="col-sm-5"><input type="text" name="titulo_2" id="txttitulo_2" class="form-control" value="<?php echo $this->contactos->titulo_2; ?>" required></div>
                            <label class="col-sm-1 col-form-label"><b>Texto 2</b></label>
                            <div class="col-sm-5"><input type="text" name="descripcion_2" id="txtdescripcion_2" value="<?php echo $this->contactos->descripcion_2; ?>" class="form-control" required></div>

                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-1 col-form-label"><b>Texto 2_2</b></label>
                            <div class="col-sm-5"><input type="text" name="descripcion_2_2" id="txtdescripcion_2_2" value="<?php echo $this->contactos->descripcion_2_2; ?>" class="form-control"></div>
                            <label class="col-sm-1 col-form-label"><b>Icono 2</b></label>
                            <div class="col-sm-5"><input type="text" name="icono_2" id="txticono2" value="<?php echo $this->contactos->icono_2; ?>" class="form-control" required></div>
                        </div>
                        <hr class="sidebar-divider">

                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label"><b>Título 3</b></label>
                            <div class="col-sm-5"><input type="text" name="titulo_3" id="txttitulo_3" class="form-control" value="<?php echo $this->contactos->titulo_3; ?>" required></div>
                            <label class="col-sm-1 col-form-label"><b>Texto 1</b></label>
                            <div class="col-sm-5"><input type="text" name="descripcion_3" id="txtdescripcion_3" value="<?php echo $this->contactos->descripcion_3; ?>" class="form-control" required></div>

                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-1 col-form-label"><b>Texto 3_2</b></label>
                            <div class="col-sm-5"><input type="text" name="descripcion_3_2" id="txtdescripcion_3_2" value="<?php echo $this->contactos->descripcion_3_2; ?>" class="form-control"></div>
                            <label class="col-sm-1 col-form-label"><b>Icono</b></label>
                            <div class="col-sm-5"><input type="text" name="icono_3" id="txticono3" value="<?php echo $this->contactos->icono_3; ?>" class="form-control" required></div>
                        </div>
                        <hr class="sidebar-divider">

                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label"><b>Título 4</b></label>
                            <div class="col-sm-5"><input type="text" name="titulo_4" id="txttitulo_4" class="form-control" value="<?php echo $this->contactos->titulo_4; ?>" required></div>
                            <label class="col-sm-1 col-form-label"><b>Texto 4</b></label>
                            <div class="col-sm-5"><input type="text" name="descripcion_4" id="txtdescripcion_4" value="<?php echo $this->contactos->descripcion_4; ?>" class="form-control" required></div>

                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-1 col-form-label"><b>Texto 4_2</b></label>
                            <div class="col-sm-5"><input type="text" name="descripcion_4_2" id="txtdescripcion_4_2" value="<?php echo $this->contactos->descripcion_4_2; ?>" class="form-control"></div>
                            <label class="col-sm-1 col-form-label"><b>Icono 4</b></label>
                            <div class="col-sm-5"><input type="text" name="icono_4" id="txticono4" value="<?php echo $this->contactos->icono_4; ?>" class="form-control" required></div>
                        </div>

                        <div class="col-lg-12 text-right">
                            <button type="submit" class="btn btn-danger text-right">Guardar</button>

                        </div>
                    </form>

                </div>
                </div>

            </div>

        </div>
        <?php
        require 'views/adm_footer.php';
        ?>
    </div>
</div>

<div id="Detalle"></div>
<?php
require 'views/adm_scripts.php';
?>
<script>

    $(function() {
        $('#frmModificarContactos').on('submit', function (event) {
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
                    $('#Detalle').html(response);

                    if (msg){
                        toastr.success('Guardado Correctamente', 'Correcto.');
                    }else {
                        toastr.error('Vuelva a intentarlo', 'Error inesperado.');
                    }

                },
                error: function (response) {
                    alert(response.Message);
                }
            });
        });
    });

</script>
</body>
</html>

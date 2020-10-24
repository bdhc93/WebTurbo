<?php
require 'views/adm_header.php';
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
    <link href="<?php echo constant('URL'); ?>public/plugins/cropper/modal.css" rel="stylesheet">
</head>
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
                        <h1 class="h3 mb-0 text-gray-800"> <?php echo $this->nosotros->vista; ?> </h1>
                    </div>
                </div>


            </div>
            <hr class="sidebar-divider">



            <div class="container-fluid">

                <div class="card shadow mb-4">

                    <div class="modal-body">

                        <form id="frmModificarnosotros" action="<?php echo constant('URL'); ?>nosotros/_updateMivisonVision" method="post">

                            <input type="text" name="vista" value="CONTACTOS" hidden>
                            <input type="text" name="id" value="<?php echo $this->nosotros->id; ?>" hidden>

                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><b>Título 1</b></label>
                                <div class="col-sm-5"><input type="text" name="titulo_1" id="txttitulo_1" class="form-control" value="<?php echo $this->nosotros->titulo_1; ?>" required></div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><b>Texto 1</b></label>
                                <div class="col-sm-11">
                                    <textarea name="descripcion_1" id="txtdescripcion_1" class="form-control" id="exampleFormControlTextarea1" rows="5" required><?php echo $this->nosotros->descripcion_1; ?></textarea>
                                </div>
                            </div>

                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/nosotros/mision_1.jpg" alt="Card image cap" style="width: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Imagen 1</h5>
                                        <form method="post">
                                            <input type="file" name="mision_1" class="image">
                                        </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/nosotros/mision_2.jpg" alt="Card image cap" style="width: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Imagen 2</h5>
                                        <form method="post">
                                            <input type="file" name="mision_2" class="image">
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" hidden>
                                <label class="col-sm-1 col-form-label"><b>Texto 1_2</b></label>
                                <div class="col-sm-5"><input type="text" name="descripcion_1_2" id="txtdescripcion_1_2" value="<?php echo $this->nosotros->descripcion_1_2; ?>" class="form-control"></div>
                                <label class="col-sm-1 col-form-label"><b>Icono 1</b></label>
                                <div class="col-sm-5"><input type="text" name="icono_1" id="txticono1" value="<?php echo $this->nosotros->icono_1; ?>" class="form-control"></div>
                            </div>
                            <hr class="sidebar-divider">

                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><b>Título 2</b></label>
                                <div class="col-sm-5"><input type="text" name="titulo_2" id="txttitulo_2" class="form-control" value="<?php echo $this->nosotros->titulo_2; ?>" required></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><b>Texto 2</b></label>
                                <div class="col-sm-11">
                                    <textarea name="descripcion_2" id="txtdescripcion_2" class="form-control" id="exampleFormControlTextarea1" rows="5" required><?php echo $this->nosotros->descripcion_2; ?></textarea>
                                </div>
                            </div>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/nosotros/mision_3.jpg" alt="Card image cap" style="width: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Imagen 3</h5>
                                        <form method="post">
                                            <input type="file" name="mision_3" class="image">
                                        </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/nosotros/mision_4.jpg" alt="Card image cap" style="width: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Imagen 4</h5>
                                        <form method="post">
                                            <input type="file" name="mision_4" class="image">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  row" hidden>
                                <label class="col-sm-1 col-form-label"><b>Texto 2_2</b></label>
                                <div class="col-sm-5"><input type="text" name="descripcion_2_2" id="txtdescripcion_2_2" value="<?php echo $this->nosotros->descripcion_2_2; ?>" class="form-control"></div>
                                <label class="col-sm-1 col-form-label"><b>Icono 2</b></label>
                                <div class="col-sm-5"><input type="text" name="icono_2" id="txticono2" value="<?php echo $this->nosotros->icono_2; ?>" class="form-control" ></div>
                            </div>
                            <hr class="sidebar-divider">

                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><b>Título 3</b></label>
                                <div class="col-sm-5"><input type="text" name="titulo_3" id="txttitulo_3" class="form-control" value="<?php echo $this->nosotros->titulo_3; ?>" required></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><b>Texto 3</b></label>
                                <div class="col-sm-11">
                                    <textarea name="descripcion_3" id="txtdescripcion_3" class="form-control" id="exampleFormControlTextarea1" rows="5" required><?php echo $this->nosotros->descripcion_3; ?></textarea>
                                </div>
                            </div>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/nosotros/mision_5.jpg" alt="Card image cap" style="width: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Imagen 5</h5>
                                        <form method="post">
                                            <input type="file" name="mision_5" class="image">
                                        </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/nosotros/mision_6.jpg" alt="Card image cap" style="width: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Imagen 6</h5>
                                        <form method="post">
                                            <input type="file" name="mision_6" class="image">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  row" hidden>
                                <label class="col-sm-1 col-form-label"><b>Texto 3_2</b></label>
                                <div class="col-sm-5"><input type="text" name="descripcion_3_2" id="txtdescripcion_3_2" value="<?php echo $this->nosotros->descripcion_3_2; ?>" class="form-control"></div>
                                <label class="col-sm-1 col-form-label"><b>Icono</b></label>
                                <div class="col-sm-5"><input type="text" name="icono_3" id="txticono3" value="<?php echo $this->nosotros->icono_3; ?>" class="form-control"></div>
                            </div>
                            <hr class="sidebar-divider">

                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><b>Título 4</b></label>
                                <div class="col-sm-5"><input type="text" name="titulo_4" id="txttitulo_4" class="form-control" value="<?php echo $this->nosotros->titulo_4; ?>" required></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><b>Texto 4</b></label>
                                <div class="col-sm-11">
                                    <textarea name="descripcion_4" id="txtdescripcion_4" class="form-control" id="exampleFormControlTextarea1" rows="5" required><?php echo $this->nosotros->descripcion_4; ?></textarea>
                                </div>
                            </div>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/nosotros/mision_7.jpg" alt="Card image cap" style="width: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Imagen 7</h5>
                                        <form method="post">
                                            <input type="file" name="mision_7" class="image">
                                        </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/nosotros/mision_8.jpg" alt="Card image cap" style="width: 400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Imagen 8</h5>
                                        <form method="post">
                                            <input type="file" name="mision_8" class="image">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  row" hidden>
                                <label class="col-sm-1 col-form-label"><b>Texto 4_2</b></label>
                                <div class="col-sm-5"><input type="text" name="descripcion_4_2" id="txtdescripcion_4_2" value="<?php echo $this->nosotros->descripcion_4_2; ?>" class="form-control"></div>
                                <label class="col-sm-1 col-form-label"><b>Icono 4</b></label>
                                <div class="col-sm-5"><input type="text" name="icono_4" id="txticono4" value="<?php echo $this->nosotros->icono_4; ?>" class="form-control"></div>
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

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="modalLabel">Seleccione el área a guardar de la imágen.</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">×</span>

                </button>

            </div>

            <div class="modal-body">

                <div class="img-container">

                    <div class="row">

                        <div class="col-md-8">

                            <img id="image">

                        </div>

                        <div class="col-md-4">

                            <div class="preview"></div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

                <button type="button" class="btn btn-primary" id="crop">Guardar</button>

            </div>

        </div>

    </div>

</div>

<div id="Detalle"></div>
<?php
require 'views/adm_scripts.php';
?>
<script>

    $(function() {
        $('#frmModificarnosotros').on('submit', function (event) {
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

    var nameslider= "";

    var $modal = $('#modal');

    var image = document.getElementById('image');

    var cropper;

    $("body").on("change", ".image", function(e){

        nameslider = e.currentTarget.name;

        var files = e.target.files;

        var done = function (url) {

            image.src = url;

            $modal.modal('show');

        };

        var reader;

        var file;

        var url;


        if (files && files.length > 0) {

            file = files[0];


            if (URL) {

                done(URL.createObjectURL(file));

            } else if (FileReader) {

                reader = new FileReader();

                reader.onload = function (e) {

                    done(reader.result);

                };

                reader.readAsDataURL(file);

            }

        }

    });

    $modal.on('shown.bs.modal', function () {

        cropper = new Cropper(image, {

            aspectRatio: 1.6045197740112994350282485875706,

            viewMode: 3,

            preview: '.preview'

        });

    }).on('hidden.bs.modal', function () {

        cropper.destroy();

        cropper = null;

    });


    $("#crop").click(function(){

        canvas = cropper.getCroppedCanvas({

            width: 284,

            height: 177,

        });

        canvas.toBlob(function(blob) {

            url = URL.createObjectURL(blob);

            var reader = new FileReader();

            reader.readAsDataURL(blob);

            reader.onloadend = function() {

                var base64data = reader.result;


                $.ajax({

                    type: "POST",

                    dataType: "json",

                    url: "<?php echo constant('URL'); ?>/administracion/upload?varname=" + nameslider + "&folder=nosotros",

                    data: {image: base64data},

                    success: function(data){

                        $modal.modal('hide');

                        setTimeout(function(){// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 2000);

                    },
                    error: function (xhr, status, error) {
                        console.log(xhr.responseText);
                        console.log(error);
                        console.log(status)
                        alert("Ocurrio un error, vuelva a intentarlo.");
                    }

                });

            }

        });

    })

</script>
</body>
</html>

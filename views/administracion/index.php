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

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Inicio </h1>
                </div>

                <hr class="sidebar-divider">

                <div class="card">
                    <div class="card-header bg-dark"><h4 style="color: white">Imágenes Carrusel</h4></div>
                    <div class="card-body">

                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/main/slider-01.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Slider 1</h5>
                                    <form method="post">
                                        <input type="file" name="slider-01" class="image">
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/main/slider-02.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Slider 2</h5>
                                    <form method="post">
                                        <input type="file" name="slider-02" class="image">
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/main/slider-03.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Slider 3</h5>
                                    <form method="post">
                                        <input type="file" name="slider-03" class="image">
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="<?php echo constant('URL'); ?>public/images/main/slider-04.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Slider 4</h5>
                                    <form method="post">
                                        <input type="file" name="slider-04" class="image">
                                    </form>
                                </div>
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


</div>
<?php
require 'views/adm_scripts.php';
?>

<script>

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

            aspectRatio: 2.5806451612903225806451612903226,

            viewMode: 3,

            preview: '.preview'

        });

    }).on('hidden.bs.modal', function () {

        cropper.destroy();

        cropper = null;

    });


    $("#crop").click(function(){

        canvas = cropper.getCroppedCanvas({

            width: 1920,

            height: 744,

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

                    url: "<?php echo constant('URL'); ?>/administracion/upload?varname=" + nameslider,

                    data: {image: base64data},

                    success: function(data){

                        console.log(data);

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

<?php
require 'views/adm_header.php';
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
</head>

<style type="text/css">

    img {

        display: block;

        max-width: 100%;

    }

    .preview {

        overflow: hidden;

        width: 160px;

        height: 160px;

        margin: 10px;

        border: 1px solid red;

    }

    .modal-lg{

        max-width: 1000px !important;

    }

</style>

<?php
//session_start();
//
//$_SESSION["imageslidername"]="img";
//?>

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
                                <img src="<?php echo constant('URL'); ?>public/images/main/slider-01.jpg" width="300px" alt="logo-img">
                            </div>
                            <div class="card-body">
                                <form method="post">

                                    <input type="file" name="slider-01" class="image">

                                </form>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <!-- Default Card Example -->
                        <div class="card text-center mb-4">
                            <div class="card-header">
                                <img src="<?php echo constant('URL'); ?>public/images/main/slider-02.jpg" width="300px" alt="logo-img">
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
                                <img src="<?php echo constant('URL'); ?>public/images/main/slider-03.jpg" width="300px" alt="logo-img">
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

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="modalLabel">PHP Crop Image Before Upload using Cropper JS - NiceSnippets.com</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">×</span>

                    </button>

                </div>

                <div class="modal-body">

                    <div class="img-container">

                        <div class="row">

                            <div class="col-md-8">

                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">

                            </div>

                            <div class="col-md-4">

                                <div class="preview"></div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                    <button type="button" class="btn btn-primary" id="crop">Crop</button>

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

        console.log(e.currentTarget.name);

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
        console.log("2");

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

                        alert("success upload image");

                    },
                    error: function (xhr, status, error) {
                        console.log(xhr.responseText);
                        console.log(error);
                        console.log(status);

                    }

                });


            }

        });

    })


</script>


</body>

</html>

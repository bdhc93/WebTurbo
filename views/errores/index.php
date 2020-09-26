<?php
require 'views/header.php';
?>
<body id="body" class="up-scroll" data-spy="scroll" data-target=".element-right-sidebar">
<?php
//require 'views/preloader.php';
require 'views/navigation.php';
?>

<div class="" style="background-color: gray">
    <br>
    <br>
    <section style="background-image: url(<?php echo constant('URL'); ?>img/not-found/not-found-bg.jpg);">
        <div class="container">
            <div class="row text-center align-items-center justify-content-center" style="height: -webkit-fill-available;">
                <div class="col-md-10 col-lg-8 col-xl-6">
                    <div class="mb-7 mb-lg-9">
                        <img class="img-fluid" src="<?php echo constant('URL'); ?>public/img/not-found/not-found.png" alt="image">
                    </div>

                    <p class="text-white h3 mb-7 ">Oops! La página que estas buscando no se encuentra!</p>
                    <p class="text-white h3 mb-7 mb-lg-9">Intenta Nuevamente</p>

                </div>
            </div>
        </div>
    </section>

</div>

<?php require 'views/footer.php' ?>
</body>
</html>

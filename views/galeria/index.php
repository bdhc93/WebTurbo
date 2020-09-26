<?php
require 'views/header.php';
?>
<body id="body" class="up-scroll" data-spy="scroll" data-target=".element-right-sidebar">
<?php
//require 'views/preloader.php';
require 'views/navigation.php';
?>

<section class="page-title">
    <div class="page-title-img bg-img bg-overlay-darken" style="background-image: url(public/img/pages/page-title-bg8.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center" style="height: 200px;">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <div class="title-border">
                            <h2 class="text-uppercase text-white font-weight-bold">VIDEOS</h2>
                        </div>
                        <p class="text-white mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-10">
    <div class="container">
        <div id="filters" class="button-group">
            <button class="button is-checked" data-filter="*">All Places</button>
            <button class="button" data-filter=".asia">Asia</button>
            <button class="button" data-filter=".america">America</button>
            <button class="button" data-filter=".europe">Europe</button>
            <button class="button" data-filter=".africa">Africa</button>
        </div>

        <div class="row grid">
            <div class="col-md-6 col-lg-4 col-xl-3 element-item america africa">
                <div class="media media-hoverable justify-content-center mb-6">
                    <div class="media-content">
                        <img class="media-img" src="../assets/img/home/packages/packages-1.jpg" alt="Generic placeholder image">

                        <a href="../assets/img/home/packages/packages-1.jpg" data-fancybox="gallery" class="media-object">
                            <h3 class="text-uppercase mb-0">Vestibulum Tour</h3>
                        </a>

                        <div class="media-img-overlay">
                            <div class="overlay-content">
                                <h3 class="">from <span class="text-primary">$399</span></h3>
                                <p class="text-white mb-0">
                                    <span class="mr-1"><i class="fa fa-calendar" aria-hidden="true"></i></span> 27 Jan, 2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 element-item africa america">
                <div class="media media-hoverable justify-content-center mb-6">
                    <div class="media-content">
                        <img class="media-img" src="../assets/img/home/packages/packages-2.jpg" alt="Generic placeholder image">

                        <a href="../assets/img/home/packages/packages-2.jpg" data-fancybox="gallery" class="media-object">
                            <h3 class="text-uppercase mb-0">Maecenas Tour</h3>
                        </a>

                        <div class="media-img-overlay">
                            <div class="overlay-content">
                                <h3 class="">from <span class="text-primary">$599</span></h3>
                                <p class="text-white mb-0">
                                    <span class="mr-1"><i class="fa fa-calendar" aria-hidden="true"></i></span> 09 Feb, 2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 element-item asia america">
                <div class="media media-hoverable justify-content-center mb-6">
                    <div class="media-content">
                        <img class="media-img" src="../assets/img/home/packages/packages-3.jpg" alt="Generic placeholder image">

                        <a href="../assets/img/home/packages/packages-3.jpg" data-fancybox="gallery" class="media-object">
                            <h3 class="text-uppercase mb-0">Lobortis Tour</h3>
                        </a>

                        <div class="media-img-overlay">
                            <div class="overlay-content">
                                <h3 class="">from <span class="text-primary">$299</span></h3>
                                <p class="text-white mb-0">
                                    <span class="mr-1"><i class="fa fa-calendar" aria-hidden="true"></i></span> 14 Feb, 2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 element-item asia africa europe">
                <div class="media media-hoverable justify-content-center mb-6">
                    <div class="media-content">
                        <img class="media-img" src="../assets/img/home/packages/packages-4.jpg" alt="Generic placeholder image">

                        <a href="../assets/img/home/packages/packages-4.jpg" data-fancybox="gallery" class="media-object">
                            <h3 class="text-uppercase mb-0">Lacus Tour</h3>
                        </a>

                        <div class="media-img-overlay">
                            <div class="overlay-content">
                                <h3 class="">from <span class="text-primary">$399</span></h3>
                                <p class="text-white mb-0">
                                    <span class="mr-1"><i class="fa fa-calendar" aria-hidden="true"></i></span> 11 Jan, 2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 element-item america">
                <div class="media media-hoverable justify-content-center mb-6 mb-xl-0">
                    <div class="media-content">
                        <img class="media-img" src="../assets/img/home/packages/packages-5.jpg" alt="Generic placeholder image">

                        <a href="../assets/img/home/packages/packages-5.jpg" data-fancybox="gallery" class="media-object">
                            <h3 class="text-uppercase mb-0">Nullam Tour</h3>
                        </a>

                        <div class="media-img-overlay">
                            <div class="overlay-content">
                                <h3 class="">from <span class="text-primary">$199</span></h3>
                                <p class="text-white mb-0">
                                    <span class="mr-1"><i class="fa fa-calendar" aria-hidden="true"></i></span> 2 Feb, 2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 element-item asia africa europe">
                <div class="media media-hoverable justify-content-center mb-6 mb-xl-0">
                    <div class="media-content">
                        <img class="media-img" src="../assets/img/home/packages/packages-6.jpg" alt="Generic placeholder image">

                        <a href="../assets/img/home/packages/packages-6.jpg" data-fancybox="gallery" class="media-object">
                            <h3 class="text-uppercase mb-0">Maldives Tour</h3>
                        </a>

                        <div class="media-img-overlay">
                            <div class="overlay-content">
                                <h3 class="">from <span class="text-primary">$799</span></h3>
                                <p class="text-white mb-0">
                                    <span class="mr-1"><i class="fa fa-calendar" aria-hidden="true"></i></span> 26 Feb, 2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 element-item europe">
                <div class="media media-hoverable justify-content-center mb-6 mb-md-0">
                    <div class="media-content">
                        <img class="media-img" src="../assets/img/home/packages/packages-1.jpg" alt="Generic placeholder image">

                        <a href="../assets/img/home/packages/packages-1.jpg" data-fancybox="gallery" class="media-object">
                            <h3 class="text-uppercase mb-0">Quaerit Tour</h3>
                        </a>

                        <div class="media-img-overlay">
                            <div class="overlay-content">
                                <h3 class="">from <span class="text-primary">$799</span></h3>
                                <p class="text-white mb-0">
                                    <span class="mr-1"><i class="fa fa-calendar" aria-hidden="true"></i></span> 26 Feb, 2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3 element-item asia europe">
                <div class="media media-hoverable justify-content-center">
                    <div class="media-content">
                        <img class="media-img" src="../assets/img/home/packages/packages-2.jpg" alt="Generic placeholder image">

                        <a href="../assets/img/home/packages/packages-2.jpg" data-fancybox="gallery" class="media-object">
                            <h3 class="text-uppercase mb-0">Hendrit Tour</h3>
                        </a>

                        <div class="media-img-overlay">
                            <div class="overlay-content">
                                <h3 class="">from <span class="text-primary">$799</span></h3>
                                <p class="text-white mb-0">
                                    <span class="mr-1"><i class="fa fa-calendar" aria-hidden="true"></i></span> 26 Feb, 2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'views/footer.php' ?>
</body>
</html>

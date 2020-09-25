<?php
require 'views/header.php';
require 'views/navigation.php';
?>
<body>

<section class="page-title">
    <div class="page-title-img bg-img bg-overlay-darken" style="background-image: url(public/img/pages/page-title-bg8.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center" style="height: 200px;">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <div class="title-border">
                            <h2 class="text-uppercase text-white font-weight-bold">FOTOS</h2>
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

        <div class="row">
            <div class="col-md-4">
                <div class="row grid">
                    <div class="col-12 element-item europe">
                        <div class="media media-hoverable justify-content-center mb-2 mb-md-4 mb-lg-6">
                            <div class="media-content">
                                <img class="media-img" src="../assets/img/packages/masonry-01.jpg" alt="Generic placeholder image">

                                <a href="../assets/img/packages/masonry-01.jpg" data-fancybox="gallery" class="media-img-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-uppercase font-weight-bold mb-5">Maldives Tour</h3>
                                        <p class="text-white text-capitalize mb-5">Lorem ipsum</p>

                                        <button type="button" onclick="location.href='jascript:void(0)';" class="btn btn-xs btn-sale btn-primary text-uppercase">
                                            View more
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 element-item america">
                        <div class="media media-hoverable justify-content-center mb-2 mb-md-4 mb-lg-6">
                            <div class="media-content">
                                <img class="media-img" src="../assets/img/packages/masonry-06.jpg" alt="Generic placeholder image">

                                <a href="../assets/img/packages/masonry-06.jpg" data-fancybox="gallery" class="media-img-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-uppercase font-weight-bold mb-5">Vestibas Tour</h3>
                                        <p class="text-white text-capitalize mb-5">Lorem ipsum</p>

                                        <button type="button" onclick="location.href='jascript:void(0)';"
                                                class="btn btn-xs btn-sale btn-primary text-uppercase">
                                            View more
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 element-item asia africa">
                        <div class="media media-hoverable justify-content-center mb-2 mb-md-0">
                            <div class="media-content">
                                <img class="media-img" src="../assets/img/packages/masonry-09.jpg" alt="Generic placeholder image">

                                <a href="../assets/img/packages/masonry-09.jpg" data-fancybox="gallery" class="media-img-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-uppercase font-weight-bold mb-3">Blandit Tour</h3>
                                        <p class="text-white text-capitalize mb-4">Lorem ipsum</p>

                                        <button type="button" onclick="location.href='jascript:void(0)';"
                                                class="btn btn-xs btn-sale btn-primary text-uppercase">
                                            View more
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row grid">
                    <div class="col-12 element-item america">
                        <div class="media media-hoverable justify-content-center mb-2 mb-md-4 mb-lg-6">
                            <div class="media-content">
                                <img class="media-img" src="../assets/img/packages/masonry-02.jpg" alt="Generic placeholder image">

                                <a href="../assets/img/packages/masonry-02.jpg" data-fancybox="gallery" class="media-img-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-uppercase font-weight-bold mb-3">Supendis Tour</h3>
                                        <p class="text-white text-capitalize mb-4">Lorem ipsum</p>

                                        <button type="button" onclick="location.href='jascript:void(0)';"
                                                class="btn btn-xs btn-sale btn-primary text-uppercase">
                                            View more
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 element-item asia africa">
                        <div class="media media-hoverable justify-content-center mb-2 mb-md-4 mb-lg-6">
                            <div class="media-content">
                                <img class="media-img" src="../assets/img/packages/masonry-04.jpg" alt="Generic placeholder image">

                                <a href="../assets/img/packages/masonry-04.jpg" data-fancybox="gallery" class="media-img-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-uppercase font-weight-bold mb-3">Eroserat Tour</h3>
                                        <p class="text-white text-capitalize mb-4">Lorem ipsum</p>

                                        <button type="button" onclick="location.href='jascript:void(0)';"
                                                class="btn btn-xs btn-sale btn-primary text-uppercase">
                                            View more
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 element-item europe">
                        <div class="media media-hoverable justify-content-center mb-2 mb-md-0">
                            <div class="media-content">
                                <img class="media-img" src="../assets/img/packages/masonry-05.jpg" alt="Generic placeholder image">

                                <a href="../assets/img/packages/masonry-05.jpg" data-fancybox="gallery" class="media-img-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-uppercase font-weight-bold mb-3">Quisque Tour</h3>
                                        <p class="text-white text-capitalize mb-4">Lorem ipsum</p>

                                        <button type="button" onclick="location.href='jascript:void(0)';"
                                                class="btn btn-xs btn-sale btn-primary text-uppercase">
                                            View more
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row grid">
                    <div class="col-12 element-item america africa">
                        <div class="media media-hoverable justify-content-center mb-2 mb-md-4 mb-lg-6">
                            <div class="media-content">
                                <img class="media-img" src="../assets/img/packages/masonry-03.jpg" alt="Generic placeholder image">

                                <a href="../assets/img/packages/masonry-03.jpg" data-fancybox="gallery" class="media-img-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-uppercase font-weight-bold mb-3">Maldives Tour</h3>
                                        <p class="text-white text-capitalize mb-4">Lorem ipsum</p>

                                        <button type="button" onclick="location.href='jascript:void(0)';"
                                                class="btn btn-xs btn-sale btn-primary text-uppercase">
                                            View more
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 element-item  europe">
                        <div class="media media-hoverable justify-content-center mb-2 mb-md-4 mb-lg-6">
                            <div class="media-content">
                                <img class="media-img" src="../assets/img/packages/masonry-07.jpg" alt="Generic placeholder image">

                                <a href="../assets/img/packages/masonry-07.jpg" data-fancybox="gallery" class="media-img-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-uppercase font-weight-bold mb-3">Vestibas Tour</h3>
                                        <p class="text-white text-capitalize mb-4">Lorem ipsum</p>

                                        <button type="button" onclick="location.href='jascript:void(0)';"
                                                class="btn btn-xs btn-sale btn-primary text-uppercase">
                                            View more
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 element-item asia">
                        <div class="media media-hoverable justify-content-center">
                            <div class="media-content">
                                <img class="media-img" src="../assets/img/packages/masonry-08.jpg" alt="Generic placeholder image">

                                <a href="../assets/img/packages/masonry-08.jpg" data-fancybox="gallery" class="media-img-overlay">
                                    <div class="overlay-content">
                                        <h3 class="text-uppercase font-weight-bold mb-5">Maldives Tour</h3>
                                        <p class="text-white text-capitalize mb-5">Lorem ipsum</p>

                                        <button type="button" onclick="location.href='jascript:void(0)';"
                                                class="btn btn-xs btn-sale btn-primary text-uppercase">
                                            View more
                                        </button>
                                    </div>
                                </a>
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

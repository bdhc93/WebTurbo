<?php
require 'views/header.php';
require 'views/navigation.php';
?>
<body>

<div class="main-wrapper home-main"></div>

<section class="page-title">
    <div class="page-title-img bg-img bg-overlay-darken" style="background-image: url(../assets/img/pages/page-title-bg15.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center" style="height: 200px;">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <div class="title-border">
                            <h2 class="text-uppercase text-white font-weight-bold">ESPECTACULOS</h2>
                        </div>
                        <p class="text-white mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-smoke py-10">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group mb-5 mb-md-0 bg-white">
                                <div class="select-default select-category-2">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-8 d-none d-md-block">
                            <div class="d-flex justify-content-md-end">
                                <a href="noticias_espec_cuadro.html" class="icon-md bg-white rounded shadow">
                                    <i class="fa fa-bars text-gray-color" aria-hidden="true"></i>
                                </a>

                                <a href="javascript:void(0)" class="icon-md bg-primary rounded shadow ml-3">
                                    <i class="fa fa-th text-white" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card card-hover">
                            <a href="javascript:void(0)" class="position-relative">
                                <img class="card-img-top" src="../assets/img/cars/car-img-01.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <div class="badge badge-primary badge-rounded-circle">
                    <span class="d-block">
                      50%<br>off
                    </span>
                                    </div>

                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-0">
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>

                                    <small>
                                        <ul class="list-unstyled d-flex text-white font-weight-bold mb-0">
                                            <li class="border-right border-white pr-2">7 days</li>
                                            <li class="border-right border-white px-2">15 hrs</li>
                                            <li class="pl-2">15 min</li>
                                        </ul>
                                    </small>
                                </div>
                            </a>

                            <div class="card-body px-4">
                                <h5>
                                    <a href="javascript:void(0)" class="card-title text-uppercase">Nissan SV 2015</a>
                                </h5>
                                <p class="mb-5">Integer purus ex, dictum nec elementum eu, tristique vel lectus. Donec rutrum lectus et pharetra
                                    egestas.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Start from</p>
                                        <h3 class="text-primary">$299</h3>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#inquiry" class="btn btn-xs btn-outline-secondary text-uppercase">Inquiry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card card-hover">
                            <a href="javascript:void(0)" class="position-relative">
                                <img class="card-img-top" src="../assets/img/cars/car-img-02.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-0">
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>

                                    <small>
                                        <ul class="list-unstyled d-flex text-white font-weight-bold mb-0">
                                            <li class="border-right border-white pr-2">12 days</li>
                                            <li class="border-right border-white px-2">3 hrs</li>
                                            <li class="pl-2">12 min</li>
                                        </ul>
                                    </small>
                                </div>
                            </a>

                            <div class="card-body px-4">
                                <h5 class="">
                                    <a href="javascript:void(0)" class="card-title text-uppercase">Audi A7</a>
                                </h5>
                                <p class="mb-5">Proin convallis magna vel libero accumsan sollicitudin. Quisque dapibus vitae turpis eu magna
                                    sagittis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Start from</p>
                                        <h3 class="text-primary">$499</h3>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card card-hover">
                            <a href="javascript:void(0)" class="position-relative">
                                <img class="card-img-top" src="../assets/img/cars/car-img-03.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-0">
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>

                                    <small>
                                        <ul class="list-unstyled d-flex text-white font-weight-bold mb-0">
                                            <li class="border-right border-white pr-2">17 days</li>
                                            <li class="border-right border-white px-2">14 hrs</li>
                                            <li class="pl-2">10 min</li>
                                        </ul>
                                    </small>
                                </div>
                            </a>

                            <div class="card-body px-4">
                                <h5>
                                    <a href="javascript:void(0)" class="card-title text-uppercase">Audi A4</a>
                                </h5>
                                <p class="mb-5">Vivamus eu mattis nibh. Quisque eget ipsum at odio fringilla consequat vel id erat. Suspendisse non
                                    feugiat mi.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Start from</p>
                                        <h3 class="text-primary">$349</h3>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-outline-secondary text-uppercase">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card card-hover">
                            <a href="javascript:void(0)" class="position-relative">
                                <img class="card-img-top" src="../assets/img/cars/car-img-04.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-0">
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>

                                    <small>
                                        <ul class="list-unstyled d-flex text-white font-weight-bold mb-0">
                                            <li class="border-right border-white pr-2">25 days</li>
                                            <li class="border-right border-white px-2">01 hrs</li>
                                            <li class="pl-2">03 min</li>
                                        </ul>
                                    </small>
                                </div>
                            </a>

                            <div class="card-body px-4">
                                <h5 class="">
                                    <a href="javascript:void(0)" class="card-title text-uppercase">BMW 335 I</a>
                                </h5>

                                <p class="mb-5">Sagittis proin convallis magna vel libero accumsan sollicitudin. Quisque dapibus vitae turpis eu
                                    magna.</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Start from</p>
                                        <h3 class="text-primary">$199</h3>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-outline-secondary text-uppercase">Details</a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-outline-secondary px-3">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card card-hover">
                            <a href="javascript:void(0)" class="position-relative">
                                <img class="card-img-top" src="../assets/img/cars/car-img-05.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-0">
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>

                                    <small>
                                        <ul class="list-unstyled d-flex text-white font-weight-bold mb-0">
                                            <li class="border-right border-white pr-2">27 days</li>
                                            <li class="border-right border-white px-2">05 hrs</li>
                                            <li class="pl-2">33 min</li>
                                        </ul>
                                    </small>
                                </div>
                            </a>

                            <div class="card-body px-4">
                                <h5 class="">
                                    <a href="javascript:void(0)" class="card-title text-uppercase">Toyota FJ</a>
                                </h5>

                                <p class="mb-5">Suspendisse non feugiat mi. Vivamus eu mattis nibh. Quisque eget ipsum at odio fringilla consequat
                                    vel id erat.</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Start from</p>
                                        <h3 class="text-primary">$249</h3>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book</a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-outline-secondary px-3">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card card-hover">
                            <a href="javascript:void(0)" class="position-relative">
                                <img class="card-img-top" src="../assets/img/cars/car-img-06.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <div class="badge badge-primary badge-rounded-circle">
                    <span class="d-block">
                      50%<br>off
                    </span>
                                    </div>

                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-0">
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>

                                    <small>
                                        <ul class="list-unstyled d-flex text-white font-weight-bold mb-0">
                                            <li class="border-right border-white pr-2">35 days</li>
                                            <li class="border-right border-white px-2">11 hrs</li>
                                            <li class="pl-2">03 min</li>
                                        </ul>
                                    </small>
                                </div>
                            </a>

                            <div class="card-body px-4">
                                <h5>
                                    <a href="javascript:void(0)" class="card-title text-uppercase">Audi A5 3.0</a>
                                </h5>
                                <p class="mb-5">Donec rutrum lectus et pharetra egestas. Integer purus ex, dictum nec elementum eu, tristique vel
                                    lectus.</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Start from</p>
                                        <h3 class="text-primary">$149</h3>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#inquiry" class="btn btn-xs btn-outline-secondary text-uppercase">Inquiry</a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-outline-secondary px-3">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="card card-hover">
                            <a href="javascript:void(0)" class="position-relative">
                                <img class="card-img-top" src="../assets/img/cars/car-img-07.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-0">
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>

                                    <small>
                                        <ul class="list-unstyled d-flex text-white font-weight-bold mb-0">
                                            <li class="border-right border-white pr-2">07 days</li>
                                            <li class="border-right border-white px-2">15 hrs</li>
                                            <li class="pl-2">20 min</li>
                                        </ul>
                                    </small>
                                </div>
                            </a>

                            <div class="card-body px-4">
                                <h5 class="">
                                    <a href="javascript:void(0)" class="card-title text-uppercase">Nissan SV 2020</a>
                                </h5>

                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Start from</p>
                                        <h3 class="text-primary">$150</h3>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="card card-hover">
                            <a href="javascript:void(0)" class="position-relative">
                                <img class="card-img-top" src="../assets/img/cars/car-img-02.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <div class="badge badge-primary badge-rounded-circle">
                    <span class="d-block">
                      50%<br>off
                    </span>
                                    </div>

                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-0">
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>

                                    <small>
                                        <ul class="list-unstyled d-flex text-white font-weight-bold mb-0">
                                            <li class="border-right border-white pr-2">07 days</li>
                                            <li class="border-right border-white px-2">15 hrs</li>
                                            <li class="pl-2">20 min</li>
                                        </ul>
                                    </small>
                                </div>
                            </a>

                            <div class="card-body px-4">
                                <h5 class="">
                                    <a href="javascript:void(0)" class="card-title text-uppercase"> Audi A7</a>
                                </h5>

                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Start from</p>
                                        <h3 class="text-primary">$150</h3>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#inquiry" class="btn btn-xs btn-outline-secondary text-uppercase">Inquiry</a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-outline-secondary px-3">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card card-hover">
                            <a href="javascript:void(0)" class="position-relative">
                                <img class="card-img-top" src="../assets/img/cars/car-img-03.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-0">
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                    </ul>

                                    <small>
                                        <ul class="list-unstyled d-flex text-white font-weight-bold mb-0">
                                            <li class="border-right border-white pr-2">07 days</li>
                                            <li class="border-right border-white px-2">15 hrs</li>
                                            <li class="pl-2">20 min</li>
                                        </ul>
                                    </small>
                                </div>
                            </a>

                            <div class="card-body px-4">
                                <h5 class="">
                                    <a href="javascript:void(0)" class="card-title text-uppercase"> Audi A4</a>
                                </h5>

                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Start from</p>
                                        <h3 class="text-primary">$150</h3>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book</a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-outline-secondary px-3">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================================
  ———	PAGINATION
  ===================================== -->
    <section class="pt-5 pt-md-7">
        <div class="container">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center align-items-center">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1">
                            <i class="fa fa-long-arrow-left d-none d-md-inline-block mr-md-1" aria-hidden="true"></i> Previous
                        </a>
                    </li>

                    <li class="page-item">
                        <a class="page-link active" href="javascript:void(0)">1</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">...</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">9</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">Next
                            <i class="fa fa-long-arrow-right d-none d-md-inline-block ml-md-1" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

</section>



<?php require 'views/footer.php' ?>
</body>
</html>

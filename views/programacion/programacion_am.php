<?php
require 'views/header.php';
require 'views/navigation.php';
?>
<body>

<section class="page-title">
    <div class="page-title-img bg-img bg-overlay-darken" style="background-image: url(../assets/img/pages/page-title-bg11.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center" style="height: 200px;">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <div class="">
                            <h2 class="text-uppercase text-white font-weight-bold">PROGRAMACIÓN AM</h2>
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
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="mb-6 bg-white px-3 py-6 border-top border-top-5 border-primary rounded">
                            <h4 class="text-uppercase font-weight-bold">Search</h4>

                            <form class="" action="index.html" method="post">
                                <div class="mb-5">
                                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0 pl-0" required=""
                                           aria-describedby="textHelp" placeholder="Hotel Name">
                                </div>

                                <div class="form-group form-group-icon form-group-icon-dark mb-5">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <input type="text" class="form-control daterange-picker sidebar-daterange-picker text-uppercase"
                                           name="dateRange" value="" placeholder="Check in" />
                                </div>

                                <div class="form-group form-group-icon form-group-icon-dark mb-5">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <input type="text" class="form-control daterange-picker sidebar-daterange-picker text-uppercase"
                                           name="dateRange" value="" placeholder="Check out" />
                                </div>

                                <div class="form-group mb-5">
                                    <div class="row align-items-center">
                                        <label class="control-label count-control-label col-5 col-lg-12 col-xl-4 text-uppercase mb-0 mb-lg-4 mb-xl-0 text-lg-center">Rooms</label>

                                        <div class="col-7 col-lg-12 col-xl-7">
                                            <div class="count-input mr-0 mx-lg-auto mr-xl-0">
                                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                                <input class="quantity" type="number" value="1">
                                                <a class="incr-btn" data-action="increase" href="#">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="row align-items-center">
                                        <label
                                            class="control-label count-control-label col-5 col-lg-12 col-xl-4 text-uppercase mb-0 mb-lg-4 mb-xl-0 text-lg-center">Adults</label>

                                        <div class="col-7 col-lg-12 col-xl-7">
                                            <div class="count-input mr-0 mx-lg-auto mr-xl-0">
                                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                                <input class="quantity" type="number" value="1">
                                                <a class="incr-btn" data-action="increase" href="#">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="row align-items-center">
                                        <label
                                            class="control-label count-control-label col-5 col-lg-12 col-xl-4 text-uppercase mb-0 mb-lg-4 mb-xl-0 text-lg-center">Childs</label>

                                        <div class="col-7 col-lg-12 col-xl-7">
                                            <div class="count-input mr-0 mx-lg-auto mr-xl-0">
                                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                                <input class="quantity" type="number" value="0">
                                                <a class="incr-btn" data-action="increase" href="#">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" onclick="location.href='javascript:void(0)';"
                                        class="btn btn-block btn-xs btn-outline-secondary text-uppercase">Search</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-12">
                        <div class="mb-6 bg-white p-3 pt-6 border-top border-top-5 border-primary rounded">
                            <h4 class="text-uppercase font-weight-bold">Filter by</h4>

                            <div class="accordion" id="accordionOne">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="icon-bg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <span>By Price</span>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">
                                                    <span>$0 - $50</span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">
                                                    <span>$50 - $100</span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">
                                                    <span>$100 - $150</span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">
                                                    <span>$150 - $200</span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">
                                                    <span>$200 - $250</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="icon-bg collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <span>Facility</span>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">
                                                    <span>Accesibility</span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">
                                                    <span>Breakfast</span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13">
                                                    <span>Parking</span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">
                                                    <span>Free wifi</span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">
                                                    <span>spa</span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                <label class="custom-control-label" for="customCheck16">
                                                    <span>Plasma tv</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="icon-bg collapsed" data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <span>By Star Catagory</span>
                                        </h5>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">
                          <span class="text-warning">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                          </span>

                                                    <span class="ml-1">
                            (5)
                          </span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">
                          <span class="text-warning">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </span>

                                                    <span class="ml-1">
                            (4)
                          </span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">
                          <span class="text-warning">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </span>

                                                    <span class="ml-1">
                            (3)
                          </span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9">
                          <span class="text-warning">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </span>

                                                    <span class="ml-1">
                            (2)
                          </span>
                                                </label>
                                            </div>

                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10">
                          <span class="text-warning">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </span>

                                                    <span class="ml-1">
                            (2)
                          </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="mb-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="form-group mb-5 mb-md-0 bg-white">
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-8 d-none d-md-block">
                            <div class="d-flex justify-content-md-end">
                                <a href="" class="icon-md bg-primary rounded shadow">
                                    <i class="fa fa-bars text-white" aria-hidden="true"></i>
                                </a>

                                <a href="programacion_am_cuadro.php" class="icon-md bg-white rounded shadow ml-3">
                                    <i class="fa fa-th text-gray-color" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media media-list-view media-border flex-column flex-md-row align-items-stretch mb-5">
                    <div class="media-img position-relative">
                        <img class="img-fluid position-relative" src="../assets/img/holets/hotel-list-01.jpg" alt="gallery-img">
                        <a class="media-img-overlay" data-fancybox="gallery" href="../assets/img/holets/hotel-list-01.jpg"></a>
                    </div>

                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h4>
                                    <a class="media-title" href="single-hotel-right-sidebar.html">Park hyat hotel</a>
                                </h4>
                                <div class="rating-view">
                                    <span class="star add-rating-default pl-0"></span>
                                    <span class="content-view text-uppercase border-right-0 pl-1">(Reviews 29)</span>
                                </div>

                                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.</p>
                                <div class="date-view">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2019</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-4">
                                <div class="bg-primary text-center p-3 view-details">
                                    <h2 class="text-white font-weight-bold h1">$25</h2>
                                    <p class="text-white text-capitalize">Per Night</p>
                                    <div>
                                        <a href="single-hotel-fullwidth.html"
                                           class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Details</a>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media media-list-view media-border flex-column flex-md-row align-items-stretch mb-5">
                    <div class="media-img position-relative">
                        <img class="img-fluid position-relative" src="../assets/img/holets/hotel-list-02.jpg" alt="gallery-img">
                        <a class="media-img-overlay" data-fancybox="gallery" href="../assets/img/holets/hotel-list-02.jpg"></a>
                    </div>

                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h4>
                                    <a class="media-title" href="single-hotel-right-sidebar.html">Mariot hotel</a>
                                </h4>
                                <div class="rating-view">
                                    <span class="star add-rating-default pl-0"></span>
                                    <span class="content-view text-uppercase border-right-0 pl-1">(Reviews 35)</span>
                                </div>

                                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="date-view">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2019</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-4">
                                <div class="bg-primary text-center p-3 view-details">
                                    <h2 class="text-white font-weight-bold h1">$32</h2>
                                    <p class="text-white text-capitalize">Per Night</p>
                                    <div>
                                        <a href="single-hotel-fullwidth.html"
                                           class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Details</a>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media media-list-view media-border flex-column flex-md-row align-items-stretch mb-5">
                    <div class="media-img position-relative">
                        <img class="img-fluid position-relative" src="../assets/img/holets/hotel-list-03.jpg" alt="gallery-img">
                        <a class="media-img-overlay" data-fancybox="gallery" href="../assets/img/holets/hotel-list-03.jpg"></a>
                    </div>

                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h4>
                                    <a class="media-title" href="single-hotel-right-sidebar.html">Lumier hotel</a>
                                </h4>
                                <div class="rating-view">
                                    <span class="star add-rating-default pl-0"></span>
                                    <span class="content-view text-uppercase border-right-0 pl-1">(Reviews 19)</span>
                                </div>

                                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="date-view">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2019</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-4">
                                <div class="bg-primary text-center p-3 view-details">
                                    <h2 class="text-white font-weight-bold h1">$45</h2>
                                    <p class="text-white text-capitalize">Per Night</p>
                                    <div>
                                        <a href="single-hotel-fullwidth.html"
                                           class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Details</a>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media media-list-view media-border flex-column flex-md-row align-items-stretch mb-5">
                    <div class="media-img position-relative">
                        <img class="img-fluid position-relative" src="../assets/img/holets/hotel-list-04.jpg" alt="gallery-img">
                        <a class="media-img-overlay" data-fancybox="gallery" href="../assets/img/holets/hotel-list-04.jpg"></a>
                    </div>

                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h4>
                                    <a class="media-title" href="single-hotel-right-sidebar.html">Concorde hotel</a>
                                </h4>
                                <div class="rating-view">
                                    <span class="star add-rating-default pl-0"></span>
                                    <span class="content-view text-uppercase border-right-0 pl-1">(Reviews 27)</span>
                                </div>

                                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="date-view">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2019</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-4">
                                <div class="bg-primary text-center p-3 view-details">
                                    <h2 class="text-white font-weight-bold h1">$18</h2>
                                    <p class="text-white text-capitalize">Per Night</p>
                                    <div>
                                        <a href="single-hotel-fullwidth.html"
                                           class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Details</a>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media media-list-view media-border flex-column flex-md-row align-items-stretch mb-5">
                    <div class="media-img position-relative">
                        <img class="img-fluid position-relative" src="../assets/img/holets/hotel-list-05.jpg" alt="gallery-img">
                        <a class="media-img-overlay" data-fancybox="gallery" href="../assets/img/holets/hotel-list-05.jpg"></a>
                    </div>

                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h4>
                                    <a class="media-title" href="single-hotel-right-sidebar.html">Victoria hotel</a>
                                </h4>
                                <div class="rating-view">
                                    <span class="star add-rating-default pl-0"></span>
                                    <span class="content-view text-uppercase border-right-0 pl-1">(Reviews 38)</span>
                                </div>

                                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="date-view">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2019</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-4">
                                <div class="bg-primary text-center p-3 view-details">
                                    <h2 class="text-white font-weight-bold h1">$22</h2>
                                    <p class="text-white text-capitalize">Per Night</p>
                                    <div>
                                        <a href="single-hotel-fullwidth.html"
                                           class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Details</a>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media media-list-view media-border flex-column flex-md-row align-items-stretch mb-5">
                    <div class="media-img position-relative">
                        <img class="img-fluid position-relative" src="../assets/img/holets/hotel-list-06.jpg" alt="gallery-img">
                        <a class="media-img-overlay" data-fancybox="gallery" href="../assets/img/holets/hotel-list-06.jpg"></a>
                    </div>

                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h4>
                                    <a class="media-title" href="single-hotel-right-sidebar.html">Bloomsbury hotel</a>
                                </h4>
                                <div class="rating-view">
                                    <span class="star add-rating-default pl-0"></span>
                                    <span class="content-view text-uppercase border-right-0 pl-1">(Reviews 26)</span>
                                </div>

                                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="date-view">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2019</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-4">
                                <div class="bg-primary text-center p-3 view-details">
                                    <h2 class="text-white font-weight-bold h1">$29</h2>
                                    <p class="text-white text-capitalize">Per Night</p>
                                    <div>
                                        <a href="single-hotel-fullwidth.html"
                                           class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Details</a>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media media-list-view media-border flex-column flex-md-row align-items-stretch mb-5">
                    <div class="media-img position-relative">
                        <img class="img-fluid position-relative" src="../assets/img/holets/hotel-list-07.jpg" alt="gallery-img">
                        <a class="media-img-overlay" data-fancybox="gallery" href="../assets/img/holets/hotel-list-07.jpg"></a>
                    </div>

                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h4>
                                    <a class="media-title" href="single-hotel-right-sidebar.html">Browns hotel</a>
                                </h4>
                                <div class="rating-view">
                                    <span class="star add-rating-default pl-0"></span>
                                    <span class="content-view text-uppercase border-right-0 pl-1">(Reviews 18)</span>
                                </div>

                                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="date-view">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2019</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-4">
                                <div class="bg-primary text-center p-3 view-details">
                                    <h2 class="text-white font-weight-bold h1">$37</h2>
                                    <p class="text-white text-capitalize">Per Night</p>
                                    <div>
                                        <a href="single-hotel-fullwidth.html"
                                           class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Details</a>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media media-list-view media-border flex-column flex-md-row align-items-stretch mb-5">
                    <div class="media-img position-relative">
                        <img class="img-fluid position-relative" src="../assets/img/holets/hotel-list-08.jpg" alt="gallery-img">
                        <a class="media-img-overlay" data-fancybox="gallery" href="../assets/img/holets/hotel-list-08.jpg"></a>
                    </div>

                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h4>
                                    <a class="media-title" href="single-hotel-right-sidebar.html">Covent hotel</a>
                                </h4>
                                <div class="rating-view">
                                    <span class="star add-rating-default pl-0"></span>
                                    <span class="content-view text-uppercase border-right-0 pl-1">(Reviews 50)</span>
                                </div>

                                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="date-view">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2019</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-4">
                                <div class="bg-primary text-center p-3 view-details">
                                    <h2 class="text-white font-weight-bold h1">$23</h2>
                                    <p class="text-white text-capitalize">Per Night</p>
                                    <div>
                                        <a href="single-hotel-fullwidth.html"
                                           class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Details</a>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media media-list-view media-border flex-column flex-md-row align-items-stretch mb-5">
                    <div class="media-img position-relative">
                        <img class="img-fluid position-relative" src="../assets/img/holets/hotel-list-09.jpg" alt="gallery-img">
                        <a class="media-img-overlay" data-fancybox="gallery" href="../assets/img/holets/hotel-list-09.jpg"></a>
                    </div>

                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h4>
                                    <a class="media-title" href="single-hotel-right-sidebar.html">Covent hotel</a>
                                </h4>
                                <div class="rating-view">
                                    <span class="star add-rating-default pl-0"></span>
                                    <span class="content-view text-uppercase border-right-0 pl-1">(Reviews 75)</span>
                                </div>

                                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="date-view">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2019</span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span>
                                </div>
                            </div>

                            <div class="col-md-5 col-xl-4">
                                <div class="bg-primary text-center p-3 view-details">
                                    <h2 class="text-white font-weight-bold h1">$31</h2>
                                    <p class="text-white text-capitalize">Per Night</p>
                                    <div>
                                        <a href="single-hotel-fullwidth.html"
                                           class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Details</a>
                                    </div>
                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-block btn-outline-white btn-booking text-uppercase mb-2">Book</a>
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

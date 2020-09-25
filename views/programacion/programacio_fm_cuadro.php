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
                            <h2 class="text-uppercase text-white font-weight-bold">PROGRAMACIÓN FM</h2>
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
            <div class="col-lg-4 col-xl-3">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="mb-6 bg-white px-3 py-6 border-top border-top-5 border-primary rounded">
                            <h4 class="text-uppercase font-weight-bold">Search</h4>

                            <form class="" action="index.html" method="post">
                                <div class="mb-5">
                                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0 pl-0" required="" aria-describedby="textHelp" placeholder="Hotel Name">
                                </div>

                                <div class="form-group form-group-icon form-group-icon-dark mb-5">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <input type="text" class="form-control daterange-picker sidebar-daterange-picker text-uppercase" name="dateRange" value=""
                                           placeholder="Check in" />
                                </div>

                                <div class="form-group form-group-icon form-group-icon-dark mb-5">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <input type="text" class="form-control daterange-picker sidebar-daterange-picker text-uppercase" name="dateRange" value=""
                                           placeholder="Check out" />
                                </div>

                                <div class="form-group mb-5">
                                    <div class="row align-items-center">
                                        <label class="control-label count-control-label col-5 col-xl-4 text-uppercase mb-0">Rooms</label>

                                        <div class="col-7">
                                            <div class="count-input ml-auto m-0">
                                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                                <input class="quantity" type="number" value="1">
                                                <a class="incr-btn" data-action="increase" href="#">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="row align-items-center">
                                        <label class="control-label count-control-label col-5 col-xl-4 text-gray-color text-uppercase mb-0">Adults</label>

                                        <div class="col-7">
                                            <div class="count-input ml-auto m-0">
                                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                                <input class="quantity" type="number" value="1">
                                                <a class="incr-btn" data-action="increase" href="#">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-5">
                                    <div class="row align-items-center">
                                        <label class="control-label count-control-label col-5 col-xl-4 text-gray-color text-uppercase mb-0">Childs</label>

                                        <div class="col-7">
                                            <div class="count-input ml-auto m-0">
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
                                        <h5 class="icon-bg collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
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
                                        <h5 class="icon-bg collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
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

            <div class="col-lg-8 col-xl-9">
                <div class="mb-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="form-group mb-5 mb-md-0 bg-white">
                                <div class="select-default select-category-2">

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-8 d-none d-md-block">
                            <div class="d-flex justify-content-md-end">
                                <a href="index.php" class="icon-md bg-white rounded shadow">
                                    <i class="fa fa-bars text-gray-color" aria-hidden="true"></i>
                                </a>

                                <a href="" class="icon-md bg-primary rounded shadow ml-3">
                                    <i class="fa fa-th text-white" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-4 mb-5">
                        <div class="card card-hover">
                            <a href="single-hotel-right-sidebar.html" class="position-relative">
                                <img class="card-img-top" src="../assets/img/holets/hotel-list-01.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-1">
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
                                    <h6 class="text-white font-weight-bold">5 Review</h6>
                                </div>
                            </a>

                            <div class="card-body">
                                <h5>
                                    <a href="single-hotel-right-sidebar.html" class="card-title text-uppercase">Park Hotel</a>
                                </h5>

                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Per night</p>
                                        <h3 class="text-primary">$25</h3>
                                    </div>

                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-5">
                        <div class="card card-hover">
                            <a href="single-hotel-right-sidebar.html" class="position-relative">
                                <img class="card-img-top" src="../assets/img/holets/hotel-list-02.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-1">
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
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <h6 class="text-white font-weight-bold">4 Review</h6>
                                </div>
                            </a>

                            <div class="card-body">
                                <h5>
                                    <a href="single-hotel-right-sidebar.html" class="card-title text-uppercase">Mariot Hotel</a>
                                </h5>

                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Per night</p>
                                        <h3 class="text-primary">$28</h3>
                                    </div>

                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-5">
                        <div class="card card-hover">
                            <a href="single-hotel-right-sidebar.html" class="position-relative">
                                <img class="card-img-top" src="../assets/img/holets/hotel-list-03.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-1">
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
                                            <i class="fa fa-star-o mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <h6 class="text-white font-weight-bold">3 Review</h6>
                                </div>
                            </a>

                            <div class="card-body">
                                <h5>
                                    <a href="single-hotel-right-sidebar.html" class="card-title text-uppercase">Lumire Hotel</a>
                                </h5>

                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Per night</p>
                                        <h3 class="text-primary">$32</h3>
                                    </div>

                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-5">
                        <div class="card card-hover">
                            <a href="single-hotel-right-sidebar.html" class="position-relative">
                                <img class="card-img-top" src="../assets/img/holets/hotel-list-04.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-1">
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
                                            <i class="fa fa-star-o mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <h6 class="text-white font-weight-bold">3 Review</h6>
                                </div>
                            </a>

                            <div class="card-body">
                                <h5>
                                    <a href="single-hotel-right-sidebar.html" class="card-title text-uppercase">Lumire Hotel</a>
                                </h5>

                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Per night</p>
                                        <h3 class="text-primary">$26</h3>
                                    </div>

                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-5">
                        <div class="card card-hover">
                            <a href="single-hotel-right-sidebar.html" class="position-relative">
                                <img class="card-img-top" src="../assets/img/holets/hotel-list-05.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-1">
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
                                    <h6 class="text-white font-weight-bold">5 Review</h6>
                                </div>
                            </a>

                            <div class="card-body">
                                <h5>
                                    <a href="single-hotel-right-sidebar.html" class="card-title text-uppercase">Concord Hotel</a>
                                </h5>

                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Per night</p>
                                        <h3 class="text-primary">$22</h3>
                                    </div>

                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-5">
                        <div class="card card-hover">
                            <a href="single-hotel-right-sidebar.html" class="position-relative">
                                <img class="card-img-top" src="../assets/img/holets/hotel-list-06.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-1">
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
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <h6 class="text-white font-weight-bold">4 Review</h6>
                                </div>
                            </a>

                            <div class="card-body">
                                <h5>
                                    <a href="single-hotel-right-sidebar.html" class="card-title text-uppercase">Victoria Hotel</a>
                                </h5>

                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Per night</p>
                                        <h3 class="text-primary">$28</h3>
                                    </div>

                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-5">
                        <div class="card card-hover">
                            <a href="single-hotel-right-sidebar.html" class="position-relative">
                                <img class="card-img-top" src="../assets/img/holets/hotel-list-07.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-1">
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
                                            <i class="fa fa-star-o mr-1" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <h6 class="text-white font-weight-bold">3 Review</h6>
                                </div>
                            </a>

                            <div class="card-body">
                                <h5>
                                    <a href="single-hotel-right-sidebar.html" class="card-title text-uppercase">Suspendisse Hotel</a>
                                </h5>

                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Per night</p>
                                        <h3 class="text-primary">$26</h3>
                                    </div>

                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-5">
                        <div class="card card-hover">
                            <a href="single-hotel-right-sidebar.html" class="position-relative">
                                <img class="card-img-top" src="../assets/img/holets/hotel-list-08.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-1">
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
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                    <h6 class="text-white font-weight-bold">4 Review</h6>
                                </div>
                            </a>

                            <div class="card-body">
                                <h5>
                                    <a href="single-hotel-right-sidebar.html" class="card-title text-uppercase">Bloomsbury Hotel</a>
                                </h5>

                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Per night</p>
                                        <h3 class="text-primary">$35</h3>
                                    </div>

                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-5">
                        <div class="card card-hover">
                            <a href="single-hotel-right-sidebar.html" class="position-relative">
                                <img class="card-img-top" src="../assets/img/holets/hotel-list-09.jpg" alt="Card image cap">
                                <div class="card-img-overlay card-hover-overlay rounded-top d-flex flex-column">
                                    <ul class="list-unstyled d-flex mt-auto text-warning mb-1">
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
                                    <h6 class="text-white font-weight-bold">5 Review</h6>
                                </div>
                            </a>

                            <div class="card-body">
                                <h5>
                                    <a href="single-hotel-right-sidebar.html" class="card-title text-uppercase">Rookery Hotel</a>
                                </h5>

                                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna
                                    aliqua.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-0 text-capitalize">Per night</p>
                                        <h3 class="text-primary">$40</h3>
                                    </div>

                                    <div>
                                        <a href="booking-step-1.html" class="btn btn-xs btn-outline-secondary text-uppercase">Book Now</a>
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

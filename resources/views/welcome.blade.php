<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Dashbord</title>
    <!--
        SOFTY PINKO
        https://templatemo.com/tm-535-softy-pinko
        -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-softy-pinko.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap');

    *,
    body,
    h1,
    p,
    h2 {
        font-family: 'Cairo', sans-serif;

    }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <!-- ssssssssssssssssss -->



    @include('header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12 ">

                        <p>{{ trans('messages.welcome') }}</p>
                        @if(\Illuminate\Support\Facades\Auth::user())
                        @if(\Illuminate\Support\Facades\Auth::user()->role==1)
                        <a href="/transfers/create" class="main-button-slider ">تحويل المبلغ</a>
                        @endif

                        @endif
                    </div>



                </div>
            </div>
        </div>


        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature mt-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title"> {{ trans('messages.speed') }}</h5>
                                <p>
                                    {{ trans('messages.instant_transfers_to_destination') }}
                                </p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title"> {{ trans('messages.coverage') }}</h5>
                                <p>💸
                                    {{ trans('messages.send_money_anywhere') }}
                                </p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                <h5 class="features-title"> {{ trans('messages.security') }}</h5>
                                <p>
                                    {{ trans('messages.advanced_security_system') }}
                                </p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">{{ trans('messages.money_transfer') }}</h2>

                    </div>
                    <div class="left-text">
                        <p>{{ trans('messages.importance_of_money_transfer') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">{{ trans('messages.importance_of_money_transfer') }} </h2>
                    </div>
                    <div class="left-text">
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Dashboard Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>{{ trans('messages.services') }} </h1>
                            <p></p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong> {{ trans('messages.internal_transfers') }}
                            </strong>
                            <span>{{ trans('messages.effective_services')}}

                            </span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong> {{ trans('messages.external_transfers') }} </strong>
                            <span>{{ trans('messages.global_coverage') }} </span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong> {{ trans('messages.online_transfers') }}</strong>
                            <span>
                                {{ trans('messages.secure_platform') }}
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong> {{ trans('messages.instant_transfers') }}
                            </strong>
                            <span>{{ trans('messages.fast_access') }}

                            </span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong>{{ trans('messages.tracking_transfers') }}
                            </strong>
                            <span>{{ trans('messages.real_time_updates') }}
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="assets/images/work-process-item-01.png" alt=""></i>
                            <strong> {{ trans('messages.dedicated_customer_service') }}</strong>
                            <span>
                                {{ trans('messages.customer_support_team') }}
                            </span>
                        </a>
                    </div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Dashboard Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->

    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->

    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>10</strong>
                            <span> الخدمات</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>63</strong>
                            <span>عد المكاتب الخارجية </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>18</strong>
                            <span>المكاتب الداخلية</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>1000</strong>
                            <span>الحوالات المرسلة </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->

    <!-- ***** Blog Start ***** -->


    <!-- ***** Contact Us Start ***** -->

    <!-- ***** Contact Us End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">الهرم &copy; 2024 </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>


</html>
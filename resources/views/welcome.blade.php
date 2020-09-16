@extends('layouts.app')

@section('title','Connect_Books')
@section('description', 'description')
@section('pageCss')
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/css/slicknav.css">
<link rel="stylesheet" href="/assets/css/flaticon.css">
<link rel="stylesheet" href="/assets/css/progressbar_barfiller.css">
<link rel="stylesheet" href="/assets/css/gijgo.css">
<link rel="stylesheet" href="/assets/css/animate.min.css">
<link rel="stylesheet" href="/assets/css/animated-headline.css">
<link rel="stylesheet" href="/assets/css/magnific-popup.css">
<link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="/assets/css/themify-icons.css">
<link rel="stylesheet" href="/assets/css/slick.css">
<link rel="stylesheet" href="/assets/css/nice-select.css">
<link rel="stylesheet" href="/assets/css/style.css">
@endsection

@include('layouts.header')

@section('container')
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2>new<br>arrival</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="popular-img">
                        <img src="/assets/img/gallery/arrival1.png" alt="">
                        <div class="favorit-items">
                            <!-- <span class="flaticon-heart"></span> -->
                            <img src="/assets/img/gallery/favorit-card.png" alt="">
                        </div>
                    </div>
                    <div class="popular-caption">
                        <h3><a href="product_details.html">Knitted Jumper</a></h3>
                        <div class="rating mb-10">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>$ 30.00</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="popular-img">
                        <img src="/assets/img/gallery/arrival2.png" alt="">
                        <div class="favorit-items">
                            <!-- <span class="flaticon-heart"></span> -->
                            <img src="/assets/img/gallery/favorit-card.png" alt="">
                        </div>
                    </div>
                    <div class="popular-caption">
                     <h3><a href="product_details.html">Knitted Jumper</a></h3>
                     <div class="rating mb-10">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>$ 30.00</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="popular-img">
                    <img src="/assets/img/gallery/arrival3.png" alt="">
                    <div class="favorit-items">
                        <!-- <span class="flaticon-heart"></span> -->
                        <img src="/assets/img/gallery/favorit-card.png" alt="">
                    </div>
                </div>
                <div class="popular-caption">
                 <h3><a href="product_details.html">Knitted Jumper</a></h3>
                 <div class="rating mb-10">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>$ 30.00</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="popular-img">
                <img src="/assets/img/gallery/arrival4.png" alt="">
                <div class="favorit-items">
                    <!-- <span class="flaticon-heart"></span> -->
                    <img src="/assets/img/gallery/favorit-card.png" alt="">
                </div>
            </div>
            <div class="popular-caption">
             <h3><a href="product_details.html">Knitted Jumper</a></h3>
             <div class="rating mb-10">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <span>$ 30.00</span>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
        <div class="popular-img">
            <img src="/assets/img/gallery/arrival5.png" alt="">
            <div class="favorit-items">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="/assets/img/gallery/favorit-card.png" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="product_details.html">Knitted Jumper</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>$ 30.00</span>
    </div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
        <div class="popular-img">
            <img src="/assets/img/gallery/arrival6.png" alt="">
            <div class="favorit-items">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="/assets/img/gallery/favorit-card.png" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="product_details.html">Knitted Jumper</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>$ 30.00</span>
    </div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
        <div class="popular-img">
            <img src="/assets/img/gallery/arrival7.png" alt="">
            <div class="favorit-items">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="/assets/img/gallery/favorit-card.png" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="product_details.html">Knitted Jumper</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>$ 30.00</span>
    </div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
        <div class="popular-img">
            <img src="/assets/img/gallery/arrival8.png" alt="">
            <div class="favorit-items">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="/assets/img/gallery/favorit-card.png" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="product_details.html">Knitted Jumper</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>$ 30.00</span>
    </div>
</div>
</div>
</div>
</div>
@endsection

@include('layouts.footer')

<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/jquery.slicknav.min.js"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/animated.headline.js"></script>
<script src="/assets/js/jquery.magnific-popup.js"></script>
<script src="/assets/js/gijgo.min.js"></script>

<!-- Nice-select, sticky,Progress -->
<script src="/assets/js/jquery.nice-select.min.js"></script>
<script src="/assets/js/jquery.sticky.js"></script>
<script src="/assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/jquery.countdown.min.js"></script>
<script src="/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="/assets/js/contact.js"></script>
<script src="/assets/js/jquery.form.js"></script>
<script src="/assets/js/jquery.validate.min.js"></script>
<script src="/assets/js/mail-script.js"></script>
<script src="/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/main.js"></script>
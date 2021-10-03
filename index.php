<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <meta name="google-site-verification" content="WCntsjhDIt0Q4Lw-Vw6yDRKIybzy4zZuUEJgcZlve5k">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Codename Rise and Shine</title>
</head>
<style>
    #imgMobile {
        display: none;
    }

    #carouselExampleDark {
        position: relative;
    }

    #carouselDesk {
        display: block;
    }

    #bookingBlock {
        position: absolute;
        bottom: 0;
        right: 0;
    }

    #mobileForm {
        display: none;
    }

    .map {
        width: auto;
        height: 400px;
    }

    .blur {
        filter: blur(2px);
        -webkit-filter: blur(2px);
    }

    .txtColor {
        color: #B38E4A;
    }

    .themeColor {
        background-color: #B38E4A;
        color: #ffffff;
    }

    .callback {
        background-color: #B38E4A;
    }

    .visit {
        border: 2px solid #B38E4A;
    }

    .fix {
        position: fixed;
        right: 0;
    }

    .site-footer {
        background-color: #26272b;
        padding: 45px 0 20px;
        font-size: 15px;
        line-height: 24px;
        color: #737373;
    }

    .site-footer hr {
        border-top-color: #bbb;
        opacity: 0.5
    }

    .site-footer hr.small {
        margin: 20px 0
    }

    .site-footer h6 {
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        margin-top: 5px;
        letter-spacing: 2px
    }

    .site-footer a {
        color: #737373;
    }

    .site-footer a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links {
        padding-left: 0;
        list-style: none
    }

    .footer-links li {
        display: block
    }

    .footer-links a {
        color: #737373
    }

    .footer-links a:active,
    .footer-links a:focus,
    .footer-links a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links.inline li {
        display: inline-block
    }

    .site-footer .social-icons {
        text-align: right
    }

    .site-footer .social-icons a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin-left: 6px;
        margin-right: 0;
        border-radius: 100%;
        background-color: #33353d
    }

    .copyright-text {
        margin: 0
    }

    .text-weight-bold {
        font-weight: bold;
    }

    @media (max-width:991px) {
        .site-footer [class^=col-] {
            margin-bottom: 30px
        }
    }

    @media (max-width:767px) {
        .site-footer {
            padding-bottom: 0
        }

        .site-footer .copyright-text,
        .site-footer .social-icons {
            text-align: center
        }
    }

    .social-icons {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .social-icons li {
        display: inline-block;
        margin-bottom: 4px
    }

    .social-icons li.title {
        margin-right: 15px;
        text-transform: uppercase;
        color: #96a2b2;
        font-weight: 700;
        font-size: 13px
    }

    .social-icons a {
        background-color: #eceeef;
        color: #818a91;
        font-size: 16px;
        display: inline-block;
        line-height: 44px;
        width: 44px;
        height: 44px;
        text-align: center;
        margin-right: 8px;
        border-radius: 100%;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear
    }

    .social-icons a:active,
    .social-icons a:focus,
    .social-icons a:hover {
        color: #fff;
        background-color: #29aafe
    }

    .social-icons.size-sm a {
        line-height: 34px;
        height: 34px;
        width: 34px;
        font-size: 14px
    }

    .social-icons a.facebook:hover {
        background-color: #3b5998
    }

    .social-icons a.twitter:hover {
        background-color: #00aced
    }

    .social-icons a.linkedin:hover {
        background-color: #007bb6
    }

    .social-icons a.dribbble:hover {
        background-color: #ea4c89
    }

    #bookingWhatsapp {
        position: absolute !important;
        top: -13px;
        right: 30%;
        color: green;
        font-size: 45px;
    }

    #bookingCall {
        position: absolute !important;
        top: -14px;
        left: 30%;
        font-size: 45px;
    }

    .tour {
        width: 100%;
    }

    #mobileBootom {
        display: none;
    }



    @media (max-width:767px) {
        .social-icons li.title {
            display: block;
            margin-right: 0;
            font-weight: 600
        }

        .locationExpress {
            display: none;
        }

        .tour {
            width: 100%;
        }

        #sideForm {
            display: none;
        }

        #mobileForm {
            display: block;
        }



        #bookingBlock {
            /* position: absolute !important;
            bottom: -50px;
            width: 180px;
            right: 0; */
            display: none;
        }

        #bookingCall {
            position: absolute !important;
            top: -15px;
            right: 4%;
            font-size: 30px;
        }

        #bookingWhatsapp {
            position: absolute !important;
            bottom: -15px;
            left: 4%;
            color: green;
            font-size: 30px;
        }

        .fix {
            position: relative;
        }

        .mtop {
            margin-top: 20px;
        }

        .smalli {
            font-size: 10px;
        }

        .navbar-brand {
            /* position: absolute; */
            width: 100%;
        }

        #requestTopSec {
            display: none;
        }

        #mobileBootom {
            display: block;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }

        .w-25 {
            width: 50% !important;
        }

        #imgMobile {
            display: block;
        }

        #carouselDesk {
            display: none;
        }

    }
</style>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-627427595"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-627427595');
</script>
<script>
    function gtag_report_conversion(url) {
        var callback = function() {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-627427595/07PYCKXE-PgCEIuSl6sC',
            'event_callback': callback
        });
        return false;
    }
</script>

<body>
    <div class="px-2">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                            <div class="container-fluid">
                                <a class="navbar-brand w-25" href="#"><img class="img-fluid" src="img/logo.jpg" alt=""></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#Pricing"><b>Pricing</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Amenities"><b>Amenities</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Specifications"><b>Specifications</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Floor"><b>Floor Plans</b></a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#Gallery"><b>Gallery</b></a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#Location"><b>Location</b></a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#Virtual"><b>Virtual Site Tour</b></a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-3 bg-dark fix" id="requestTopSec">
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <div class="col-md-8 mt-1 text-center">
                            <a href="https://wa.me/+918669546954/?text=Hi i would like to have more information about Kunal Group's Codename Rise and Shine Balewadi" target="_blank" class="callback px-2 py-1 text-white text-decoration-none"> Request Call Back </a>
                        </div>
                        <div class="col-md-8 mt-3 text-center">
                            <a class="visit px-2 py-1 text-white text-decoration-none" href="javascript:void(0);" onclick="popup(); gtag_report_conversion();">Schedule Site Visit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="mobileForm">
                <div class="col-md-12" data-aos="zoom-in">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="img/am3.jpg" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="img/am2.jpg" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/am1.jpg" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="card shadow pb-2">
                        <div class="themeColor">Pre-Launch Open</div>
                        <div class="txtColor h3">Codename Rise and Shine</div>
                        <div>At Near Balewai High Street, Balewadi, Pune</div>
                        <div>By Kunal Group</div>
                        <div class="" style="background-color: #dac090;">
                            <div class="text-weight-bold animate__animated animate__heartBeat animate__slower animate__infinite">Land Parcel: 7 Acres with 60% open space</div>
                            <div class="text-weight-bold animate__animated animate__heartBeat animate__slower animate__infinite">Towers: 8 </div>
                            <div class="text-weight-bold animate__animated animate__heartBeat animate__slower animate__infinite">Floors: 30</div>
                        </div>
                        <div>
                            <div>Offers 2 & 3 BHK Homes Starts</div>
                            <div class="h1"><b>82 Lacs*</b> Onwards</div>
                            <div> <a class="btn themeColor animate__animated animate__heartBeat animate__slower animate__infinite" href="javascript:void(0);" onclick="popup();">Enquire Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 my-3">
                    <form class="row g-3 mx-3" id="mobSide">
                        <div class="col-md-12  mt-2">
                            <input type="text" class="form-control animate__animated animate__bounce" id="nameMob" placeholder="Full Name">
                            <small id="nameMobTxt" class="form-text text-danger"></small>
                        </div>
                        <div class="col-md-12 mt-2">
                            <input type="text" class="form-control animate__animated animate__bounce" id="emailMob" placeholder="Email">
                            <small id="emailMobTxt" class="form-text text-danger"></small>
                        </div>
                        <div class="col-md-12 mt-2">
                            <input type="text" class="form-control animate__animated animate__bounce" id="phoneMob" placeholder="Phone">
                            <small id="phoneMobTxt" class="form-text text-danger "></small>
                        </div>
                        <div class="col-md-12 mt-3 text-center">
                            <a href="javascript:void(0);" onclick="formSubmit(2); gtag_report_conversion();" class="btn px-3 py-1 themeColor animate__animated animate__bounce animate__slower animate__infinite">Avail Pre-book Offer</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row bg-light">
            <div class="col-md-9">
                <div class="col-md-12 mt-5" data-aos="zoom-in">
                    <div class="row justify-content-center">
                        <div class="col-md-12 py-3 card shadow text-center">
                            <img class="img-fluid" src="img/img33.jpg" alt="" id="imgMobile">
                            <div id="carouselDesk" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="img/am3.jpg" class="d-block w-100">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="img/am2.jpg" class="d-block w-100">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/am1.jpg" class="d-block w-100">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="txtColor"> <b>Codename <br> Rise and Shine</b></h1>

                            <h3>
                                <ul class="list-group h3">
                                    A Visionary Landmark Unveils at an Iconic Location
                                </ul>
                            </h3>
                            <h5>
                                <p class="h6">This is where all the action is This is where you can feel the buzz of modern Puna Join in the hustle & bustle and make the most of what the city has to offer. Be in the midst of all the action. This lifestyle is right up your street!</p>
                            </h5>
                            <a href="https://wa.me/+918669546954/?text=Hi i would like to have more information about Kunal Group's Codename Rise and Shine Balewadi" onclick=" gtag_report_conversion();" class="btn themeColor mt-3">Get in Touch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5" data-aos="zoom-in" id="Pricing">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Pricing</b></p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 mtop text-center">
                            <div class="card shadow">
                                <div class="card-body">
                                    <p>2 BHK</p>
                                    <p><img class="img-fluid blur" src="img/2bhk.jpg" alt=""></p>
                                    <p>Price: 82L* Onwards</p>
                                    <p>Built-up Area: 830.66 Sq.ft</p>

                                    <p><a href="javascript:void(0);" onclick="popup(); gtag_report_conversion();" class="btn themeColor">Price Breakup</a> <a href="mailto:sales@rigveduptown-balewadi.com" onclick=" gtag_report_conversion();"><i class=" fas fa-envelope"></i></a> <a href="tel:+918669546954" onclick=" gtag_report_conversion();"><i class="fas fa-phone-alt"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mtop text-center">
                            <div class="card shadow">
                                <div class="card-body">
                                    <p>3 BHK</p>
                                    <p><img class="img-fluid blur" src="img/3bhk.jpg" alt=""></p>
                                    <p>Price: 1.24 cr* Onwards</p>
                                    <p>Built-up Area: 1108.05 Sq.ft</p>

                                    <p><a href="javascript:void(0);" onclick="popup(); gtag_report_conversion();" class="btn themeColor">Price Breakup</a> <a href="mailto:sales@rigveduptown-balewadi.com" onclick=" gtag_report_conversion();"><i class=" fas fa-envelope"></i></a> <a href="tel:+918669546954" onclick=" gtag_report_conversion();"><i class="fas fa-phone-alt"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mtop text-center">
                            <div class="card shadow">
                                <div class="card-body">
                                    <p>&#149; Complete Costing Details &#149;</p>
                                    <p><img class="img-fluid" src="img/costing-detail.webp" alt=""></p>
                                    <p><a class="text-decoration-none" href="tel:+918669546954">Call at +91 8669546954</a></p>
                                    <p>Or</p>
                                    <p><a href="javascript:void(0);" class="btn themeColor" onclick="popup(); gtag_report_conversion();">Enquire Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3" data-aos="zoom-in" id="Amenities">
                    <div class="col-md-12 text-center">
                        <p class="h1 txtColor"><b>Amenities</b></p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row mt-4">
                                <div class="col-md-4 mtop">
                                    <div class="card py-3 text-center shadow">
                                        <div>
                                            <i class="fas fa-shield-alt h1"></i>
                                        </div>
                                        <div>
                                            24 HOURS SECURITY
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mtop">
                                    <div class="card py-3 text-center shadow">
                                        <div>
                                            <i class="fas fa-dumbbell h1"></i>
                                        </div>
                                        <div>
                                            GYMNASIUM
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mtop">
                                    <div class="card py-3 text-center shadow">
                                        <div>
                                            <i class="fas fa-mobile h1"></i></td>
                                        </div>
                                        <div>
                                            VIDEOPHONE
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 mtop">
                                    <div class="card py-3 text-center shadow">
                                        <div>
                                            <i class="fas fa-fire-extinguisher h1"></i>
                                        </div>
                                        <div>
                                            FIRE FIGHTING
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mtop">
                                    <div class="card py-3 text-center shadow">
                                        <div>
                                            <i class="fas fa-cloud-sun h1"></i>
                                        </div>
                                        <div>
                                            LANDSCAPE GARDEN
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mtop">
                                    <div class="card py-3 text-center shadow">
                                        <div>
                                            <i class="fas fa-swimming-pool h1"></i>
                                        </div>
                                        <div>
                                            SWIMMING POOL
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 mtop">
                                    <div class="card py-3 text-center shadow">
                                        <div>
                                            <i class="fas fa-dice h1"></i>
                                        </div>
                                        <div>
                                            INDOOR GAMES
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mtop">
                                    <div class="card py-3 text-center shadow">
                                        <div>
                                            <i class="fas fa-kaaba h1"></i>
                                        </div>
                                        <div>
                                            CLUB HOUSE
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mtop">
                                    <div class="card py-3 text-center shadow">
                                        <div>
                                            <i class="fas fa-child h1"></i>
                                        </div>
                                        <div>
                                            KIDS PLAY AREA
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5 card shadow-lg" style="border:2px solid #33473b" data-aos="zoom-in" id="Specifications">
                    <div class="col-md-12 mt-2 mb-n2 text-center">
                        <p class="h2 txtColor"><b>Specifications</b></p>
                    </div>
                    <div class="row px-4 py-3">
                        <div class="col-md-12">
                            <ul>
                                <li>Best in class floor to ceiling height
                                    Top end home automation</li>
                                <li>Vitrified tiles from the best in India</li>
                                <li>Common dth & broadband connection automated lock with multiple entry options from yale</li>
                                <li>Piped gas connection</li>
                                <li>High-end sliding doors and windows</li>
                                <li>Laminated glass railings</li>
                                <li>Fctory pressed laminated doors</li>
                                <li>International bathroom -ixtures from the best-toto, jaquar & grohe</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 py-3">
                    <div class="col-md-6 " data-aos="zoom-in" id="Floor">
                        <div class="col-md-12 text-center">
                            <p class="h1 txtColor"><b>Floor plan</b></p>
                        </div>
                        <div class="row mt-2 justify-content-center">
                            <!-- <div class="col-md-6 text-center">
                                <img class="img-fluid" src="img/site.jpg" alt="">
                                <p class="h4">Site Plan</p>
                            </div> -->
                            <div class="col-md-12 text-center">
                                <img class="img-fluid shadow blur" src="img/floor.jpg" alt="">
                                <!-- <p class="h4">Floor Plan</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in" id="Location">
                        <div class="row px-2">
                            <div class="col-md-12 text-center">
                                <p class="h1 txtColor"><b>Location</b></p>
                            </div>
                            <div class="col-md-12 " data-aos="zoom-in">
                                <img class="img-fluid shadow" src="img/location.jpg" alt="">
                                <!-- <div class="col-md-5" id="locationExpress" style="position: absolute;bottom: 80px;right: 100px;">
                                    <div class="card text-white">
                                        <div class="card-header bg-dark">
                                            Dual Access Road : 30 mtr. and 24 mtr.
                                        </div>
                                        <div class="card-body" style="background-color: #B38E4A;font-size:25px;">
                                            A Location so well Connected everything is just around the corner
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12 card py-3 px-3 d-flex justify-content-center" data-aos="zoom-in">
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.7996510679704!2d73.77006531489369!3d18.583069087372603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9df0d37974b%3A0x4cd33d9752ff9b80!2sRigved%20Uptown!5e0!3m2!1sen!2sin!4v1632035701717!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> -->
                </div>

                <footer class="">
                    <div class="container">
                        <div class="text-secondary text-center">
                            <p style="font-size: 10px;">This website is meant only for information purposes. It should not be considered/ claimed as an official site.
                                This website belongs to authorized channel partner.</p>
                            <hr>
                        </div>
                    </div>
                </footer>
            </div>
            <div class="col-md-3  fix" id="sideForm">
                <div class="row bg-white">
                    <div class="col-md-12">
                        <p class="text-dark h5 mt-3">Pre-Booking here for Best Offers</p>
                    </div>
                    <div class="col-md-12 mt-3">
                        <form class="row g-3" id="formSide">
                            <div class="col-md-12 mt-3">
                                <input type="text" class="form-control" name="name" id="nameSide" placeholder="Full Name">
                                <small id="nameSideTxt" class="form-text text-danger"></small>
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="text" class="form-control" name="email" id="emailSide" placeholder="Email">
                                <small id="emailSideTxt" class="form-text text-danger"></small>
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="text" class="form-control" name="phone" id="phoneSide" placeholder="Phone">
                                <small id="phoneSideTxt" class="form-text text-danger"></small>
                            </div>
                            <div class="col-md-12 mt-4 text-center">
                                <a href="javascript:void(0);" onclick="formSubmit(1); gtag_report_conversion();" class="btn px-3 py-1 themeColor">Avail Pre-book Offer</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 px-3">
                        <img class="img-fluid" src="img/sideImg.png" alt="">
                    </div>
                    <div class="col-md-12 mt-3 text-center">
                        <p><a class="text-decoration-none" href="https://wa.me/+918669546954/?text=Hi i would like to have more information about Kunal Group's Codename Rise and Shine Balewadi" onclick=" gtag_report_conversion();"><i class="fab fa-whatsapp"></i> +91 8669546954</a></p>
                        <p><a class="text-decoration-none" href="tel:+918669546954" onclick=" gtag_report_conversion();"><i class="fas fa-phone-alt"></i>+91 8669546954</a></p>
                        <p><a class="text-decoration-none" href="mailto:sales@kunalgroupriseandshine.in" onclick=" gtag_report_conversion();"><i class="fas fa-envelope"></i> sales@kunalgroupriseandshine.in</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobileBootom">
            <div class="row px-2">
                <div class="col-4 card themeColor "><a class="text-decoration-none text-white btn-sm" onclick="gtag_report_conversion();" href="https://wa.me/+918669546954/?text=Hi i would like to have more information about Kunal Group's Codename Rise and Shine Balewadi"><i class="fab fa-whatsapp"></i><br>Whatsapp</a></div>
                <div class="col-4 card themeColor "><a class="text-decoration-none text-white btn-sm" href="tel:+918669546954" onclick="gtag_report_conversion();"><i class="fas fa-phone-alt"></i><br>Call Us</a></div>
                <div class="col-4 card themeColor "><a class="text-decoration-none text-white btn-sm" href="javascript:void(0);" onclick="popup(); gtag_report_conversion();"><i class="fas fa-envelope"></i><br>Enquire</a></div>
            </div>
        </div>
    </div>

    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script>
        $(document).ready(function() {


            setTimeout(function() {
                popup();
            }, 3000);
            setInterval(function() {
                popup();
            }, 30000);
            var myCarousel = document.querySelector('#carouselExampleDark');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 2000
            });
            var myCarousel1 = document.querySelector('#carouselExampleDark1');
            var carousel1 = new bootstrap.Carousel(myCarousel1, {
                interval: 2000
            });

        });

        function formSubmit(elem) {
            var name, email, phone;
            var data = {};
            var errors = new Array();
            if (elem == 1) {
                name = $('#nameSide').val();
                email = $('#emailSide').val();
                phone = $('#phoneSide').val();
            } else if (elem === 2) {
                name = $('#nameMob').val();
                email = $('#emailMob').val();
                phone = $('#phoneMob').val();
            } else {
                name = $('#namePopup').val();
                email = $('#emailPopup').val();
                phone = $('#phonePopup').val();
            }
            data = {
                "name": name,
                "email": email,
                "phone": phone
            };
            if (name === "") {
                errors.push("Name is empty");
                switch (elem) {
                    case 1:
                        $('#nameSideTxt').text('Please enter your Name');
                        break;
                    case 2:
                        $('#nameMobTxt').text('Please enter your Name');
                        break;

                    default:
                        $('#namePopupTxt').text('Please enter your Name');
                        break;
                }


            }
            if (email === "") {
                switch (elem) {
                    case 1:
                        $('#emailSideTxt').text('Please enter your Email');
                        break;
                    case 2:
                        $('#emailMobTxt').text('Please enter your Email');
                        break;

                    default:
                        $('#emailPopupTxt').text('Please enter your Email');
                        break;
                }
                errors.push("Email is empty");


            }
            if (phone === "") {
                switch (elem) {
                    case 1:
                        $('#phoneSideTxt').text('Please enter your Phone no.');
                        break;
                    case 2:
                        $('#phoneMobTxt').text('Please enter your Phone no.');
                        break;

                    default:
                        $('#phonePopupTxt').text('Please enter your Phone no.');
                        break;
                }
                errors.push("Phone is empty");


            }
            if (errors.length > 0) {
                // bootbox.alert({
                //     message: errors.join("<br>"),
                //     centerVertical: true,
                //     closeButton: false
                // });
                return false;
            }
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: data,
                success: function(response) {
                    bootbox.alert({
                        // message: response.message,
                        message: "Thank you! Your request has been successfully submitted. We will get back to you shortly.",
                        closeButton: false
                    });
                },
            });
        }

        function popup() {
            var html = '<form class="row g-3" id="formSide">' +
                '<div class="col-md-12 mt-3">' +
                '<input type="text" class="form-control" name="name" id="namePopup" placeholder="Full Name">' +
                '<small id="namePopupTxt" class="form-text text-danger"></small>' +
                ' </div>' +
                '<div class="col-md-12 mt-3">' +
                '<input type="text" class="form-control" name="email" id="emailPopup" placeholder="Email">' +
                '<small id="emailPopupTxt" class="form-text text-danger"></small>' +
                '</div>' +
                '<div class="col-md-12 mt-3">' +
                '<input type="text" class="form-control" name="phone" id="phonePopup" placeholder="Phone">' +
                '<small id="phonePopupTxt" class="form-text text-danger"></small>' +
                '</div>' +
                '<div class="col-md-12 mt-4 text-center">' +
                '<a href="javascript:void(0);" onclick="formSubmit(3); gtag_report_conversion();" class="btn px-3 py-1 themeColor">Avail Pre-book Offer</a>' +
                '</div>' +
                '</form>';
            var dialog = bootbox.dialog({
                message: html,
            });
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
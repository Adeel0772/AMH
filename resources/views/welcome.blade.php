<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Index </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('cascadefolder/img/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<!-- CSS here -->
	<link rel="stylesheet" href="{{asset('cascadefolder/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('cascadefolder/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('cascadefolder/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('cascadefolder/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('cascadefolder/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('cascadefolder/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('cascadefolder/css/animated-headline.css')}}">
	<link rel="stylesheet" href="{{asset('cascadefolder/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('cascadefolder/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('cascadefolder/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('cascadefolder/css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('cascadefolder/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('cascadefolder/css/style.css')}}">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('cascadefolder/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                    <img class='welcome-logo' src="https://i.ibb.co/Sm9b2tF/Ahm-removebg-preview.png" alt="">
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="http://127.0.0.1:8000/">Home</a></li>
                                        <li><a href="{{route('patient.login')}}">Book Appointment</a></li>
                                        <li><a href="{{route('doctor.login')}}">Doctor login</a></li>
                                        <li><a href="/doctor/ourdoctor">our doctors</a></li>
                                        <li><a href="{{route('paramedicstaff.view')}}">P-stafff</a></li>
                                        
                                        <li><a href="{{route('addappointment.chart')}}">Stats</a></li>
                                        <!-- <li><a href="{{route('medicine.read')}}">Medicines</a></li> -->
                                        <li><a href="#">Login as</a>
                                            <ul class="submenu">
                                                <li><a href="{{route('doctor.login')}}">doctor</a></li>
                                                <li><a href="{{route('admin.login')}}">admin login</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="{{route('contact.create')}}">Contact</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                               
                            </div>
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <span>AYAZ MEMORIAL HOSPITAL</span>
                                <h1 class="cd-headline letters scale">We care about your 
                                    <strong class="cd-words-wrapper">
                                        <b class="is-visible">health</b>
                                        <b>health</b>
                                        <b>wealth</b>
                                    </strong>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay="0.1s">WAH CANTT</p>
                                <a href="{{route('patient.login')}}" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <span>Committed to success</span>
                                <h1 class="cd-headline letters scale">We care about your 
                                    <strong class="cd-words-wrapper">
                                        <b class="is-visible">health</b>
                                        <b>health</b>
                                        <b>wealth</b>
                                    </strong>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay="0.1s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi uquip ex ea commodo consequat is aute irure.</p>
                                <a href="{{route('patient.login')}}" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? About Start-->
    <div class="about-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-35">
                            <span>OUR HOSPITAL</span>
                            <h2>Welcome To Our Hospital</h2>
                        </div>
                        <p>There arge many variations ohf pacgssages of sorem gpsum ilable, but the majority have suffered alteration in some form, by ected humour, or randomised words whi.</p>
                        <div class="about-btn1 mb-30">
                            <a href="{{route('doctor.read2')}}" class="btn about-btn">Find Doctors .<i class="ti-arrow-right"></i></a>
                        </div>
                        <div class="about-btn1 mb-30">
                            <a href="{{route('patient.login')}}" class="btn about-btn2">Appointment <i class="ti-arrow-right"></i></a>
                        </div>
                        <div class="about-btn1 mb-30">
                            <a href="about.html" class="btn about-btn2">Emargency 1 <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="{{asset('cascadefolder/img/gallery/about2.png')}}" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="{{asset('cascadefolder/img/gallery/about1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About  End-->
    <!--? department_area_start  -->
    <div class="department_area section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Departments</span>
                        <h2>Our Medical Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="depart_ment_tab mb-30">
                        <!-- Tabs Buttons -->
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="flaticon-teeth"></i>
                                    <h4>Dentistry</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class="flaticon-cardiovascular"></i>
                                    <h4>Cardiology</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="flaticon-ear"></i>
                                    <h4>ENT Specialists</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Astrology-tab" data-toggle="tab" href="#Astrology" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="flaticon-bone"></i>
                                    <h4>Astrology</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Neuroanatomy-tab" data-toggle="tab" href="#Neuroanatomy" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="flaticon-lung"></i>
                                    <h4>Neuroanatomy</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Blood-tab" data-toggle="tab" href="#Blood" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="flaticon-cell"></i>
                                    <h4>Blood Screening</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dept_main_info white-bg">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="{{asset('cascadefolder/img/gallery/department_man.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="{{asset('cascadefolder/img/gallery/department_man.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="{{asset('cascadefolder/img/gallery/department_man.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="Astrology" role="tabpanel" aria-labelledby="Astrology-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="{{asset('cascadefolder/img/gallery/department_man.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="Neuroanatomy" role="tabpanel" aria-labelledby="Neuroanatomy-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="{{asset('cascadefolder/img/gallery/department_man.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="Blood" role="tabpanel" aria-labelledby="Blood-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3 >
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="{{asset('cascadefolder/img/gallery/department_man.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    </div>
            </div>

        </div>
    </div>
    <!-- depertment area end  -->
     <!--? Gallery Area Start -->
     <div class="gallery-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Gellary</span>
                        <h2>Our Medical Camp</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img big-img" style="background-image: url({{asset('cascadefolder/img/gallery/gallery1.png')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url({{asset('cascadefolder/img/gallery/gallery2.png')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url({{asset('cascadefolder/img/gallery/gallery3.png')}});"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url({{asset('cascadefolder/img/gallery/gallery4.png')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url({{asset('cascadefolder/img/gallery/gallery5.png')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img big-img" style="background-image: url({{asset('cascadefolder/img/gallery/gallery6.png')}});"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!--? All startups Start -->
    <div class="all-starups-area testimonial-area fix">
        <!-- left Contents -->
        <div class="starups">
            <!--? Testimonial Start -->
            <div class="h1-testimonial-active">
                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                    <!-- Testimonial Content -->
                    <div class="testimonial-caption ">
                        <div class="testimonial-top-cap">
                            <img src="{{asset('cascadefolder/img/gallery/testimonial.png')}}" alt="">
                            <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for yout hard.”</p>
                        </div>
                        <!-- founder -->
                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                            <div class="founder-img">
                                <img src="{{asset('cascadefolder/img/gallery/Homepage_testi.png')}}" alt="">
                            </div>
                            <div class="founder-text">
                                <span>Margaret Lawson</span>
                                <p>Chif Photographer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
        </div>
        <!--Right Contents  -->
        <div class="starups-img"></div>
    </div>
    <!--All startups End -->
     <!--? Team Start -->
     <div class="team-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Doctors</span>
                        <h2>Our Specialist</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('cascadefolder/img/gallery/team2.png')}}" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">DR. ASIF QAMAR</a></h3>
                            <span>Surgeon</span>
                            <!-- Team social -->
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('cascadefolder/img/gallery/team3.png')}}" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">DR. NAZEEF KHAN</a></h3>
                            <span>Skin Specialist</span>
                            <!-- Team social -->
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('cascadefolder/img/gallery/team1.png')}}" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">DR. KASHIF AYUB</a></h3>
                            <span>Eye Specialist</span>
                            <!-- Team social --> 
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
     <!--? Contact form Start -->
     <div class="contact-form-main">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="form-tittle">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <span>Appointment Apply Form</span>
                                        <h2>Appointment Form</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="email" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="select" id="select2">
                                            <option value="">Health Law</option>
                                            <option value="">saiful islam</option>
                                            <option value="">Arafath Miya</option>
                                            <option value="">Shakil Miya</option>
                                            <option value="">Tamim Sharker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="Email" name="subject" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-65">
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="btn" type="submit">Submit Now <i class="ti-arrow-right"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact left Img-->
        <div class="from-left d-none d-lg-block">
            <img src="{{asset('cascadefolder/img/gallery/contact_form.png')}}" alt="">
        </div>
    </div>
    <!-- Contact form End -->
    <!--? gallery Products Start -->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('cascadefolder/img/gallery/gallery1.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('cascadefolder/img/gallery/gallery2.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('cascadefolder/img/gallery/gallery3.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('cascadefolder/img/gallery/gallery4.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                             <div class="gallery-img " style="background-image: url({{asset('cascadefolder/img/gallery/gallery5.png')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url({{asset('cascadefolder/img/gallery/gallery6.png')}});"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery Products End -->
    <!--? Blog start -->
    <div class="home_blog-area section-padding30">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Oure recent news</span>
                        <h2>OurNews From Blog</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="{{asset('cascadefolder/img/gallery/blog1.png')}}" alt="">
                        </div>
                        <div class="blogs-cap">
                            <div class="date-info">
                                <span>Health</span>
                                <p>Nov 30, 2020</p>
                            </div>
                            <h4><a href="blog_details.html">Amazing Places To Visit In Summer</a></h4>
                            <a href="blog_details.html" class="read-more1">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="{{asset('cascadefolder/img/gallery/blog2.png')}}" alt="">
                        </div>
                        <div class="blogs-cap">
                            <div class="date-info">
                                <span>Checkup</span>
                                <p>Nov 30, 2020</p>
                            </div>
                            <h4><a href="blog_details.html">Developing Creativithout Losing Visual</a></h4>
                            <a href="blog_details.html" class="read-more1">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="{{asset('cascadefolder/img/gallery/blog3.png')}}" alt="">
                        </div>
                        <div class="blogs-cap">
                            <div class="date-info">
                                <span>Operation</span>
                                <p>Nov 30, 2020</p>
                            </div>
                            <h4><a href="blog_details.html">Winter Photography Tips from Glenn</a></h4>
                            <a href="blog_details.html" class="read-more1">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="{{asset('cascadefolder/img/gallery/footer_bg.jpg')}}">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                
                                <div class="info1" >
                           <h1 >AMH</h1>
                        
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <div class="footer-pera">
                                        <p class="info1">SERVING FROM 2015 </p>
                                        <p class="info1">AVAILABLE 24/7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-number mb-50">
                                    <h4><span>(051) </span>4909571</h4>
                                    <p>AMHwahcantt@fmail.com</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Send
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{asset('cascadefolder/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('cascadefolder/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('cascadefolder/js/popper.min.js')}}"></script>
    <script src="{{asset('cascadefolder/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('cascadefolder/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('cascadefolder/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('cascadefolder/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('cascadefolder/js/wow.min.js')}}"></script>
    <script src="{{asset('cascadefolder/js/animated.headline.js')}}"></script>
    <script src="{{asset('cascadefolder/js/jquery.magnific-popup.js')}}"></script>

    <!-- Date Picker -->
    <script src="{{asset('cascadefolder/js/gijgo.min.js')}}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{asset('cascadefolder/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('cascadefolder/js/jquery.sticky.js')}}"></script>
    
    <!-- counter , waypoint -->
    <script src="{{asset('cascadefolder/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('cascadefolder/js/waypoints.min.js')}}"></script>
    <script src="{{asset('cascadefolder/js/jquery.countdown.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{asset('cascadefolder/js/contact.js')}}"></script>
    <script src="{{asset('cascadefolder/js/jquery.form.js')}}"></script>
    <script src="{{asset('cascadefolder/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('cascadefolder/js/mail-script.js')}}"></script>
    <script src="{{asset('cascadefolder/js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{asset('cascadefolder/js/plugins.js')}}"></script>
    <script src="{{asset('cascadefolder/js/main.js')}}"></script>
    
    </body>
</html>
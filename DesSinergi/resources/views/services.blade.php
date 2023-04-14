<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Destania Sinergi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v4.0.0" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- tobii css -->
    <link href="../assets/css/tobii.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="../assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Main Css -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="../assets/css/colors/default.css" rel="stylesheet" id="color-opt">

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html" data-aos="fade-right" data-aos-duration="1000">
                <img src="../assets/images/destania.png" height="32" class="logo-light-mode" alt="">
                <img src="../assets/images/logo-light.png" height="32" class="logo-dark-mode" alt="">
            </a>

            <!-- Logo End -->

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation" data-aos="fade-left" data-aos-duration="1000">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="{{ route('index') }}" class="sub-menu-item" style="color: black;">Home</a></li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)" style="color: black;">Profiles</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{ route('about') }}" class="sub-menu-item"> About Us</a></li>
                            <li><a href="page-aboutus-two.html" class="sub-menu-item"> Legality </a></li>
                            <li><a href="page-services.html" class="sub-menu-item"> Certificates </a></li>
                        </ul>
                    <li><a href="{{ route('services') }}" class="sub-menu-item" style="color: black;">Our Services</a>
                    </li>
                    <li><a href="{{ route('contact') }}" class="sub-menu-item" style="color: black;">Contact Us</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->
    <!-- <section class="bg-half-260 pb-lg-0 pb-md-4 bg-primary d-table w-100" style="background: url('../assets/images/wp1.png') bottom no-repeat;">
        <div class="container">
            <div class="row position-relative" style="z-index: 1;">
                <div class="col-md-7 col-12 mt-lg-5">
                    <div class="title-heading">
                        <h4 class="heading my-3" style="color: white;">PT. Destania Sinergi</h4>
                        <p class="para-desc" style="color: white;">We are Independent General
                            Supplier, Engineering and
                            Maintenance Service, Repair
                            and Operation for Industrial,
                            Heavy Equipment and Marine
                            Services</p>
                    </div>
                </div>

                <div class="col-md-5 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="shape-before">
                        <div class="carousel-cell"><img src="../assets/images/landing/2.jpg" class="img-fluid rounded-md" alt=""></div>
                        <img src="../assets/images/shapes/shape1.png" class="img-fluid shape-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100"
        style="background: linear-gradient(rgba(42, 173, 168, 0.67), rgb(255, 254, 254)), url('../assets/images/.png') bottom no-repeat;">
        <div class="container">
            <div class="row mt-5 justify-content-center" data-aos="fade-down" data-aos-duration="1000">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0" style="color: rgb(79, 77, 77)"> Services </h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <!--end section-->
    <!-- End Hero -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5" data-aos="fade-down" data-aos-duration="1000">
                <div class="ms-lg-12">
                    <h1 style="color: #2A10B1">General Suppliers</h1>
                    <div class="section-title text-justify mb-4 pb-2">
                        <div class="row align-items-center">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="card mb-6" style="max-width: 540px;" data-aos="fade-right" data-aos-duration="1000">
                                    <div class="row g-0">
                                        <div class="col-md-4" >
                                            <img src="../assets/images/cam.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">HYDRAULIC AND PNEUMATIC 
                                                    PRODUCT</h5>
                                                <p class="card-text">We supply Pneumatic and Hydraulic 
                                                    Equipment SMC, Yuken, KCC, Legris, 
                                                    Festo, Integral, Brevini, Parker, 
                                                    Enerpac and others.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-6" style="max-width: 540px;" data-aos="fade-left" data-aos-duration="1000">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../assets/images/cam.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">SAFETY EQUIPMENT</h5>
                                                <p class="card-text">We supply for Industrial Safety 
                                                    Equipment 3M, Petzl, UVEX, Kings, 
                                                    Ansell, and others.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-6" style="max-width: 540px;" data-aos="fade-right" data-aos-duration="1000">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../assets/images/cam.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">WELDING EQUIPMENT AND 
                                                    ELECTRODES
                                                    </h5>
                                                <p class="card-text">We supply Welding Equipment and 
                                                    Electrodes Miller, Bohler, Lincoln, 
                                                    Nihonweld, Multipro, and others.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-6" style="max-width: 540px;" data-aos="fade-left" data-aos-duration="1000">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../assets/images/cam.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">ELECTRIC AND ELECTRONIC 
                                                    COMPONENT</h5>
                                                <p class="card-text">We supply Electric and Electronic 
                                                    Component sensor, wire, relay, circuit 
                                                    breaker, etc. All of brands such as 
                                                    Omron, Idex, Schneider, Honeywell, 
                                                    Omega, Eterna, and others.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-6" style="max-width: 540px;" data-aos="fade-right" data-aos-duration="1000">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="../assets/images/cam.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">LUBRICANT</h5>
                                                <p class="card-text">We supply Lubricants for Industrial, 
                                                    Automotive, Locomotive and Marine 
                                                    ExxonMobil, Shell, Fuchs, Pertamina
                                                    Lubricants.
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--end col-->
            </div>

            <div class="row justify-content-center mt-5 mb-5">
                <div class="ms-lg-12" data-aos="fade-down" data-aos-duration="1000">
                    <h1 style="color: #2A10B1">General Maintenance Repair and Operation</h1>
                    <div class="section-title text-justify mb-4 pb-2">
                        <div class="row align-items-center">
                            <h5>General supply production logistic, Machine Spare 
                                part, Equipment and Tools.
                                </h5>
                        </div>

                    </div>
                </div>
                <!--end col-->
            </div>
            
            <div class="row justify-content-center mt-5 mb-5">
                <div class="ms-lg-12" data-aos="fade-down" data-aos-duration="1000">
                    <h1 style="color: #2A10B1">Engineering Service
                    </h1>
                    <div class="section-title text-justify mb-4 pb-2">
                        <div class="row align-items-center">
                            <h5>We custom Fabrication for Industrial, 
                                Marine, Heavy Equipment, Cooling 
                                Systems, Wiring Electrical and 
                                Instrumentations
                                </h5>
                        </div>

                    </div>
                </div>
                <!--end col-->
            </div>

            <div class="row justify-content-center mt-5 mb-5">
                <div class="ms-lg-12" data-aos="fade-down" data-aos-duration="1000">
                    <h1 style="color: #2A10B1">Marine and Ship Service</h1>
                    <div class="section-title text-justify mb-4 pb-2">
                        <div class="row align-items-center">
                            <h5>General supply spare part for ship, Fuel 
                                Supply, repair and maintenance.
                                </h5>
                        </div>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

    </section>
    <!--end section-->
    <!-- end -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60 footer-border">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2" data-aos="fade-right" data-aos-duration="1000">
                                <a href="#" class="logo-footer">
                                    <img src="../assets/images/destania.png" height="50" alt="">
                                </a>
                                <p class="mt-4"><b>Head Office :</b></p>
                                <p class="mt-2">Ruko Mega Legenda 2 Blok C3</p>
                                <p>No.15 Batam Center, Batam</p>

                                <p class="mt-4"><b>Branch Office</b></p>
                                <p class="mt-2">Ruko Premier Park 2 Blok AA</p>
                                <p>No.25 Modernland, Tangerang</p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                </ul>

                                <!--end icon-->
                            </div>
                            <!--end col-->


                            <!--end col-->

                            <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-up" data-aos-duration="1000">
                                <div class="card map map-height-two rounded map-gray border-0" >
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4135.723883938791!2d104.05822169685622!3d1.1016756260531853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9894645ad6ed5%3A0xcd1f4c20e09aae03!2sPT%20DESTANIA%20SINERGI!5e0!3m2!1sen!2sid!4v1661965305997!5m2!1sen!2sid"
                                        style="border:0" class="rounded" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-left" data-aos-duration="1000">
                                <h3 class="footer-head">Keep in touch with us!</h3>
                                <a href="mailto:sales@destaniasinergi.com">
                                <div class="align-items-center d-flex">
                                        <span class="h3 icon-color" style="width: 10%">
                                            <i class="uil uil-envelope"></i>
                                        </span>
                                        <h5>sales@destaniasinergi.com
                                        </h5>
                                    </div>
                                </a>
                                <a href="tel:+627784807185">
                                <div class="align-items-center d-flex">
                                    <span class="h3 icon-color" style="width: 10%">
                                        <i class="uil uil-phone"></i>
                                    </span>
                                    <h5>+6277-8480-7185 &nbsp;(Head Office)
                                    </h5>
                                </div>
                                </a>
                                <a href="tel:+62811695192">
                                <div class="align-items-center d-flex">
                                    <span href="tel:+62811695192" class="h3 icon-color" style="width: 10%">
                                        <i class="uil uil-phone"></i>
                                    </span>
                                    <h5>+6281-1695-192 &nbsp;(Branch Office)
                                    </h5>
                                </div>
                                </a>
                            </div><!--end col-->
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="footer-py-30 footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">© <script>
                                    document.write(new Date().getFullYear())
                                </script> Destania Sinergi</p>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>   
     AOS.init(); 
    </script>
    <!-- javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <script src="../assets/js/feather.min.js"></script>
    <!-- tobii js -->
    <script src="../assets/js/tobii.min.js "></script>
    <!-- Main Js -->
    <script src="../assets/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="../assets/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>
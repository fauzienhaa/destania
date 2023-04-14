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
            <a class="logo" data-aos="fade-right" data-aos-duration="1000" href="{{ route('index')}}">
                <img src="../assets/images/destania.png" height="32" class="logo-light-mode" alt="">
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
                    <li><a href="{{ route('services') }}" class="sub-menu-item" style="color: black;">Our Services</a></li>
                    <li><a href="{{ route('contact')}}" class="sub-menu-item" style="color: black;">Contact Us</a></li>
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


    <!-- Start Hero -->
    <section class="bg-half-200 bg-light d-table w-100" style="background: linear-gradient(rgba(249, 249, 249, 0.67), rgb(0, 0, 0)), url('../assets/images/eng.png') bottom no-repeat;">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-xl-6 col-lg-7 col-md-6">
                    <div class="title-heading">
                        <h1 class="text-white jumbo" data-aos="fade-down" data-aos-duration="1000" style="font-family:'Open Sans'; font-weight:700; text-shadow: 3px 2px #535353">BEST PARTNER SOLUTION</h1>
                        <hr data-aos="fade-right" data-aos-duration="1000" style="height: 5px; color: white">
                        <p class="para-desc" style="color: white;" data-aos="fade-up" data-aos-duration="1000">We are Independent General
                            Supplier, Engineering and
                            Maintenance Service, Repair
                            and Operation for Industrial,
                            Heavy Equipment and Marine
                            Services</p>

                        <div class="mt-4 pt-2" data-aos="fade-up" data-aos-duration="1000">
                            <a href="javascript:void(0)" class="btn btn-primary m-1">Explore Now</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--end section-->
    <!-- End Hero -->

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="ms-lg-5">
                    <div class="section-title text-justify mb-4 pb-2">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                                <img src="../assets/images/cam.png" class="img-fluid" alt="">
                            </div>
                            <!--end col-->
            
                            <div class="col-lg-7 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0" data-aos="fade-left" data-aos-duration="1000">
                                <div class="ms-lg-5">
                                    <div class="section-title mb-3">
                                        <h4 class="title my-3" style="color: #2A10B1">Who Are We?</h4>
                                        <p class="para-desc-2 mx-auto mb-0 mb-4">Destania Sinergi is an General supplier, Engineering and Maintenance Service Repair and
                                            Operation for Industrial, Heavy Equipment and Marine Services. The company Head
                                            Office located in Batam, Indonesia, and the Branch Office located in Tangerang,
                                            Indonesia.
                                            The company manufacturing facilities located in Batu Ceper, Tangerang, Banten. The
                                            service workshop of company is located near Branch Office, it’s dedicated to serve after
                                            market services and fabrication services jobs from the company clients.
                                            The company also provide performance and work-manship warranty and guarantee of
                                            all company products.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-eye"></i>
                        </span>

                        <div class="card-body p-0 content">
                            <h5>Our Vision</h5>
                            <p class="para text-muted mb-0">Well known at the Global Market in
                                General and Engineering Services</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-left" data-aos-duration="1000">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-rocket"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Our Mission</h5>
                            <p class="para text-muted mb-0">Commitment to provide best
                                partner solutions in General
                                Services, Engineering and
                                Maintenance Services</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="section-title text-center mb-0 pb-0" data-aos="fade-down" data-aos-duration="1000">
                <h4 class="title my-3" style="color: #2A10B1">Organization Structure</h4>
                <img src="../assets/images/structure.png" alt="" width="100%">
            </div>
        </div>

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
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                </ul>

                                <!--end icon-->
                            </div>
                            <!--end col-->


                            <!--end col-->

                            <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-up" data-aos-duration="1000">
                                <div class="card map map-height-two rounded map-gray border-0" >
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4135.723883938791!2d104.05822169685622!3d1.1016756260531853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9894645ad6ed5%3A0xcd1f4c20e09aae03!2sPT%20DESTANIA%20SINERGI!5e0!3m2!1sen!2sid!4v1661965305997!5m2!1sen!2sid" style="border:0" class="rounded" allowfullscreen></iframe>
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
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
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
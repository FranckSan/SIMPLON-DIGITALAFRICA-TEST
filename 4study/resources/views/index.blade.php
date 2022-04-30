<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eventoz - Event Conference & Meetup Bootstrap Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- preloader start here -->
    {{-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}
    <!-- preloader ending here -->
    
    <!-- ==========Header Section Starts Here========== -->
    <header class="header-section">
        @include('partials.navbar')
    </header>
    
    <section class="banner-section">
        <div class="container">
            <div class="banner-wrapper">
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="banner-content">
                            <h1 class="mb-0"> Partager
                                pour Apprendre</h1>
                            <p>Rejoigner la communauter pour partager,
                                Aider & contribuer pour nourrir votre connaissance.</p>
                            <a href="#" class="lab-btn mt-3"><span><i class="icofont-users-alt-2"></i>
                                Rejoindre
                                </span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section end Here========== -->


    
    <!-- ==========About Section start Here========== -->
    <section class="about-section pt-5 pb-4 shape-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <h2>4Student</h2>
                        <p>Partager - Contribuer - Aider</p>
                    </div>
                    <div class="section-wrapper text-center">
                        <p>
                            Bienvenue dans la communauté <span>4Sudent</span> 
                            dedié au partage de sujet de devoir dans differentes matiéres.
                            vous trouverez des devoirs, exercices et cours pour tous les niveaux 
                            ainsi que leurs corrigés. vous aurez la possible d'aider la communauté 
                            en contribuant à la recherche de solution et en partageant des ressources.
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========About Section end Here========== -->


    <!-- ===== News Section Start here  ==== -->
    <section class="news-section">
        <div class="container">
            <div class="section-header">
                <h2>Que voulez vous faire ?</h2>
                <p>N'hesitez pas la communauté est là pour vous</p>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-5 col-sm-6 col-xs-12 ">
                        <div class="news-item shadow-sm">
                            <div class="news-inner">
                                <div class="news-thumb">
                                    <img src="assets/images/news/img3.jpg" height="270" width="370" alt="Image">
                                </div>
                                <div class="news-content">
                                    <h6 class="text-center">
                                        <a href="{{route('page.share')}}">
                                            Partager votre sujet devoir, interrogation, exercice...
                                        </a>
                                    </h6>
                                    <p class="text-center">
                                        <a href="{{route('page.share')}}" class="lab-btn">
                                            <span><i class="icofont-uploard"></i> PARTAGER</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6 col-xs-12">
                        <div class="news-item shadow-sm">
                            <div class="news-inner">
                                <div class="news-thumb">
                                    <img src="assets/images/news/img4.jpg" height="270" width="370" alt="Image">
                                </div>
                                <div class="news-content">
                                    <h6 class="text-center">
                                        <a href="{{route('page.contribuer')}}">
                                            Proposer votre solution <br> ou donner votre avis
                                        </a>
                                    </h6>
                                    <p class="text-center">
                                        <a href="{{route('page.contribuer')}}" class="lab-btn">
                                            <span><i class="icofont-d"></i>CONTRIBUER</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== News Section end here  ==== -->



    <!-- ======= Sponsor sectin start here ======== -->
    <section class="sponsor-section pt-4 shape-img">
        <div class="container">
            <div class="section-header">
                <h2>A propos</h2>
                <p class="text-dark">Ceci n'est pas un site web. <br> c'est un test de selection pour le projet TALENT 4 AFRICA </p>
            </div>
            <div class="section-wrapper text-center">
                <div class="all-sponsor">
                    <!-- <h5>Gold sponsor</h5> -->
                    <div class="platinum-sponsor">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/sponsor/logo1.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="assets/images/sponsor/logo2.png" alt="sponsor">
                            </div>
                            <div class="swiper-slide my-auto">
                                <img src="assets/images/sponsor/logo3.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Sponsor sectin end here ======== -->



    <!-- ==== Newsletter  Section start here  ==== -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-wrapper">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3>Notre Newsletttre</h3>
                        <p class="text-white">Restez informé sur vos matières et sujets préférés </p>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Votre Email"
                                aria-label="Enter Your Email" aria-describedby="button-addon2">
                            <button class="lab-btn style-orange" type="button" id="button-addon2">Recevoir <i
                                    class="icofont-paper-plane"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== Newsletter  Section end here  ==== -->
    

    <!-- Footer Section start here -->
        @include('partials.footer')
    <!-- Footer Section end here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/circularProgressBar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>
<style>
    u{
        color: #fa206c;
    }
</style>
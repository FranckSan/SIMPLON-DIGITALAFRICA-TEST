<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Eventoz - Event Conference & Meetup Bootstrap Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- preloader start here -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- preloader ending here -->


    <!-- ==========Header Section Starts Here========== -->
        @include('partials.navbar')
    <!-- ==========Header Section Ends Here========== -->


    <!-- shop page Section Start Here -->
    <div class="shop-page padding-b pt-4">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2>TOUT NOS SUJETS</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <article>
                            <div class="shop-product-wrap grids row justify-content-center">
                                @foreach ($sujet as $data)
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <img src="{{asset('files/'.$data->img)}}" height="240" width="240" alt="shope">
                                                <div class="product-action-link">
                                                    <a href="{{asset('files/'.$data->img)}}" data-rel="lightcase"><i
                                                            class="icofont-eye"></i></a>
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h6><a href="{{route('page.details', $data->id)}}">{{$data->sub_name}}</a></h6>
                                                <div class="rating mb-1">
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                    <span><a href="#"><i class="far fa-star"></i></a></span>
                                                </div>
                                                <h6>{{$data->statut}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="paginations">
                                <ul class="lab-ul d-flex flex-wrap justify-content-center">
                                    <li>
                                        <a href="#"><i class="icofont-rounded-double-left"></i></a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#">1</a>
                                    </li>
                                    {{-- <li class="d-none d-sm-block">
                                        <a href="#">2</a>
                                    </li> --}}
                                    <li>
                                        <a href="#"><i class="icofont-rounded-double-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-7 col-12">
                        <aside>
                            <div class="widget widget-search px-3">
                                <div class="widget-header">
                                    <h5>Trouver un sujet </h5>
                                </div>
                                <form action="#" class="search-wrapper">
                                    <input type="text" name="s" placeholder="Chercher...">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div>

                            <div class="widget widget-category px-3">
                                <div class="widget-header">
                                    <h5>Toutes les Matières</h5>
                                </div>
                                <div class="widget-wrapper">
                                    <ul class="lab-ul shop-menu">
                                        @forelse ($matiere as $list)
                                            <li>
                                                <a href="#0">{{$list->name}}</a>
                                                <ul class="lab-ul shop-submenu">
                                                    @forelse ($list->sujets as $sujet)
                                                        <li><a href="#">{{$sujet->sub_name}}</a></li>
                                                    @empty
                                                        <li>Aucun sujet</li>
                                                    @endforelse
                                                </ul>
                                            </li>
                                        @empty
                                            <li>Aucun sujet</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page Section ENding Here -->

    <!-- Footer Section start here -->
    <footer class="footer-section py-4 bg-dark">
        <div class="container">
            <div class="footer-content text-center">
                <a class="mb-2" href="index.html"><img src="assets/images/footer/logo.png" alt="eventoz"></a>
                <h4 class="mb-4">Simplon CI - Talent 4 Startup - Digital Africa</h4>
                <ul class="social-icons justify-content-center">
                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                </ul>
                <p class="text-muted my-3 text-center">Copyright © 2022 <a href="" target="_blank">ASSALE Franck</a>.</p>
            </div>
        </div>
    </footer>
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
    /* p{
        color: #f64482;
    } */
</style>
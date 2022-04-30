<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Eventoz - Event Conference & Meetup Bootstrap Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
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
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->

    <!-- ==========Header Section Starts Here========== -->
    <header class="header-section">
        @include('partials.navbar')
    </header>
    <!-- ==========Header Section Ends Here========== -->


    <!-- ==========404 Section start Here========== -->
    <section class="fore-zero padding-tb padding-b">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-center">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <article class="contact-form-wrapper">
                        <div class="contact-form">
                            <h4 class="text-center">Partager votre sujet avec la communauté</h4>
                            <form action="{{route('share.store')}}" method="POST" id="commentform" class="comment-form mt-4" enctype="multipart/form-data">
                                @csrf
                                
                                <input type="text" name="name" class="" placeholder="Votre nom*" required>
                                <input type="email" name="email" class="" placeholder="Votre Email*" required>
                                <input type="text" name="sub_name" class="w-100" placeholder="Nommez votre sujet*" required>
                                <select name="matiere_id" id="select">
                                    @foreach ($matiere as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                                <input type="file" name="img" id="file">
                                <textarea name="description" id="role" cols="30" rows="7"
                                    placeholder="Message*" required></textarea>
                                <button type="submit" class="lab-btn mx-auto">
                                    <span>Partager</span>
                                </button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========404 Section ends Here========== -->

    <!-- Footer Section start here -->
    @include('partials.footer')
    <!-- Footer Section end here-->



    <!-- scroll to top start here -->
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
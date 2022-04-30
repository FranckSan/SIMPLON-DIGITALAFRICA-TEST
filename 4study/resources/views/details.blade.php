<!DOCTYPE html>
<html lang="en">

<head>
	<title>4Sudy | Commenter</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Fav icon -->
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
		@include('partials.navbar')
	<!-- ==========Header Section Ends Here========== -->


	<!-- Blog Section Start Here -->
	<div class="blog-section blog-page pt-4">
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
			<div class="section-wrapper">
				<div class="row justify-content-center pb-15">
					<div class="col-lg-10 col-12">
						<article>
							<div class="post-item-2">
								<div class="post-inner">
									<div class="post-thumb rounded">
										<img src="{{asset('files/'.$sujet->img)}}" alt="blog">
									</div>
									<div class="post-content">
										<h3 class="text-capitalize">{{$sujet->sub_name}}</h3>
										<ul class="lab-ul post-date">
											<li><span><i class="icofont-ui-calendar"></i> {{$sujet->created_at->format('j F o à G:i')}}
												</span></li>
											<li><span><i class="icofont-user"></i><a href="#">{{$sujet->name}}</a></span>
											</li>
											<li><span><i class="icofont-speech-comments"></i><a href="#">{{$sujet->comments->count()}}
														Commentaire(s)</a></span></li>
										</ul>
									</div>
								</div>
							</div>

							<div id="comments" class="comments rounded pb-4">
								<h6 class="comment-title h7">{{$sujet->comments->count()}} Commentaires</h6>
								<ul class="lab-ul comment-list">
									@forelse ($sujet->comments as $comment)
										<li class="comment" id="li-comment-1">
											<div class="com-item">
												<div class="com-content">
													<div class="com-title">
														<div class="com-title-meta">
															<a href="#"  class="h7 text-uppercase">{{$comment->name}}</a>
															<span class="mr-4"><i class="icofont-mail"></i> {{$comment->email}} </span> <br>
															<span><i class="icofont-calendar"></i> {{$comment->created_at->format('j F o à G:i')}} </span>
														</div>
													</div>
													<p>{{$comment->msg}}</p>
													<div class="reply-btn"></div>
												</div>
											</div>
										</li>
									@empty
										<li class="text-center">Aucun commentaire</li>
									@endforelse
								</ul>
							</div>
							<div class="container bg-white py-4 my-2">
								<div class="row">
									<div class="col-lg-8 mx-auto">
										<article class="contact-form-wrapper">
											<h6 class="h7 text-center">Laisser un commentaire</h6>
											<div class="contact-form">
												<form action="{{route('details.store', $sujet->id)}}" method="POST" id="commentform" class="comment-form mt-4" enctype="multipart/form-data">
													@csrf
													
													<input type="text" name="name" class="" placeholder="Votre nom*" required>
													<input type="email" name="email" class="" placeholder="Votre Email*" required>
													<input type="hidden" name="sujet_id" class="" value="{{$sujet->id}}" required>
													<textarea name="msg" id="role" cols="30" rows="7"
														placeholder="Message*" required></textarea>
													<button type="submit" class="lab-btn mx-auto"><span>Envoyer</span></button>
												</form>
											</div>
										</article>
									</div>
								</div>
							</div>

						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Section ENding Here -->

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
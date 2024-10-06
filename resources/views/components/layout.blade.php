<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $meta->description }}" />
    <meta name="keywords" content="{{ $meta->keywords }}" />

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/splide.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/slimselect.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/plyr.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/photoswipe.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/default-skin.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/main.css') }}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('public/icon/favicon-32x32.png') }}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{ asset('public/icon/favicon-32x32.png') }}">

	<title>{{ $meta->title }}</title>
</head>
<body>

    <x-header></x-header>

	<!-- mobile menu -->
	<div class="menu">
		<!-- menu search -->
		<form action="#" class="menu__search">
			<input type="text" placeholder="Search">
			<button type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path>
                </svg>
            </button>
		</form>
		<!-- end menu search -->

		<!-- menu nav -->
		<ul class="menu__nav">
			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#">Home</a>
			</li>
			<!-- end dropdown -->

            <li class="menu__nav-item">
				<a href="movies" class="menu__nav-link">All movie</a>
			</li>

			<!-- dropdown -->
			<li class="menu__nav-item">

				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Genre
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                    </svg>
                </a>
				{{--<ul class="dropdown-menu menu__dropdown-menu">
                    @foreach ($genres as $genre)
                    <li class="menu__nav-item">
                        <a class="menu__nav-link" href="{{ $genre->slug }}">{{ $genre->g_name }}</a>
                    </li>
                    @endforeach
				</ul>--}}
			</li>
			<!-- end dropdown -->

			<li class="menu__nav-item">
				<a href="about" class="menu__nav-link">About</a>
			</li>

			<li class="menu__nav-item">
				<a href="contact" class="menu__nav-link">Contact</a>
			</li>

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link menu__nav-link--more" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z"/></svg>
				</a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="signin">Sign In</a></li>
					<li><a href="signup">Sign Up</a></li>
					<li><a href="forgot">Forgot password</a></li>
					<li><a href="404">404 Page</a></li>
				</ul>
			</li>
			<!-- end dropdown -->
		</ul>
		<!-- end menu nav -->
	</div>

	<!-- end mobile menu -->
    <main>{{ $slot }}</main>

    <x-footer></x-footer>

	<!-- plan modal -->
	<div class="modal fade" id="plan-modal" tabindex="-1" aria-labelledby="plan-modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<button class="modal__close" type="button" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>

					<form action="#" class="modal__form">
						<h4 class="modal__title">Select plan</h4>

						<div class="sign__group">
							<label for="fullname" class="sign__label">Name</label>
							<input id="fullname" type="text" name="name" class="sign__input" placeholder="Full name">
						</div>

						<div class="sign__group">
							<label for="email" class="sign__label">Email</label>
							<input id="email" type="text" name="email" class="sign__input" placeholder="example@domain.com">
						</div>

						<div class="sign__group">
							<label class="sign__label" for="value">Choose plan:</label>
							<select class="sign__select" name="value" id="value">
								<option value="20">Premium - $19.99</option>
								<option value="40">Cinematic - $39.99</option>
							</select>

							<span class="sign__text">You can spend money from your account on the renewal of the connected packages, or to order cars on our website.</span>
						</div>

						<div class="sign__group">
							<label class="sign__label">Payment method:</label>

							<ul class="sign__radio">
								<li>
									<input id="type1" type="radio" name="type" checked="">
									<label for="type1">Visa</label>
								</li>
								<li>
									<input id="type2" type="radio" name="type">
									<label for="type2">Mastercard</label>
								</li>
								<li>
									<input id="type3" type="radio" name="type">
									<label for="type3">Paypal</label>
								</li>
							</ul>
						</div>

						<button type="button" class="sign__btn sign__btn--modal">
							<span>Proceed</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end plan modal -->

	<!-- JS -->
	<script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('public/js/splide.min.js') }}"></script>
	<script src="{{ asset('public/js/smooth-scrollbar.js') }}"></script>
	<script src="{{ asset('public/js/slimselect.min.js') }}"></script>
	<script src="{{ asset('public/js/plyr.min.js') }}"></script>
	<script src="{{ asset('public/js/photoswipe.min.js') }}"></script>
	<script src="{{ asset('public/js/photoswipe-ui-default.min.js') }}"></script>
	<script src="{{ asset('public/js/main.js') }}"></script>
</body>
</html>

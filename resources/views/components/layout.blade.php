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

    <x-header>{{ $slot }}</x-header>

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

        <x-nav-link>{{ $slot }}</x-nav-link>

	</div>

	<!-- end mobile menu -->
    <main>{{ $slot }}</main>

    <x-footer>{{ $slot }}</x-footer>

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

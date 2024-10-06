<x-layout>
	<!-- details -->
	<section class="section section--details">
		<!-- details background -->
		<div class="section__details-bg" data-bg="{{ asset('public/img/bg/details__bg.jpg') }}"></div>
		<!-- end details background -->
	
		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="section__title section__title--head">{{ $mv->title }}</h1>
				</div>
				<!-- end title -->
	
				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="item item--details">
						<!-- card cover -->
						<div class="item__cover">
							<img src="{{ asset('public/img/covers/14.png') }}" alt="">
						</div>
						<!-- end card cover -->
	
						<!-- card content -->
						<div class="item__content">
							<div class="item__wrap">
								<span class="item__rate">{{ $mv->star }}</span>
	
								<ul class="item__list">
									<li>Full HD</li>
									<li>16+</li>
								</ul>
							</div>
	
							<ul class="item__meta">
								<li><span>Genre:</span> <a href="#">Action</a> <a href="#">Triler</a></li>
								<li><span>Running time:</span> {{ $mv->time }} min</li>
								<li><span>Country:</span> <a href="#">{{ $mv->country }}</a></li>
								<li><span>Premiere:</span> {{ $mv->release }}</li>
							</ul>
	
							<ul class="item__meta item__meta--second">
								<li><span>Actors:</span> <a href="#">{{ $mv->actors }}</a></li>
							</ul>
						</div>
	
						<div class="item__description item__description--details item__description--tvseries">
							<p>{{ $mv->synopsis }}</p>
						</div>
						<!-- end card content -->
					</div>
				</div>
				<!-- end content -->
	
				<!-- player -->
				<div class="col-12 col-xl-6">
					<video controls crossorigin playsinline poster="../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
						<!-- Video files -->
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
	
						<!-- Caption files -->
						<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
						<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
					</video>
	
					<div class="section__item-filter">
						<select class="section__item-select" name="season" id="filter__season">
							<option value="0">Season 1</option>
							<option value="1">Season 2</option>
							<option value="2">Season 3</option>
							<option value="3">Season 4</option>
							<option value="4">Season 5</option>
						</select>
	
						<select class="section__item-select" name="series" id="filter__series">
							<option value="0">Series 1</option>
							<option value="1">Series 2</option>
							<option value="2">Series 3</option>
							<option value="3">Series 4</option>
							<option value="4">Series 5</option>
							<option value="5">Series 6</option>
							<option value="6">Series 7</option>
							<option value="7">Series 8</option>
							<option value="8">Series 9</option>
							<option value="9">Series 10</option>
							<option value="10">Series 11</option>
							<option value="11">Series 12</option>
						</select>
	
						<select class="section__item-select" name="sync" id="filter__sync">
							<option value="0">Eng.Original</option>
							<option value="1">NewStudio</option>
							<option value="2">LostFilm</option>
							<option value="3">FlixGo</option>
						</select>
					</div>
				</div>
				<!-- end player -->
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->
</x-layout>

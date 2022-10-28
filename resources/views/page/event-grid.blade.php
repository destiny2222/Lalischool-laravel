@extends('layouts.main')
@section('content')
	        <!-- Start Bradcaump area -->
			<div class="ht__bradcaump__area">
				<div class="ht__bradcaump__container">
					<img src="/assets/images/bg-png/6.png" alt="bradcaump images">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="bradcaump__inner text-center">
									<h2 class="bradcaump-title">Enent Grid</h2>
									<nav class="bradcaump-inner">
									  <a class="breadcrumb-item" href="/">Home</a>
									  <span class="brd-separetor"><img src="/assets/images/icons/brad.png" alt="separator images"></span>
									  <span class="breadcrumb-item active">Enent Grid</span>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Bradcaump area -->
			<!-- Start Our Event Area -->
			<div class="dcare__event__area bg--white section-padding--lg">
				<div class="container">
					<div class="row event-grid-page">
						@foreach ($eve_grid as $eve)
							<!-- Start Single Event -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="dcare__event">
								<div class="event__thumb">
									<a href="event-details.html">
										<img src="{{ assets("storage/event_image/".$eve->image) }}" alt="event images">
									</a>
								</div>
								<div class="event__content">
									<div class="event__pub">
										<div class="event__date">
											<span class="date">{{ $eve->event_date }}</span>
										</div>
										<ul class="event__time">
											<li><i class="fa fa-clock-o"></i>{{ $eve->event_time }}</li>
											<li><i class="fa fa-home"></i>{{ $eve->location }}</li>
										</ul>
									</div>
									<div class="event__inner">
										<p><a href="event-details.html">Holiday ! Toy Making Workshop Wakw Up...</a></p>
									</div>
									<ul class="event__btn">
										{{-- <li><a href="#">Book Now</a></li> --}}
										<li><a href="">Learn More</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Start Single Event -->
						@endforeach
						
						
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="dcare__pagination mt--80">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Our Event Area -->
@endsection

	
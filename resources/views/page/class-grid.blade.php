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
							<h2 class="bradcaump-title">class grid</h2>
							<nav class="bradcaump-inner">
							  <a class="breadcrumb-item" href="index.html">Home</a>
							  <span class="brd-separetor"><img src="/assets/images/icons/brad.png" alt="separator images"></span>
							  <span class="breadcrumb-item active">class grid</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Bradcaump area -->
	<!-- Start Courses Area -->
	<section class="dcare__courses__area section-padding--lg bg--white">
		<div class="container">
			<div class="row class__grid__page">
				@foreach ($lila as $item)
					<!-- Start Single Courses -->
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="courses">
						<div class="courses__thumb">
							<a href="{{  route('class.show', $item->slug) }}">
								<img src="{{  asset("storage/class_image/".$item->image) }}" alt="courses images">
							</a>
						</div>
						<div class="courses__inner">
							{{-- <ul class="courses__meta d-flex">
								<li class="prize">$50</li>
								<li class="comment"><i class="fa fa-comment"></i>53</li>
								<li class="like"><i class="fa fa-user"></i>40</li>
							</ul> --}}
							<div class="courses__wrap">
								<div class="courses__date"><i class="fa fa-user"></i>{{ $item->age }}</div>
								<div class="courses__content">
									<h4><a href="{{  route('class.show', $item->slug) }}">{{  $item->name }}</a></h4>
									<p>{{ \Str::limit($item->body, 120) }}</p>
									<ul class="rating d-flex">
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Courses -->
				@endforeach
				
				


			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="dcare__pagination mt--80">
						
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
	
@extends('layouts.main')
@section('content')
	        <!-- Start Bradcaump area -->
			<div class="ht__bradcaump__area">
				<div class="ht__bradcaump__container">
					<img src="{{  asset('assets/images/bg-png/6.png')  }}" alt="bradcaump images">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="bradcaump__inner text-center">
									<h2 class="bradcaump-title">About Us</h2>
									<nav class="bradcaump-inner">
									  <a class="breadcrumb-item" href="index.html">Home</a>
									  <span class="brd-separetor"><img src="{{  asset('assets/images/icons/brad.png') }}" alt="separator images"></span>
									  <span class="breadcrumb-item active">About Us</span>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Bradcaump area -->
	
			<!-- Start Choose Us Area -->
			<section class="dcare__choose__us__area section-padding--lg bg--white">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-md-12">
							<div class="section__title text-center">
								<h2 class="title__line">Little About Us</h2>
							</div>
						</div>
					</div>
					<div class="row mt--40">
						<!-- Start Single Choose Option -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="dacre__choose__option">
								<!-- Start Single Choose -->
								<div class="choose">
									<div class="choose__inner">
										<h4><a href="javascript:void()">Mission</a></h4>
										<p>
											One of exceeding greatness, to be a global centre of excellence where children are taught of the Lord. To raise God fearing leaders together we will learn how to meet the challenges of tomorrow.
										</p>
									</div>
									<div class="choose__icon">
										<img src="/assets/images/choose/icon/1.png" alt="choose icon">
									</div>
								</div>
								<!-- End Single Choose -->
								<!-- Start Single Choose -->
								<div class="choose">
									<div class="choose__inner">
										<h4><a href="javascript:void()">Our Vision</a></h4>
										<p>
											One of exceeding greatness, to be a global centre of excellence where children are taught of the Lord.
										</p>
									</div>
									<div class="choose__icon">
										<img src="/assets/images/choose/icon/2.png" alt="choose icon">
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Choose Option -->
						
						<!-- Start Single Choose Option -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="dacre__choose__option text__align--left">
								<!-- Start Single Choose -->
								<div class="choose">
									<div class="choose__icon">
										<img src="/assets/images/choose/icon/4.png" alt="choose icon">
									</div>
									<div class="choose__inner">
										<h4><a href="javascript:void()">Our Value</a></h4>
										<p>
											The words you use in your written communica speak volumes with Right standards
											Have a moral and spiritual rectitude
											Integrity – Be honest and fair
											Vision – Think about or plan the future with imagination and wisdom
											Excellence – To surpass ordinary standards
											Refining – To be free from impurities of the heart and mind
										</p>
									</div>
								</div>
								<!-- End Single Choose -->
								
								
							</div>
						</div>
						<!-- End Single Choose Option -->
					</div>
				</div>
			</section>
			<!-- End Choose Us Area -->
	
			<!-- Start Welcame Area -->
			<section class="junior__welcome__area welcome--2 bg-image--9 section-padding--lg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-md-12">
							<div class="section__title text-center">
								<h2 class="title__line">Welcome To Lali Perparatory School</h2>
							</div>
						</div>
					</div>
					<div class="row jn__welcome__wrapper align-items-center">
						<div class="col-md-12 col-lg-6 col-sm-12">
							<div class="jnr__Welcome__thumb">
								<img src="/assets/images/wel-come/2.jpg" class="img-fluid" alt="images">
								<a class="play__btn" href="https://www.youtube.com/watch?v=MCJEkZtqlBk"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-sm-12 md-mt-40 sm-mt-40">
							<div class="welcome__juniro__inner">
								<h3>Welcome to <span class="theme-color">O</span><span>u</span>r School</h3>
								<p>
									Thank you for visiting our website and I hope that you find it informative. I feel truly privileged to lead such a wonderful school and to have the opportunity of ensuring that each child at Lalipreparation Nursery,Primary receives the best possible education in their formative years.

									At Lalipreparation, we have high expectations of our children and set challenging targets for them. Every child is encouraged to reach their full potential. We also recognise that every child is unique and has valid contributions to make.

									Our staff are dedicated, hardworking and experienced. We provide a safe, calm and caring atmosphere and foster an ethos of hard work based on an enjoyment of learning. We are pleased to offer a varied selection of enrichment and enhancement opportunities and possess excellent links with our diverse community. We treasure our reputation as a warm, welcoming, family school. 
								</p>
								<div class="wel__btn">
									{{-- <a class="dcare__btn" href="about-us.html">Read More</a> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Welcame Area -->
	
			<!-- Start Courses Area -->
			<section class="dcare__courses__area section-padding--lg bg--white">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-md-12">
							<div class="section__title text-center">
								<h2 class="title__line">Our Classes</h2>
								{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p> --}}
							</div>
						</div>
					</div>
					<div class="row mt--40">

						<!-- Start Single Courses -->
						@foreach ($classe as $item)
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="courses">
								<div class="courses__thumb">
									<a href="{{ route('class.show', $item->slug) }}">
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
										{{-- <div class="courses__date"><i class="fa fa-calendar"></i>30th Dec, 2017</div> --}}
										<div class="courses__content">
											<h4><a href="{{ route('class.show',$item->slug) }}">{{  $item->name }}</a></h4>
											<p>{{{ \Str::limit($item->body, 70) }}}</p>
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
						@endforeach
						
						<!-- End Single Courses -->
						
					</div>
				</div>
			</section>
			<!-- End Courses Area -->
	
			<!-- Start Team Area -->
			<section class="dcare__team__area pb--150 bg--white">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-md-12">
							<div class="section__title text-center">
								<h2 class="title__line">Teachers</h2>
								{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p> --}}
							</div>
						</div>
					</div>
					<div class="row mt--40">

						<!-- Start Single Team -->
						@foreach ($teachs as $clas)
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="team">
								<div class="team__thumb">
									<a href="javascript:void()">
										<img src="{{  asset("storage/class_image/".$clas->image) }}" alt="team images">
									</a>
									<div class="team__hover__action">
										<div class="team__hover__inner">
											<p>{{ $clas->body  }}</p>
											{{-- <ul class="dacre__social__link--2 d-flex justify-content-center">
												<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
												<li class="vimeo"><a href="https://vimeo.com/"><i class="fa fa-vimeo"></i></a></li>
												<li class="pinterest"><a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a></li>
											</ul> --}}
										</div>
									</div>
								</div>
								<div class="team__details">
									<div class="team__info">
										<h6><a href="javascript:void()">{{ $clas->name }}</a></h6>
										<span>{{ $clas->position }}</span>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
						<!-- End Single Team -->
						
					</div>
				</div>
			</section>
			<!-- End Team Area -->
	

			
		
@endsection
	
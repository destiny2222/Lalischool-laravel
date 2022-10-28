@extends('layouts.main')

@section('content')
     <!-- Strat Slider Area  -->
		<div class="slide__carosel owl-carousel owl-theme">
			@foreach ($silder as $silde)
			<div class="slider__area slider--two bg-pngimage--1  d-flex slider__fixed--height justify-content-end align-items-center" 
			style="background-image:url({{ asset('storage/silder_image/'.$silde->image) }})">
			  <div class="container">
				  <div class="row">
					  <div class="col-lg-6 offset-lg-6 offset-md-3 col-md-9 col-sm-12">
						  <div class="slider__activation">
							  <!-- Start Single Slide -->
							  <div class="slide">
								  <div class="slide__inner">
									  <h6>{{ $silde->subtitle }}</h6>
									  <h1>{{ $silde->title }}</h1>
									  <p>{{ $silde->body }}</p>
									  <div class="slider__btn">
										  <a class="dcare__btn black__btn max__height-btn" 
										  href="{{ $silde->links }}">Read More</a>
									  </div>
								  </div>
							  </div>
							  <!-- End Single Slide -->
						  </div>
					  </div>
				  </div>
			  </div>
		  </div>
			@endforeach

			
		</div>
		<!-- End Slider Area -->

		<!-- Start Welcame Area -->
		<section class="junior__welcome__area section-padding--md bg-pngimage--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__line">Welcome To Lali Perparatory School</h2>
						</div>
					</div>
				</div>
				<div class="row jn__welcome__wrapper align-items-center">
					<div class="col-md-12 col-lg-6 col-sm-12">
						<div class="welcome__juniro__inner">
							<h3>A very warm welcome.</h3>
							<p>
								Thank you for visiting our website and I hope that you find it informative. I feel truly privileged to lead such a wonderful school and to have the opportunity of ensuring that each child at Lalipreparation Nursery,Primary receives the best possible education in their formative years.
							</p>
							<div class="wel__btn">
								<a class="dcare__btn" href="/about">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-sm-12 md-mt-40 sm-mt-40">
						<div class="jnr__Welcome__thumb">
							<img src="/assets/images/wel-come/1.png" alt="images">
							<a class="play__btn" href="https://www.youtube.com/watch?v=MCJEkZtqlBk"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Welcame Area -->

		<!-- Start Our Service Area -->
		<section class="junior__service bg-image--1 section-padding--bottom section--padding--xlg--top">
			<div class="container">
				<div class="row">
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="service bg--white border__color wow fadeInUp">
							<div class="service__icon">
								<img src="/assets/images/shape/sm-icon/1.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="service.html">Drawing Class</a></h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								<div class="service__btn">
									<a class="dcare__btn--2" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 xs-mt-60">
						<div class="service bg--white border__color border__color--2 wow fadeInUp" data-wow-delay="0.2s">
							<div class="service__icon">
								<img src="/assets/images/shape/sm-icon/2.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="service.html">Active Learning</a></h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								<div class="service__btn">
									<a class="dcare__btn--2" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
						<div class="service bg--white border__color border__color--3 wow fadeInUp" data-wow-delay="0.45s">
							<div class="service__icon">
								<img src="/assets/images/shape/sm-icon/3.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="service.html">Creative Lesson</a></h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								<div class="service__btn">
									<a class="dcare__btn--2" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
						<div class="service bg--white border__color border__color--4 wow fadeInUp" data-wow-delay="0.65s">
							<div class="service__icon">
								<img src="/assets/images/shape/sm-icon/4.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="service.html">Yoga Class</a></h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								<div class="service__btn">
									<a class="dcare__btn--2" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</section>
		<!-- End Our Service Area -->

		<!-- Start Call To Action -->
		<section class="jnr__call__to__action bg-pngimage--3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="jnr__call__action__wrap d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between align-items-center">
							<div class="callto__action__inner">
								<h2>How To Enroll Your Child In A class ?</h2>
								{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p> --}}
							</div>
							<div class="callto__action__btn">
								<a class="dcare__btn btn__white" href="/contact-us">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Call To Action -->

		<!-- Start our Class Area -->
		<section class="junior__classes__area section-lg-padding--top section-padding--md--bottom bg--white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="section__title text-center">
							<h2 class="title__line">Choose Your Classes</h2>
							{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p> --}}
						</div>
					</div>
				</div>
				<div class="row classes__wrap activation__one owl-carousel owl-theme clearfix mt--40">
					<!-- Start Single Classes -->
					@foreach ($classe as $ken)
					<div class="col-lg-4 col-sm-6">
						<div class="junior__classes">
							<div class="classes__thumb">
								<a href="{{  route('class.show', $ken->slug) }}">
									<img src="{{  asset("storage/class_image/".$ken->image) }}" alt="class images">
								</a>
							</div>
							<div class="classes__inner">
								<div class="classes__icon">
									<img src="/assets/images/class/star/1.png" alt="starr images">
									<span style="font-size:16px;">{{  $ken->age }}</span>
								</div>
								<div class="class__details">
									<h4><a href="{{  route('class.show', $ken->slug) }}">{{ $ken->name }}</a></h4>
									<ul class="class__time">
										{{-- <li>Infant Care : {{  $ken->age }} Years</li> --}}
										{{-- <li>Class Size : 8</li> --}}
										<p>
											{{  \Str::limit($ken->body,100) }}
										</p>
									</ul>
									<div class="class__btn">
										<a class="dcare__btn--2" href="/contact">Admission Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<!-- End Single Classes -->
					
					
				</div>
			</div>
		</section>
		<!-- End our Class Area -->
		
		<!-- Start Testimonial Area -->
		{{-- <section class="junior__testimonial__area bg-image--2 section-padding--lg">
			<div class="container">
				<div class="row">
					<div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12">
						<div class="testimonial__container">
							<div class="tes__activation--1 owl-carousel owl-theme">
								<div class="testimonial__bg">
									<!-- Start Single Testimonial -->
									<div class="testimonial text-center">
										<div class="testimonial__inner">
											<div class="test__icon">
												<img src="images/testimonial/icon/1.png" alt="icon images">
											</div>
											<div class="client__details">
												<p>Lorem ipsum dolor t dolore magna aliqua. Ut enim ad minim veniam, quis nostexercitation ullamco laboris nisimollit anim id est lsunt explicabo. Nemo enim ipsam voluptatem quia voluptas quia voluptas sit aspernatd.</p>
												<div class="client__info">
													<h6>Lora alica</h6>
													<span>Gardients of student</span>
												</div>
											</div>
										</div>
									</div>
									<!-- End Single Testimonial -->
								</div>
								<div class="testimonial__bg">
									<!-- Start Single Testimonial -->
									<div class="testimonial text-center">
										<div class="testimonial__inner">
											<div class="test__icon">
												<img src="images/testimonial/icon/1.png" alt="icon images">
											</div>
											<div class="client__details">
												<p>Kohinur ipsum dolor t dolore magna aliqua. Ut enim ad minim veniam, quis nostexercitation ullamco laboris nisimollit anim id est lsunt explicabo. Nemo enim ipsam voluptatem quia voluptas quia voluptas sit aspernatd.</p>
												<div class="client__info">
													<h6>Kohinur alica</h6>
													<span>Gardients of student</span>
												</div>
											</div>
										</div>
									</div>
									<!-- End Single Testimonial -->
								</div>
								<div class="testimonial__bg">
									<!-- Start Single Testimonial -->
									<div class="testimonial text-center">
										<div class="testimonial__inner">
											<div class="test__icon">
												<img src="images/testimonial/icon/1.png" alt="icon images">
											</div>
											<div class="client__details">
												<p>Najnin ipsum dolor t dolore magna aliqua. Ut enim ad minim veniam, quis nostexercitation ullamco laboris nisimollit anim id est lsunt explicabo. Nemo enim ipsam voluptatem quia voluptas quia voluptas sit aspernatd.</p>
												<div class="client__info">
													<h6>Najnin alica</h6>
													<span>Gardients of student</span>
												</div>
											</div>
										</div>
									</div>
									<!-- End Single Testimonial -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!-- End Testimonial Area -->

		<!-- Start Our Gallery Area -->
		<section class="junior__gallery__area bg--white section-padding--lg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<h2 class="title__line">Our Gallery</h2>
							{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p> --}}
						</div>
					</div>
				</div>
				<div class="row galler__wrap mt--40">
					@foreach ($galle as $gas)
						 <!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="#">
									<img src="{{ asset("storage/gallery_image/".$gas->image) }}" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="{{ asset("storage/gallery_image/".$gas->image) }}" data-lightbox="grportimg" data-title="{{  $gas->name }}"><i class="fa fa-search"></i></a></li>
										<li><a href="{{ route('gallery.show') }}"><i class="fa fa-link"></i></a></li>
									</ul>
									<h4 class="gallery__title"><a href="#">{{  $gas->name }}</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					@endforeach
				</div>	
			</div>
		</section>
		<!-- End Our Gallery Area -->

		<!-- Start Blog Area -->
		<section class="jnr__blog_area section-padding--lg bg-image--3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center white--title">
							<h2 class="title__line">Recent Blog</h2>
						</div>
					</div>
				</div>
				<div class="row blog__wrapper mt--40">
					@forelse ($blog as $blogger)
						<!-- Start Single Blog -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="blog">
							<div class="blog__date">
								<span>Date : {{  $blogger->created_at->toFormattedDateString()}}</span>
								{{-- <span>Date : {{  $blogger->created_at->format('m-d-Y')}}</span> --}}
								{{-- <span>Date : {{  $blogger->created_at->format('H-i')}}</span> for only time --}}
								{{-- <span>Date : {{ $blogger->created_at->diffforHumans() }}</span> --}}
							</div>
							<div class="blog__thumb">
								<a href="blog-details.html">
									<img src="{{ asset("storage/blogger/".$blogger->image) }}" alt="blog images">
								</a>
							</div>
							<div class="blog__inner">
							
								<span>Children Blog : {{ $blogger->author }}</span>
								<h4><a href="{{ route('blog.show', $blogger->slug) }}">{{ $blogger->title }}</a></h4>
								<p>{{ \Str::limit($blogger->body, 100) }}</p>
								<ul class="blog__meta d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
									<li><a href="#">Comments : 05</a></li>
									<li><a href="#">Like : 07</a></li>
								</ul>
							</div>
						</article>
					</div>
					<!-- End Single Blog -->
					@empty
						
					@endforelse
					
					
					
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start upcomming Area -->
		<section class="junior__upcomming__area section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<h2 class="title__line">Up Coming Event</h2>
						</div>
					</div>
				</div>
				<div class="row upcomming__wrap mt--40">
					@foreach ($event as $eve)
						<!-- Start Single Upcomming Event -->
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="upcomming__event">
							<div class="upcomming__thumb">
								<img src="{{ asset("storage/event_image/".$eve->image) }}" alt="upcomming images">
							</div>
							<div class="upcomming__inner">
								<h6><a href="event-details.html">{{  $eve->title }}</a></h6>
								<p>{{ $eve->body }}</p>
								<ul class="event__time">
									<li><i class="fa fa-home"></i>{{ $eve->location  }}</li>
									<li><i class="fa fa-clock-o"></i>{{ $eve->event_time }}</li>
								</ul>
							</div>
							<div class="event__occur">
								<img src="/assets/images/upcomming/shape/1.png" alt="shape images">
								<div class="enent__pub">
									<span class="time">{{ $eve->event_time->toFormattedDateString() }}</span>
									{{-- <span class="bate">Dec,2017</span> --}}
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Upcomming Event -->
					@endforeach
					
					
				</div>
			</div>
		</section>
		<!-- End upcomming Area -->

	
	
@endsection
	
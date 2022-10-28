@extends('layouts.main')
@section('content')
	        <!-- Start Bradcaump area -->
			<div class="ht__bradcaump__area">
				<div class="ht__bradcaump__container">
					<img src="{{ asset('assets/images/bg-png/6.png') }}" alt="bradcaump images">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="bradcaump__inner text-center">
									<h2 class="bradcaump-title">Blog Details</h2>
									<nav class="bradcaump-inner">
									  <a class="breadcrumb-item" href="/">Home</a>
									  <span class="brd-separetor"><img src="{{ asset('assets/images/icons/brad.png') }}" alt="separator images"></span>
									  <span class="breadcrumb-item active">{{  $blog->title }}</span>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Bradcaump area -->
			<!-- Start Blog Grid Area -->
			<div class="dcare__blog__list bg--white section-padding--lg">
				<div class="container">
					<div class="row">
						<!-- Start BLog Details -->
						<div class="col-lg-9">
							<div class="page__blog__details">
								<article class="dacre__blog__details">
									<div class="blog__thumb">
										<img src="{{ asset("storage/blogger/".$blog->image) }}" class="img-fluid w-100" alt="blog images">
									</div>
									<div class="blog__inner">
										<h2>{{  $blog->title }}</h2>
										<ul>
											<li>Children Blog : Post By <a href="#">{{ $blog->author }}</a></li>
											<li>{{ $blog->created_at->toFormattedDateString() }}</li>
											<li><a href="#">Comments : 05</a></li>
											<li><a href="#">Like : 07</a></li>
										</ul>
	
										<p>{{ $blog->body }}</p>
	
										
									</div>
								</article>
	
	
								
								<div class="blog__page__btn">
									<ul>
										{{-- <li><a href="#">Site Ament</a></li>
										<li><a href="#">Loremipsum</a></li>
										<li><a href="#">Dummy Text</a></li> --}}
									</ul>
									<div class="blog__share">
										<span>Share By:</span>
										<ul class="dacre__social__link--2 bg--2 d-flex justify-content-end">
											<li class="facebook"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
											<li class="vimeo"><a target="_blank" href="https://www.vimeo.com/"><i class="fa fa-vimeo"></i></a></li>
											<li class="pinterest"><a target="_blank" href="https://pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
								
	
								
	
								
	
							</div>
						</div>
						<!-- End BLog Details -->
						<!-- Start Sidebar -->
						<div class="col-lg-3">
							<div class="sidebar__widgets sidebar--right">
	
								<!-- Single Widget -->
								<div class="single__widget search">
									<h4>Search</h4>
									<form action="#">
										<input type="text" placeholder="Search keyword">
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
								<!-- End Widget -->
	
	
								<!-- Single Widget -->
								<div class="single__widget recent__post">
									<h4>Recent Posts</h4>
									<ul>
										@foreach ($recentblog as $recent)
											<li>
												<a href="blog-details.html"><img src="{{ asset("storage/blogger/".$recent->image) }}" alt="post images"></a>
												<div class="post__content">
													<h6><a href="blog-details.html">{{ $recent->title }}</a></h6>
													{{-- <span class="date"><i class="fa fa-calendar"></i>{{ $recent->create_at->toDateFormattedString() }}</span> --}}
													<span class="date"><i class="fa fa-calendar"></i>{{ $recent->created_at->diffforHumans() }}</span>
												</div>
											</li>
										@endforeach
									</ul>
								</div>
								<!-- End Widget -->
	
								

								<!-- Single Widget -->
								<div class="single__widget Popular__classes">
									<h4>Popular Classes</h4>
									<ul>
										<li><a href="class-details.html">Drawing Class</a></li>
										{{-- <li><a href="class-details.html">Dance Class</a></li>
										<li><a href="class-details.html">Preschool Class</a></li>
										<li><a href="class-details.html">Preschool Class</a></li>
										<li><a href="class-details.html">Swimming Class</a></li>
										<li><a href="class-details.html">Sports Class</a></li> --}}
									</ul>
								</div>
								<!-- End Widget -->
	
								<!-- Single Widget -->
								{{-- <div class="single__widget instagram__feed">
									<h4>Instagram Feed</h4>
									<ul>
										<li><a href="#"><img src="images/blog/ins/1.jpg" alt="instafeed images"></a></li>
										<li><a href="#"><img src="images/blog/ins/2.jpg" alt="instafeed images"></a></li>
										<li><a href="#"><img src="images/blog/ins/3.jpg" alt="instafeed images"></a></li>
										<li><a href="#"><img src="images/blog/ins/4.jpg" alt="instafeed images"></a></li>
									</ul>
								</div> --}}
								<!-- End Widget -->
	
								
	
								<!-- Single Widget -->
								<div class="single__widget Social__network">
									<h4>Social Network</h4>
									<ul class="dacre__social__link--2 bg--2 d-flex justify-content-start">
										<li class="facebook"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
										<li class="vimeo"><a target="_blank" href="https://www.vimeo.com/"><i class="fa fa-vimeo"></i></a></li>
										<li class="pinterest"><a target="_blank" href="https://pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
								<!-- End Widget -->
	
								<!-- Single Widget -->
								<div class="single__widget tags">
									<h4>Tags</h4>
									<ul>
										@foreach ($blogtag as $taging)
										   <li><a href="#">{{  $taging->name }}</a></li>
										@endforeach
									</ul>
								</div>
								<!-- End Widget -->
	
							</div>
						</div>
						<!-- End Sidebar -->
					</div>
				</div>
			</div>
			<!-- End Blog Grid Area -->        
		
@endsection

	
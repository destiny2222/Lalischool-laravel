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
							<h2 class="bradcaump-title">{{  $class->name }}</h2>
							<nav class="bradcaump-inner">
							  <a class="breadcrumb-item" href="/index">Home</a>
							  <span class="brd-separetor"><img src="/assets/images/icons/brad.png" alt="separator images"></span>
							  <span class="breadcrumb-item active">{{  $class->name }}</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Bradcaump area -->
	<!-- Start Class Details -->
	<section class="page-class-details bg--white section-padding--lg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="class__quality__desc">

						<div class="class__thumb">
							<div class="courses__type d-flex justify-content-between">
								<ul class="d-flex">
									<li>Course Type : <span>Basic</span></li>
									<li>Age : <span>{{ $class->age }} Years</span></li>
								</ul>
								<ul class="rating d-flex">
									<li><span class="ti-star"></span></li>
									<li><span class="ti-star"></span></li>
									<li><span class="ti-star"></span></li>
									<li><span class="ti-star"></span></li>
									<li><span class="ti-star"></span></li>
								</ul>
							</div>
							<div class="courses__images">
								<img src="{{ asset("storage/class_image/".$class->image)  }}" class="w-100" alt="class images">
							</div>
							
						</div>
						<div class="class-details-inner">
							<div class="courses__inner">
								<h2>{{  $class->name }}</h2>
								<ul>
									{{-- <li>Age: <span></span></li> --}}
									{{-- <li>Class Duration :  <i class="fa fa-calendar"></i><span>4 Month</span></li> --}}
								</ul>
								<p>{{ $class->body }}</p>
							    
							</div>
							
						</div>
						

					</div>
				</div>
				<!-- Start Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar__widgets sidebar--right">
						<!-- Single Widget -->
						<div class="single__widget recent__post">
							<h4>Recent Posts</h4>
							<ul>
								<li>
									<a href="blog-details.html"><img src="images/blog/sm-img/1.jpg" alt="post images"></a>
									<div class="post__content">
										<h6><a href="blog-details.html">Sports day is near get ready soon</a></h6>
										<span class="date"><i class="fa fa-calendar"></i>30th Dec, 2017</span>
									</div>
								</li>

								<li>
									<a href="blog-details.html"><img src="images/blog/sm-img/2.jpg" alt="post images"></a>
									<div class="post__content">
										<h6><a href="blog-details.html">Sports day is near get ready soon</a></h6>
										<span class="date"><i class="fa fa-calendar"></i>20th Dec, 2017</span>
									</div>
								</li>

								<li>
									<a href="blog-details.html"><img src="images/blog/sm-img/3.jpg" alt="post images"></a>
									<div class="post__content">
										<h6><a href="blog-details.html">Sports day is near get ready soon</a></h6>
										<span class="date"><i class="fa fa-calendar"></i>10th Dec, 2017</span>
									</div>
								</li>
							</ul>
						</div>
						<!-- End Widget -->

					</div>
				</div>
				<!-- End Sidebar -->
			</div>
		</div>
	</section>
	<!-- End Class Details -->
@endsection
       
	
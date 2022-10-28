@extends('layouts.main')

@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
            	<img src="{{  asset('assets/images/bg-png/6.png') }}" alt="bradcaump images">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Blog Grid</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><img src="{{ asset('assets/images/icons/brad.png') }}" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Blog Grid</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start Blog Area -->
		<section class="dcare__blog__area section-padding--lg bg--white">
			<div class="container">
				<div class="row blog-page">
                    @forelse ($blog as $aneeta)
						<!-- Start Single Blog -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="blog__2">
							<div class="blog__thumb">
								<a href="{{ route('blog.show',$aneeta->slug ) }}">
									<img src="{{ asset("storage/blogger/".$aneeta->image) }}" alt="blog images">
								</a>
							</div>
							<div class="blog__inner">
								<div class="blog__hover__inner">
									<h2><a href="{{ route('blog.show',$aneeta->slug ) }}">{{ $aneeta->title }}</a></h2>
									<div class="bl__meta">
										<p>{{ \Str::limit($aneeta->body, 50) }}</p>
									</div>
									<div class="bl__details">
										<p>Lorem ipsum dolor sit amet, consect adsicinge elit, sed do eiusmod tempor incidi.</p>
									</div>
									<div class="blog__btn">
										<a class="bl__btn" href="{{ route('blog.show',$aneeta->slug) }}">Read More</a>
										<a class="bl__share__btn" href=""><i class="fa fa-share-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Blog -->
					@empty
						
					@endforelse
					
					
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="dcare__pagination mt--80">
							{{ $blog->links() }}
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
@endsection


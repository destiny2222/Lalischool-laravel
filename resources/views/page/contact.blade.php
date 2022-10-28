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
                                <h2 class="bradcaump-title">Contact Us</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/">Home</a>
                                  <span class="brd-separetor"><img src="/assets/images/icons/brad.png" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Contact Us</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

		<div class="conatiner">
			<div class="row justify-content-center">
				<div class="col-12">
					@if (session()->has('suceess'))
					<div class="alert alert-success alert-dismissible" role="alert">
					<strong>{{  session('success') }}!</strong>
						<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
					</div>
					@endif
				</div>
			</div>
		</div>



        <section class="page__contact bg--white pb--150 pt--180 single-contact-form">
        	<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="row">
							<!-- Start Single Address -->
							<div class="col-md-6 col-sm-6 col-12 col-lg-12">
								<div class="address location">
									<div class="ct__icon">
										<i class="fa fa-home"></i>
									</div>
									<div class="address__inner">
										<h2>Our Location</h2>
										<ul>
											<li>Uttara, Zamzam Tower <br>  Road # 12, Sec #13, 5th Floor</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Address -->
							<!-- Start Single Address -->
							<div class="col-md-6 col-sm-6 col-12 col-lg-12 xs-mt-60">
								<div class="address phone">
									<div class="ct__icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="address__inner">
										<h2>Phone Number</h2>
										<ul>
											<li><a href="tell:+08097-654321">+08097-654321</a></li>
											<li><a href="tell:+08097-654321">+08097-654321</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Address -->
							<!-- Start Single Address -->
							<div class="col-md-6 col-sm-6 col-12 col-lg-12 md-mt-60 sm-mt-60">
								<div class="address email">
									<div class="ct__icon">
										<i class="fa fa-envelope"></i>
									</div>
									<div class="address__inner">
										<h2>E-mail Address</h2>
										<ul>
											<li><a href="mailto:+08097-654321">juniorhomeschool.@email.com</a></li>
											<li><a href="mailto:+08097-654321">Kidscareschool.@yahoo.com</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Address -->
						</div>
					</div>
					<div class="col-lg-7">
						<form action="{{ route('contact.us.store') }}" method="POST">
							@csrf
							{{-- bg-image--27--}}
							<div class="form-row">
							  <div class="form-group col-md-6 mb-3">
								<label for="inputEmail4">Name</label>
								<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="inputEmail4" placeholder="Your Name">
							    @error('name')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							  </div>
							  <div class="form-group col-md-6 mb-3">
								<label for="inputEmail4">Email</label>
								<input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="inputEmail4" placeholder="Your Email">
								@error('email')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							  </div>
							  <div class="form-group col-md-6 mb-3">
								<label for="inputPassword4">Phone Number</label>
								<input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="inputPassword4" placeholder="Phone Number">
							    @error('phone')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							  </div>
							  <div class="form-group col-md-6 mb-3">
								<label for="inputAddress">Subject</label>
								<input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="inputAddress" placeholder="Subject">
							    @error('subject')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							  </div>
							  <div class="form-group col-12">
								<textarea name="message" id="" class="form-control @error('message') is-invalid @enderror"></textarea>
								@error('message')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							  </div>
							</div>
							<div class="form-group text-center">
							  <button type="submit" class="btn btn-success btn-custom">Submit</button>
							</div>
						  </form>
					</div>
				</div>
        	</div>
        </section>

       
@endsection
	
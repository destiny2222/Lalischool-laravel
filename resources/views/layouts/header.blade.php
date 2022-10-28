<!-- Header -->
<header id="header" class="jnr__header header--2 clearfix">
    <!-- Start Header Top Area -->
    <div class="junior__header__top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-sm-9 col-12">
                    <div class="jun__header__top__left">
                        <ul class="top__address d-flex justify-content-start align-items-center flex-wrap flex-lg-nowrap flex-md-nowrap">
                            <li><span>E-mail Address : </span><a href="#">jhome@mail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6 col-sm-3 col-12">
                    <div class="jun__header__top__right">
                        <ul class="accounting top__address d-flex justify-content-lg-end justify-content-md-end justify-content-start align-items-center">
                            <li><span>Contact Now : </span><a href="#">+003457289</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Start Mainmenu Area -->
    <div class="mainmenu__wrapper bg--white sticky__header">
        <div class="container">
            <div class="row d-none d-lg-flex  align-items-center">
                <div class="col-sm-4 col-md-6 col-lg-4 order-1 order-lg-1">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="{{  asset('assets/images/logo/logo.png')  }}" width="60" alt="logo images">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2 col-lg-8 order-3 order-lg-2">
                    <div class="mainmenu__wrap">
                        <nav class="mainmenu__nav ">
                            <ul class="mainmenu justify-content-lg-end">
                                <li class="drop"><a href="{{ route('index')  }}">Home</a></li>
                                <li class="drop"><a href="{{ route('about.index')  }}">About</a></li>
                                <li class="drop">
                                    <a href="{{ route('class.index') }}">Curriculum</a>
                                    {{-- <ul class="dropdown__menu">
                                        <li><a href="index.html">home version 01</a></li>
                                        <li><a href="index-2.html">home version 02</a></li>
                                        <li><a href="index-3.html">home version 03</a></li>
                                    </ul> --}}
                                </li>
                                <li class="drop"><a href="{{  route('event.index') }}">Event</a>
                                   
                                </li>
                                <li class="drop"><a href="{{ route('blog.index') }}">Blog</a>
                                    
                                </li>
                                <li><a href="{{  route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
            </div>
            <!-- Mobile Menu -->
            <div class="mobile-menu d-block d-lg-none">
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{  asset('assets/images/logo/logo.png')  }}" width="70" alt="logo"></a>
                </div>
                
            </div>
            <!-- Mobile Menu -->
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
<!-- //Header -->
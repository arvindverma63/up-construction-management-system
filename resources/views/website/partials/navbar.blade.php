    <div class="py-1 top">
        <div class="container">
            <div class="row">
                <div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
                    <p class="mb-0 w-100">
                        <span class="fa fa-paper-plane"></span>
                        <span class="text">info@blocinfra.com</span>
                    </p>
                </div>
                <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
                <div
                    class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end">
                    <p class="mb-0 register-link"><a href="#" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter">Inquire Now</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-5">
        <div class="container">
            <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-md-4 d-flex mb-2 mb-md-0">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="{{ asset('template/images/logo.jpg') }}" style="height: 80px;"/>
                        <span class="ml-2">Bloc Infra <small>Construction Company</small></span>
                    </a>
                </div>
                <div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="fa fa-map"></span>
                    </div>
                    <div class="pr-md-4 pl-md-3 pl-3 text">
                        <p class="con"><span>Free Call</span> <span>+91 7311 122 392</span></p>
                        <p class="con">Call Us Now 24/7 Customer Support</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex topper mb-md-0 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text pl-3 pl-md-3">
                        <p class="hr"><span>Our Location</span></p>
                        <p class="con">Flat No. 202, Plot No. 647 Vishambhar Sadan, Vikash Nagar, Kanpur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                        <a href="{{ route('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}">
                        <a href="{{ route('services') }}" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('project') ? 'active' : '' }}">
                        <a href="{{ route('project') }}" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
                        <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>

                </ul>
                <a href="#" class="btn-custom" data-toggle="modal" data-target="#exampleModalCenter">Inquire
                    Now</a>
            </div>
        </div>
    </nav>
    <!-- END nav -->

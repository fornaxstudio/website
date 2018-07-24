<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo-dark" src="assets/img/fornax-studio-header-logo.png" alt="logo">
                <img class="logo-light" src="assets/img/fornax-studio-header-logo.png" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>

            <ul class="nav nav-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">@lang('pages.menu.Home')</a>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">@lang('pages.menu.About')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">@lang('pages.menu.Contact')</a>
                </li>--}}
            </ul>
        </section>

        {{--<a class="btn btn-xs btn-round btn-success" href="#">Buy Now</a>--}}

    </div>
</nav><!-- /.navbar -->


<!-- Header -->
<header id="class-header" class="header text-white h-fullscreen overflow-hidden" style="background-image: linear-gradient(-45deg, #667eea 0%, #764ba2 100%);">
    <canvas class="constellation" data-radius="0"></canvas>
    <div class="container position-static">
        <div class="row align-items-center h-100">

            <div class="col-lg-7">
                <h1 class="display-4 fw-500">We Are<span class="fw-400 pl-2" data-typing="Forward-thinking, Fully-remote, Open Company," data-type-speed="80"></span></h1>
                <p class="lead mt-5 mb-7 mb-md-9 w-80"><strong>Fornax Studio</strong> is an employee-owned and fully-remote company dedicated to awesome software and enthusiastic customer support. We treat each other with respect. We value transparency and our people are independent, skilled and highly motivated. We’re privileged to be able to work each day with smart and talented people who are passionate about creating great software. All while treating customers with respect, making a living, and having fun.</p>
                <a class="btn btn-xl btn-round btn-success w-220 mr-3 px-6 d-none d-md-inline-block" href="#section-values">Explore Our Values</a>
                <a class="btn btn-xl btn-round btn-outline-light w-220 px-6" href="#section-demo">Explore Our Products</a>
            </div>

            <div class="col-lg-5 d-none d-lg-block">
            </div>

        </div>

        <div class="d-none d-lg-block sample-blocks">
            <a href="block/cover.html#block-2" target="_blank">
                <img class="shadow-6" src="assets/img/preview/rezervapp_300_196.png" alt="..." data-aos="fade-up" data-aos-delay="0" data-aos-offset="0">
            </a>

            <a href="block/team.html#block-6" target="_blank">
                <img class="shadow-6" src="assets/img/preview/rezervapp_dashboard_260_134.png" alt="..." data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
            </a>

            <a href="block/cover.html#block-5" target="_blank">
                <img class="shadow-6" src="assets/img/preview/dngo_260_170.png" alt="..." data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
            </a>

            <a href="block/blog.html#block-1" target="_blank">
                <img class="shadow-6" src="assets/img/preview/dngo_video_3_260_106.png" alt="..." data-aos="fade-up" data-aos-delay="600" data-aos-offset="0">
            </a>

            <a href="block/feature.html#block-8" target="_blank">
                <img class="shadow-6" src="assets/img/preview/dngo_video_5_240_116.png" alt="..." data-aos="fade-up" data-aos-delay="800" data-aos-offset="0">
            </a>

            <a href="block/feature.html#block-13" target="_blank">
                <img class="shadow-6" src="assets/img/preview/rezervapp__220_92.png" alt="..." data-aos="fade-up" data-aos-delay="1000" data-aos-offset="0">
            </a>

            <a href="block/shop.html#block-4" target="_blank">
                <img class="shadow-6" src="assets/img/preview/rezervapp__160_87.png" alt="..." data-aos="fade-up" data-aos-delay="1200" data-aos-offset="0">
            </a>

            <a href="block/feature-text.html#block-3" target="_blank">
                <img class="shadow-6" src="assets/img/preview/dngo_160_87.png" alt="..." data-aos="fade-up" data-aos-delay="1400" data-aos-offset="0">
            </a>

            <a href="block/pricing.html#block-6" target="_blank">
                <img class="shadow-6" src="assets/img/preview/dngo_video_2_130_66.png" alt="..." data-aos="fade-up" data-aos-delay="1700" data-aos-offset="0">
            </a>
        </div>

    </div>
</header><!-- /.header -->
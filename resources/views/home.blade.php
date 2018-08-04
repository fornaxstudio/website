@extends('layout.page')
@section('title', __('pages.title.Home'))
@section('content')
    <!-- Header -->
    <header class="header text-white h-fullscreen overflow-hidden" style="background-image: url({{ asset('assets/img/constellations-cosmos-dark-982378.jpg') }});">
        <canvas class="constellation" data-radius="0"></canvas>
        <div class="container position-static">
            <div class="row align-items-center h-100">

                <div class="col-lg-7">
                    <h1 class="display-4 fw-500">We Are<span class="fw-400 pl-2" data-typing="Forward-thinking, Fully-remote, Open Company," data-type-speed="80"></span></h1>
                    <p class="lead mt-5 mb-7 mb-md-9 w-80">@lang('pages.page-line.Home.home-intro')</p>
                    <a class="btn btn-xl btn-round btn-success w-220 mr-3 px-6 d-none d-md-inline-block" href="#section-values">@lang('pages.page-line.Home.Explore Our Values')</a>
                    <a class="btn btn-xl btn-round btn-outline-light w-220 px-6" href="#section-demo">@lang('pages.page-line.Home.Explore Our Products')</a>
                </div>

                <div class="col-lg-5 d-none d-lg-block">
                </div>

            </div>

            <div class="d-none d-lg-block sample-blocks">
                <a target="_blank">
                    <img class="shadow-6" src="{{ asset('assets/img/preview/rezervapp_300_196.png') }}" alt="..." data-aos="fade-up" data-aos-delay="0" data-aos-offset="0">
                </a>

                <a target="_blank">
                    <img class="shadow-6" src="{{ asset('assets/img/preview/rezervapp_dashboard_260_134.png') }}" alt="..." data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                </a>

                <a target="_blank">
                    <img class="shadow-6" src="{{ asset('assets/img/preview/dngo_260_170.png') }}" alt="..." data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
                </a>

                <a target="_blank">
                    <img class="shadow-6" src="{{ asset('assets/img/preview/dngo_video_3_260_106.png') }}" alt="..." data-aos="fade-up" data-aos-delay="600" data-aos-offset="0">
                </a>

                <a target="_blank">
                    <img class="shadow-6" src="{{ asset('assets/img/preview/dngo_video_5_240_116.png') }}" alt="..." data-aos="fade-up" data-aos-delay="800" data-aos-offset="0">
                </a>

                <a target="_blank">
                    <img class="shadow-6" src="{{ asset('assets/img/preview/rezervapp__220_92.png') }}" alt="..." data-aos="fade-up" data-aos-delay="1000" data-aos-offset="0">
                </a>

                <a target="_blank">
                    <img class="shadow-6" src="{{ asset('assets/img/preview/rezervapp__160_87.png') }}" alt="..." data-aos="fade-up" data-aos-delay="1200" data-aos-offset="0">
                </a>

                <a target="_blank">
                    <img class="shadow-6" src="{{ asset('assets/img/preview/dngo_160_87.png') }}" alt="..." data-aos="fade-up" data-aos-delay="1400" data-aos-offset="0">
                </a>

                <a target="_blank">
                    <img class="shadow-6" src="{{ asset('assets/img/preview/dngo_video_2_130_66.png') }}" alt="..." data-aos="fade-up" data-aos-delay="1700" data-aos-offset="0">
                </a>
            </div>

        </div>
    </header><!-- /.header -->
    <!-- Main Content -->
    <main class="main-content">

        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Demos
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <section id="section-demo" class="section overflow-hidden bg-gray">
            <div class="container">
                <header class="section-header">
                    <small>"Fornax Constellation"</small>
                    <h2>Projects</h2>
                    <hr>
                    <p class="lead">Companies are made up of people.
                        <br>And when those people have the right tools, they can turn their business dreams into reality.</p>
                </header>


                <div class="row gap-y">

                    <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                        <a class="card shadow-1 hover-shadow-7" href="https://dngo.io" target="_blank">
                            <img class="card-img-top" src="{{ asset('assets/img/preview/dngo.png') }}" alt="dNGO">
                            <div class="card-body">
                                <h6 class="mb-0">dNGO</h6>
                            </div>
                        </a>
                    </div>


                    <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                        <a class="card shadow-1 hover-shadow-7" href="https://rezervapp.com" target="_blank">
                            <img class="card-img-top" src="{{ asset('assets/img/preview/rezervapp.png') }}" alt="rezervapp">
                            <div class="card-body">
                                <h6 class="mb-0">rezervapp</h6>
                            </div>
                        </a>
                    </div>


                    {{--<div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">--}}
                        {{--<a class="card shadow-1 hover-shadow-7" href="demo/github.html" target="_blank">--}}
                            {{--<img class="card-img-top" src="assets/img/preview/demo-github.jpg" alt="Demo">--}}
                            {{--<div class="card-body">--}}
                                {{--<h6 class="mb-0">GitHub</h6>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}


                    {{--<div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">--}}
                        {{--<a class="card shadow-1 hover-shadow-7" href="demo/gmail.html" target="_blank">--}}
                            {{--<img class="card-img-top" src="assets/img/preview/demo-gmail.jpg" alt="Demo">--}}
                            {{--<div class="card-body">--}}
                                {{--<h6 class="mb-0">Gmail</h6>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}


                    {{--<div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                        <a class="card shadow-1 hover-shadow-7" href="demo/trello.html" target="_blank">
                            <img class="card-img-top" src="assets/img/preview/demo-trello.jpg" alt="Demo">
                            <div class="card-body">
                                <h6 class="mb-0">Trello</h6>
                            </div>
                        </a>
                    </div>--}}


                   {{-- <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <a class="card shadow-1 hover-shadow-7" href="demo/slack.html" target="_blank">
                            <img class="card-img-top" src="assets/img/preview/demo-slack.jpg" alt="Demo">
                            <div class="card-body">
                                <h6 class="mb-0">Slack</h6>
                            </div>
                        </a>
                    </div>--}}


                    {{--<div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                        <a class="card shadow-1 hover-shadow-7" href="demo/dropbox.html" target="_blank">
                            <img class="card-img-top" src="assets/img/preview/demo-dropbox.jpg" alt="Demo">
                            <div class="card-body">
                                <h6 class="mb-0">Dropbox</h6>
                            </div>
                        </a>
                    </div>--}}


                    {{--<div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                        <a class="card shadow-1 hover-shadow-7" href="demo/zendesk.html" target="_blank">
                            <img class="card-img-top" src="assets/img/preview/demo-zendesk.jpg" alt="Demo">
                            <div class="card-body">
                                <h6 class="mb-0">Zendesk</h6>
                            </div>
                        </a>
                    </div>


                    <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <a class="card shadow-1 hover-shadow-7" href="demo/paypal.html" target="_blank">
                            <img class="card-img-top" src="assets/img/preview/demo-paypal.jpg" alt="Demo">
                            <div class="card-body">
                                <h6 class="mb-0">PayPal</h6>
                            </div>
                        </a>
                    </div>--}}


                    {{--<div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                        <a class="card shadow-1 hover-shadow-7" href="demo/wordpress.html" target="_blank">
                            <img class="card-img-top" src="assets/img/preview/demo-wordpress.jpg" alt="Demo">
                            <div class="card-body">
                                <h6 class="mb-0">WordPress</h6>
                            </div>
                        </a>
                    </div>--}}


                    {{--<div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                        <a class="card shadow-1 hover-shadow-7" href="demo/themeforest.html" target="_blank">
                            <img class="card-img-top" src="assets/img/preview/demo-themeforest.jpg" alt="Demo">
                            <div class="card-body">
                                <h6 class="mb-0">ThemeForest</h6>
                            </div>
                        </a>
                    </div>--}}


                    {{--<div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <a class="card shadow-1 hover-shadow-7" href="demo/dribbble.html" target="_blank">
                            <img class="card-img-top" src="assets/img/preview/demo-dribbble.jpg" alt="Demo">
                            <div class="card-body">
                                <h6 class="mb-0">Dribbble</h6>
                            </div>
                        </a>
                    </div>--}}


                </div>

            </div>
        </section>


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Blocks & Elements
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <section id="section-values" class="section pb-10">
            <div class="container">
                <div class="row gap-y align-items-center">

                    <div class="col-lg-6">

                        <h2 class="mb-5">What is Fornax?</h2>
                        <p class="lead mb-0">Fornax has different usages but we love all of them! It's a Roman goddess, one of the 88 modern constellations made by three bright stars named Alpha, Beta and Nu Fornacis. One more thing, Fornax A (NGC 1316) is a galaxy, far far away.</p>

                        <br><hr class="w-30 ml-0"><br>

                        {{--<p class="mb-6 small">Explore or <a href="block/index.html">view all values</a></p>--}}
                        <div class="row gap-y" data-provide="slider" data-slides-to-show="3" data-slides-to-scroll="2" data-dots="true">

                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-picture lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">Transparency</h6>
                                </a>
                            </div>

                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-picture lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">Trust</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-genius lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">Collaboration</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-browser lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">Efficiency</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-basket lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">Autonomy</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-profile-male lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">Team</h6>
                                </a>
                            </div>

                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-pencil lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">Responsibility</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-video lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">Constant Change</h6>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5 ml-lg-auto d-none d-lg-block">
                        <img src="assets/img/preview/blocks-and-elements-space.png" alt="...">
                        {{--Photo by Luck Galindo from Pexels - Thank you Luck Galinda :) --}}
                    </div>

                </div>
            </div>
        </section>


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | CTA
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        {{--<section class="section text-center" style="background-image: linear-gradient(135deg, #f9f7ff 0%, #fff 50%, #f6f3ff 100%);">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <p><img src="assets/img/icon/rocket2.png" alt="join us"></p>
                        <br>
                        <h3 class="mb-6"><strong>Join over 2,400 companies that trust us.</strong></h3>
                        <p class="lead text-muted">Try it yourself for a while. Request a refund if you didn't find it useful and awesome as we advertised.</p>
                        <br>
                        <a class="btn btn-xl btn-round btn-info px-7" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=regular&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">Get a license — $19</a>
                    </div>
                </div>

            </div>
        </section>--}}


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | More Features
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
       {{-- <section class="section">
            <div class="container">
                <header class="section-header">
                    <h2>More Features</h2>
                    <hr>
                    <p class="lead">We are so excited and proud of our product. It's really easy to create a landing page for your awesome product.</p>
                </header>

                <div class="row gap-y text-center mt-7">

                    <div class="col-md-6 col-xl-4 mb-6 feature-1">
                        <p class="feature-icon"><i class="icon-browser" style="color: #50a1ff"></i></p>
                        <p class="lead-1">Works great in all modern browsers</p>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-6 feature-1">
                        <p class="feature-icon"><i class="icon-grid" style="color: #563d7c"></i></p>
                        <p class="lead-1">Based on Bootstrap framework 4</p>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-6 feature-1">
                        <p class="feature-icon"><i class="icon-paintbrush" style="color: #ffbe00"></i></p>
                        <p class="lead-1">Elements with multiple colors</p>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-6 feature-1">
                        <p class="feature-icon"><i class="icon-documents" style="color: #37b8af"></i></p>
                        <p class="lead-1">Very well code documentation</p>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-6 feature-1">
                        <p class="feature-icon"><i class="icon-gift" style="color: #eb4a62"></i></p>
                        <p class="lead-1">Variety of sample landing pages</p>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-6 feature-1">
                        <p class="feature-icon"><i class="icon-download" style="color: #46da60"></i></p>
                        <p class="lead-1">Free updates forever</p>
                    </div>

                </div>

            </div>
        </section>--}}


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Testimonials
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        {{--<section class="section bg-gray">
            <div class="container">
                <header class="section-header">
                    <small>Testimonials</small>
                    <h2>Happy Customers</h2>
                    <hr>
                    <p class="lead">Join thousands of satisfied customers using our template globally.</p>
                </header>


                <div data-provide="slider" data-dots="true" data-autoplay="false" data-slides-to-show="2">
                    <div class="p-5">
                        <div class="card border hover-shadow-6">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h6><strong>Design Quality</strong></h6>
                                    </div>

                                    <div class="col-auto">
                                        <div class="rating mb-3">
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                        </div>
                                    </div>
                                </div>

                                <p>Superb, comprehensive, professional. And most importantly, it makes me look good! Thank you.</p>
                                <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2784705" target="_blank"><em>coolrebel</em></a></p>

                            </div>
                        </div>
                    </div>


                    <div class="p-5">
                        <div class="card border hover-shadow-6">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h6><strong>Code Quality</strong></h6>
                                    </div>

                                    <div class="col-auto">
                                        <div class="rating mb-3">
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                        </div>
                                    </div>
                                </div>

                                <p>Really well organized code, responsive customer service. excellent value for money. Recommended 100%</p>
                                <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2739368" target="_blank"><em>yorickgroeven</em></a></p>

                            </div>
                        </div>
                    </div>


                    <div class="p-5">
                        <div class="card border hover-shadow-6">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h6><strong>Code Quality</strong></h6>
                                    </div>

                                    <div class="col-auto">
                                        <div class="rating mb-3">
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                        </div>
                                    </div>
                                </div>

                                <p>Excellent design and code quality. Infinite variations to be combined. Congrats for this job!</p>
                                <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2710320" target="_blank"><em>epino</em></a></p>

                            </div>
                        </div>
                    </div>


                    <div class="p-5">
                        <div class="card border hover-shadow-6">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h6><strong>Documentation Quality</strong></h6>
                                    </div>

                                    <div class="col-auto">
                                        <div class="rating mb-3">
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                        </div>
                                    </div>
                                </div>

                                <p>Really good template, easy to customize with a really good documentation. Many different example of pages.</p>
                                <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2686598" target="_blank"><em>pepsit36</em></a></p>

                            </div>
                        </div>
                    </div>


                    <div class="p-5">
                        <div class="card border hover-shadow-6">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h6><strong>Design Quality</strong></h6>
                                    </div>

                                    <div class="col-auto">
                                        <div class="rating mb-3">
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                        </div>
                                    </div>
                                </div>

                                <p>The theme and customer support are both top-tier! Thank you for saving us 30+ hours of work.</p>
                                <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2683519" target="_blank"><em>Its_Complete</em></a></p>

                            </div>
                        </div>
                    </div>


                    <div class="p-5">
                        <div class="card border hover-shadow-6">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h6><strong>Code Quality</strong></h6>
                                    </div>

                                    <div class="col-auto">
                                        <div class="rating mb-3">
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                        </div>
                                    </div>
                                </div>

                                <p>The BEST template we have bought on Themeforest in terms of design and code quality. Can't wait for their admin template!</p>
                                <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2653514" target="_blank"><em>KungWoo</em></a></p>

                            </div>
                        </div>
                    </div>


                    <div class="p-5">
                        <div class="card border hover-shadow-6">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h6><strong>Customer Support</strong></h6>
                                    </div>

                                    <div class="col-auto">
                                        <div class="rating mb-3">
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                            <label class="fa fa-star active"></label>
                                        </div>
                                    </div>
                                </div>

                                <p>TheThemeio is the best coder, which we ever worked in themeforest. Fast and on-demand email support. Good and quality work. Thank you for your help.</p>
                                <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2646286" target="_blank"><em>webserviz</em></a></p>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>--}}


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | CTA
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        {{--<section class="section text-white py-8">
            <canvas class="overlay opacity-95" data-granim="#667eea,#764ba2,#00cdac,#3cba92"></canvas>

            <div class="container">
                <header class="section-header">
                    <small><strong>Own it</strong></small>
                    <h2 class="display-3 fw-400">Get It <span class="mark-underline">Now</span></h2>
                    <hr>
                    <p class="lead-2">If you have made your decision to purchase this template, go ahead and press on the following button to get a license in less than a minute.</p>
                </header>

                <p class="text-center">
                    <a class="btn btn-xl btn-round btn-light w-250" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=regular&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">Purchase for <span class="pl-2">$19</span></a><br>
                    <small><a class="text-white opacity-80" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=extended&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">or purchase an Extended License</a></small>
                </p>
            </div>
        </section>--}}

    </main>
@endsection
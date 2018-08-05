@extends('layout.page')
@section('title', __('pages.title.Home'))
@section('content')
    <header class="header text-white h-fullscreen overflow-hidden" id="home-header">
        <canvas class="constellation" data-radius="0"></canvas>
        <div class="container position-static">
            <div class="row align-items-center h-100">
                <div class="col-lg-7">
                    <h1 class="display-4 fw-500">@lang('pages.home.type-intro') <span class="fw-400 pl-2" data-typing="@lang('pages.home.type')" data-type-speed="80"></span></h1>
                    <p class="lead mt-5 mb-7 mb-md-9 w-80">@lang('pages.home.home-intro')</p>
                    <a class="btn btn-xl btn-round btn-success w-220 mr-3 px-6" href="#section-demo">@lang('pages.home.Explore Our Products')</a>
                    <a class="btn btn-xl btn-round btn-outline-light w-220 px-6 d-none d-md-inline-block" href="#section-values">@lang('pages.home.Explore Our Values')</a>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                </div>
            </div>
        </div>
    </header>
    <main class="main-content">
        <section id="section-demo" class="section overflow-hidden bg-gray">
            <div class="container">
                <header class="section-header">
                    <small>"@lang('pages.home.Fornax Constellation')"</small>
                    <h2>@lang('pages.title.Projects')</h2>
                    <hr>
                    <p class="lead">@lang('pages.home.lead')</p>
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

                </div>

            </div>
        </section>
        <section id="section-values" class="section pb-10">
            <div class="container">
                <div class="row gap-y align-items-center">

                    <div class="col-lg-6">

                        <h2 class="mb-5">@lang('pages.home.What is Fornax')</h2>
                        <p class="lead mb-0">@lang('pages.home.Fornax Description')</p>

                        <br><hr class="w-30 ml-0"><br>
                        <div class="row gap-y" data-provide="slider" data-slides-to-show="3" data-slides-to-scroll="2" data-dots="true">

                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-picture lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">@lang('pages.home.values.1')</h6>
                                </a>
                            </div>

                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-picture lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">@lang('pages.home.values.2')</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-genius lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">@lang('pages.home.values.3')</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-browser lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">@lang('pages.home.values.4')</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-basket lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">@lang('pages.home.values.5')</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-profile-male lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">@lang('pages.home.values.6')</h6>
                                </a>
                            </div>

                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-pencil lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">@lang('pages.home.values.7')</h6>
                                </a>
                            </div>


                            <div class="col">
                                <a class="card card-body border hover-shadow-6 text-center py-6">
                                    <p><i class="icon-video lead-6 text-muted"></i></p>
                                    <h6 class="mb-0">@lang('pages.home.values.8')</h6>
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5 ml-lg-auto d-none d-lg-block">
                        <img src="{{ asset('assets/img/preview/blocks-and-elements-space.png') }}" alt="Photo by Luck Galindo from Pexels - Thank you Luck Galinda :)">
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
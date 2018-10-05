@extends('layout.page')
@section('title', __('pages.title.Home'))
@section('content')
    <header class="header text-white h-fullscreen overflow-hidden" id="home-header">
        <canvas class="constellation" data-radius="0"></canvas>
        <div class="container position-static">
            <div class="row align-items-center h-100">
                <div class="col-lg-7">
                    <h1 class="display-4 fw-500 d-none d-sm-block">@lang('pages.home.type-intro') <span class="fw-400 pl-2" data-typing="@lang('pages.home.type')" data-type-speed="80"></span></h1>
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
                    <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <a class="card shadow-1 hover-shadow-7" href="https://kali.fornaxstudio.com" target="_blank">
                            <img class="card-img-top" src="{{ asset('assets/img/preview/kali-web.png') }}" alt="kali">
                            <div class="card-body">
                                <h6 class="mb-0">kali</h6>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section>
        <section class="section text-white p-0" id="fornax">
            <div class="container-wide">
                <div class="row no-gutters">

                    <div class="col-md-4 bg-img" id="home-fornax-section"></div>

                    <div class="col-md-8 p-6 p-md-8">
                        <h4>@lang('pages.home.What is Fornax')</h4>
                        <p class="lead">@lang('pages.home.Fornax Description')</p>
                    </div>

                </div>
            </div>
        </section>
        <section class="section" id="section-values">
            <div class="container">
                <h2 class="text-center">@lang('pages.home.Our Values')</h2>
                <div class="row gap-y align-items-center py-7">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/img/vector/feather-alt-solid.svg') }}" width="200" alt="@lang('pages.home.values.1')">
                    </div>
                    <div class="col-md-5 ml-auto text-center text-md-left">
                        <p class="lead-9 fw-900 lh-1 opacity-10">01</p>
                        <h3>@lang('pages.home.values.1')</h3>
                        <p>@lang('pages.home.values-desc.1')</p>
                    </div>
                </div>


                <div class="row gap-y align-items-center py-7">
                    <div class="col-md-5 mr-auto text-center text-md-left">
                        <p class="lead-9 fw-900 lh-1 opacity-10">02</p>
                        <h3>@lang('pages.home.values.2')</h3>
                        <p>@lang('pages.home.values-desc.2')</p>
                    </div>

                    <div class="col-md-6 text-center order-first order-md-last">
                        <img src="{{ asset('assets/img/vector/shield-alt-solid.svg') }}" width="200" alt="@lang('pages.home.values.2')">
                    </div>
                </div>


                <div class="row gap-y align-items-center py-7">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/img/vector/user-plus-solid.svg') }}" width="200" alt="@lang('pages.home.values.3')">
                    </div>

                    <div class="col-md-5 ml-auto text-center text-md-left">
                        <p class="lead-9 fw-900 lh-1 opacity-10">03</p>
                        <h3>@lang('pages.home.values.3')</h3>
                        <p>@lang('pages.home.values-desc.3')</p>
                    </div>
                </div>


                <div class="row gap-y align-items-center py-7">
                    <div class="col-md-5 text-center text-md-left">
                        <p class="lead-9 fw-900 lh-1 opacity-10">04</p>
                        <h3>@lang('pages.home.values.4')</h3>
                        <p>@lang('pages.home.values-desc.4')</p>
                    </div>

                    <div class="col-md-6 ml-auto text-center order-first order-md-last">
                        <img src="{{ asset('assets/img/vector/superscript-solid.svg') }}" width="200" alt="@lang('pages.home.values.4')">
                    </div>
                </div>

                <div class="row gap-y align-items-center py-7">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/img/vector/sync-alt-solid.svg') }}" width="200" alt="@lang('pages.home.values.5')">
                    </div>
                    <div class="col-md-5 ml-auto text-center text-md-left">
                        <p class="lead-9 fw-900 lh-1 opacity-10">05</p>
                        <h3>@lang('pages.home.values.5')</h3>
                        <p>@lang('pages.home.values-desc.5')</p>
                    </div>
                </div>


                <div class="row gap-y align-items-center py-7">
                    <div class="col-md-5 mr-auto text-center text-md-left">
                        <p class="lead-9 fw-900 lh-1 opacity-10">06</p>
                        <h3>@lang('pages.home.values.6')</h3>
                        <p>@lang('pages.home.values-desc.6')</p>
                    </div>

                    <div class="col-md-6 text-center order-first order-md-last">
                        <img src="{{ asset('assets/img/vector/users-solid.svg') }}" width="200" alt="@lang('pages.home.values.6')">
                    </div>
                </div>


                <div class="row gap-y align-items-center py-7">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/img/vector/calendar-check-regular.svg') }}" width="200" alt="@lang('pages.home.values.7')">
                    </div>

                    <div class="col-md-5 ml-auto text-center text-md-left">
                        <p class="lead-9 fw-900 lh-1 opacity-10">07</p>
                        <h3>@lang('pages.home.values.7')</h3>
                        <p>@lang('pages.home.values-desc.7')</p>
                    </div>
                </div>


                <div class="row gap-y align-items-center py-7">
                    <div class="col-md-5 text-center text-md-left">
                        <p class="lead-9 fw-900 lh-1 opacity-10">08</p>
                        <h3>@lang('pages.home.values.8')</h3>
                        <p>@lang('pages.home.values-desc.8')</p>
                    </div>

                    <div class="col-md-6 ml-auto text-center order-first order-md-last">
                        <img src="{{ asset('assets/img/vector/crosshairs-solid.svg') }}" width="200" alt="@lang('pages.home.values.8')">
                    </div>
                </div>


            </div>
        </section>
    </main>
@endsection
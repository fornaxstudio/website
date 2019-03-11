@extends('layout.page')
@section('title', __('pages.title.About'))
@section('content')
    <!-- Header -->
    <header class="header">
        <div class="container text-center">
            <small>@lang('pages.title.About')</small>
            <h1 class="display-4 mb-7 d-none"></h1>
        </div>
    </header><!-- /.header -->

    <main class="main-content">
        <div class="container">
            <section class="section" id="section-values">
                <div class="container">
                    <h2 class="text-center">@lang('pages.about.Our Values')</h2>
                    <div class="row gap-y align-items-center py-7">
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('assets/img/vector/feather-alt-solid.svg') }}" width="200" alt="@lang('pages.about.values.1')">
                        </div>
                        <div class="col-md-5 ml-auto text-center text-md-left">
                            <p class="lead-9 fw-900 lh-1 opacity-10">01</p>
                            <h3>@lang('pages.about.values.1')</h3>
                            <p>@lang('pages.about.values-desc.1')</p>
                        </div>
                    </div>


                    <div class="row gap-y align-items-center py-7">
                        <div class="col-md-5 mr-auto text-center text-md-left">
                            <p class="lead-9 fw-900 lh-1 opacity-10">02</p>
                            <h3>@lang('pages.about.values.2')</h3>
                            <p>@lang('pages.about.values-desc.2')</p>
                        </div>

                        <div class="col-md-6 text-center order-first order-md-last">
                            <img src="{{ asset('assets/img/vector/shield-alt-solid.svg') }}" width="200" alt="@lang('pages.about.values.2')">
                        </div>
                    </div>


                    <div class="row gap-y align-items-center py-7">
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('assets/img/vector/user-plus-solid.svg') }}" width="200" alt="@lang('pages.about.values.3')">
                        </div>

                        <div class="col-md-5 ml-auto text-center text-md-left">
                            <p class="lead-9 fw-900 lh-1 opacity-10">03</p>
                            <h3>@lang('pages.about.values.3')</h3>
                            <p>@lang('pages.about.values-desc.3')</p>
                        </div>
                    </div>


                    <div class="row gap-y align-items-center py-7">
                        <div class="col-md-5 text-center text-md-left">
                            <p class="lead-9 fw-900 lh-1 opacity-10">04</p>
                            <h3>@lang('pages.about.values.4')</h3>
                            <p>@lang('pages.about.values-desc.4')</p>
                        </div>

                        <div class="col-md-6 ml-auto text-center order-first order-md-last">
                            <img src="{{ asset('assets/img/vector/superscript-solid.svg') }}" width="200" alt="@lang('pages.about.values.4')">
                        </div>
                    </div>

                    <div class="row gap-y align-items-center py-7">
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('assets/img/vector/sync-alt-solid.svg') }}" width="200" alt="@lang('pages.about.values.5')">
                        </div>
                        <div class="col-md-5 ml-auto text-center text-md-left">
                            <p class="lead-9 fw-900 lh-1 opacity-10">05</p>
                            <h3>@lang('pages.about.values.5')</h3>
                            <p>@lang('pages.about.values-desc.5')</p>
                        </div>
                    </div>


                    <div class="row gap-y align-items-center py-7">
                        <div class="col-md-5 mr-auto text-center text-md-left">
                            <p class="lead-9 fw-900 lh-1 opacity-10">06</p>
                            <h3>@lang('pages.about.values.6')</h3>
                            <p>@lang('pages.about.values-desc.6')</p>
                        </div>

                        <div class="col-md-6 text-center order-first order-md-last">
                            <img src="{{ asset('assets/img/vector/users-solid.svg') }}" width="200" alt="@lang('pages.about.values.6')">
                        </div>
                    </div>


                    <div class="row gap-y align-items-center py-7">
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('assets/img/vector/calendar-check-regular.svg') }}" width="200" alt="@lang('pages.about.values.7')">
                        </div>

                        <div class="col-md-5 ml-auto text-center text-md-left">
                            <p class="lead-9 fw-900 lh-1 opacity-10">07</p>
                            <h3>@lang('pages.about.values.7')</h3>
                            <p>@lang('pages.about.values-desc.7')</p>
                        </div>
                    </div>


                    <div class="row gap-y align-items-center py-7">
                        <div class="col-md-5 text-center text-md-left">
                            <p class="lead-9 fw-900 lh-1 opacity-10">08</p>
                            <h3>@lang('pages.about.values.8')</h3>
                            <p>@lang('pages.about.values-desc.8')</p>
                        </div>

                        <div class="col-md-6 ml-auto text-center order-first order-md-last">
                            <img src="{{ asset('assets/img/vector/crosshairs-solid.svg') }}" width="200" alt="@lang('pages.about.values.8')">
                        </div>
                    </div>


                </div>
            </section>
        </div>
    </main>
@endsection
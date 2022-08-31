    @extends('layout.page')
@section('title', __('pages.title.Projects'))
@section('content')
    <!-- Header -->
    <header class="header">
        <div class="container text-center">
            <small>@lang('pages.title.Projects')</small>
            <h1 class="display-4 mb-7">@lang('pages.projects.There is always something more to learn')</h1>
        </div>
    </header><!-- /.header -->

    <main class="main-content">
        <div class="container">
            <div class="row gap-y align-items-center">
                <div class="col-md-6 ml-auto">
                    <h4>
                        <a href="{{ url('https://dngo.fornaxstudio.com') }}">
                            @lang('pages.projects.Project1')
                        </a>
                    </h4>
                    <p>@lang('pages.projects.Project1 Text')</p>
                </div>

                <div class="col-md-5 order-md-first">
                    <a href="{{ url('https://dngo.fornaxstudio.com') }}">
                        <img class="rounded shadow-2" src="{{ asset('assets/img/preview/dngo.png')}}" alt="@lang('pages.projects.Project1')">
                    </a>
                </div>
            </div>

            <hr class="my-8">

            <div class="row gap-y align-items-center">
                <div class="col-md-6 mr-auto">
                    <h4>
                        <a href="{{ url('https://vision.fornaxstudio.com') }}">
                            @lang('pages.projects.Project4')
                        </a>
                    </h4>
                    <p>@lang('pages.projects.Project4 Text')</p>
                </div>

                <div class="col-md-5">
                    <a href="{{ url('https://vision.fornaxstudio.com') }}">
                        <img class="rounded shadow-2" src="{{ asset('assets/img/preview/vision.png')}}" alt="@lang('pages.projects.Project4')">
                    </a>
                </div>
            </div>

            <hr class="my-8">

            <div class="row gap-y align-items-center">
                <div class="col-md-6 ml-auto">
                    <h4>
                        <a href="{{ url('https://rezervapp.com') }}">
                            @lang('pages.projects.Project2')
                        </a>
                    </h4>
                    <p>@lang('pages.projects.Project2 Text')</p>
                </div>

                <div class="col-md-5 order-md-first">
                    <a href="{{ url('https://rezervapp.com') }}">
                        <img class="rounded shadow-2" src="{{ asset('assets/img/preview/rezervapp.png')}}" alt="@lang('pages.projects.Project2')">
                    </a>
                </div>
            </div>

            <hr class="my-8">


            <div class="row gap-y align-items-center">
                <div class="col-md-6 mr-auto">
                    <h4>
                        <a href="{{ url('https://kali.fornaxstudio.com') }}">
                            @lang('pages.projects.Project3')
                        </a>
                    </h4>
                    <p>@lang('pages.projects.Project3 Text')</p>
                </div>

                <div class="col-md-5">
                    <a href="{{ url('https://kali.fornaxstudio.com') }}">
                        <img class="rounded shadow-2" src="{{ asset('assets/img/preview/kali-web.png') }}" alt="@lang('pages.projects.Project3')">
                    </a>
                </div>
            </div>


        </div>
    </main>
@endsection

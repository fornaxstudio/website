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
                    <h4>@lang('pages.projects.Project1')</h4>
                    <p>@lang('pages.projects.Project1 Text')</p>
                </div>

                <div class="col-md-5 order-md-first">
                    <img class="rounded shadow-2" src="{{ asset('assets/img/preview/dngo.png') }}" alt="DNGO">
                </div>
            </div>


            <hr class="my-8">


            <div class="row gap-y align-items-center">
                <div class="col-md-6 mr-auto">
                    <h4>@lang('pages.projects.Project2')</h4>
                    <p>@lang('pages.projects.Project2 Text')</p>
                </div>

                <div class="col-md-5">
                    <img class="rounded shadow-2" src="{{ asset('assets/img/preview/rezervapp.png')}}" alt="Rezervapp">
                </div>
            </div>


            <hr class="my-8">


            {{--<div class="row gap-y align-items-center">
                <div class="col-md-6 ml-auto">
                    <h4>@lang('pages.projects.Project3')</h4>
                    <p>@lang('pages.projects.Project3 Text')</p>
                </div>

                <div class="col-md-5 order-md-first">
                    <img class="rounded shadow-2" src="http://via.placeholder.com/600x400" alt="...">
                </div>
            </div>--}}


        </div>
    </main>
@endsection
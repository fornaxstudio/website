@extends('layout.page')
@section('title', __('pages.title.Projects'))
@section('content')
    <!-- Header -->
    <header class="header pb-7 pt-4 mt-0" id="project-header">
        {{--<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="fw-200 mb-6">@lang('pages.title.Projects')</h1>
                    <p class="lead-2">@lang('pages.page-line.Projects')</p>
                </div>
            </div>
        </div>--}}
    </header><!-- /.header -->

    <main class="main-content">
        <div class="container">
            <header class="section-header pt-6">
                <small>@lang('pages.title.Projects')</small>
                <h2>@lang('pages.projects.There is always something more to learn')</h2>
                <hr>
                <p class="lead">@lang('pages.projects.Lead Text')</p>
            </header>


            <div class="row gap-y align-items-center">
                <div class="col-md-6 ml-auto">
                    <h4>@lang('pages.projects.Project1')</h4>
                    <p>@lang('pages.projects.Project1 Text')</p>
                </div>

                <div class="col-md-5 order-md-first">
                    <img class="rounded shadow-2" src="{{ asset('assets/img/preview/dngo.png') }}" alt="...">
                </div>
            </div>


            <hr class="my-8">


            <div class="row gap-y align-items-center">
                <div class="col-md-6 mr-auto">
                    <h4>@lang('pages.projects.Project2')</h4>
                    <p>@lang('pages.projects.Project2 Text')</p>
                </div>

                <div class="col-md-5">
                    <img class="rounded shadow-2" src="{{ asset('assets/img/preview/rezervapp.png')}}" alt="...">
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
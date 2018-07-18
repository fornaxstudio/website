@extends('layout.layout')
@section('title', 500)
@section('page')
    <!-- Header -->
    <header class="header text-white h-fullscreen py-0" style="background-image: url({{ asset('assets/backgrounds/server-error.jpg') }});" data-overlay="7">
        <div class="container text-center">

            <div class="row h-100 align-items-center">
                <div class="col-lg-8 mx-auto">

                    <h1 class="display-1 text-uppercase ls-3 fw-500">@lang('errors.500.title')</h1>
                    <br><br>
                    <p class="lead">@lang('errors.500.message')</p>

                </div>
            </div>

        </div>
    </header><!-- /.header -->
@endsection
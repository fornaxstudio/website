@extends('layout.layout')
@section('title', __('errors.404.title'))
@push('body-class', 'layout-centered bg-gray')
@section('page')
    <!-- Main Content -->
    <main class="main-content text-center pb-lg-8">
        <div class="container">
            <h1 class="display-1 text-muted mb-7">@lang('errors.404.title')</h1>
            <p class="lead">@lang('errors.404.message')</p>
            <br>
            <button class="btn btn-secondary w-150 mr-2" type="button" onclick="window.history.back();">@lang('errors.404.button1')</button>
            <a class="btn btn-secondary w-150" href="{{ url('/') }}">@lang('errors.404.button2')</a>
        </div>
    </main><!-- /.main-content -->
@endsection
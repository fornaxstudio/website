@extends('layout.page')
@section('title', __('pages.title.Contact'))
@section('content')
    <!-- Header -->
    <header class="header pb-9 pt-10 mb-9" id="contact-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="fw-200 mb-6">@lang('pages.title.Contact')</h1>
                    <p class="lead-2">@lang('pages.page-line.Contact')</p>
                </div>
            </div>
        </div>
    </header><!-- /.header -->
    <main class="main-content">
        <div class="container">
            <header class="section-header">
                <small>@lang('pages.title.Contact')</small>
                <h2 class="display-4">@lang('pages.contact.Lets Talk')</h2>
                <hr>
                <p class="lead">@lang('pages.contact.Drop us a line')</p>
            </header>

            <form class="form-row input-border" action="{{ action('ContactController@mailToAdmin') }}" method="POST">
                {{ csrf_field() }}
                <div class="col-12">
                    @if(session('message'))
                        <div class='alert alert-success'>
                            {{ session('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ol>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ol>
                        </div>
                    @endif
                </div>

                <div class="form-group col-sm-6 col-xl-3">
                    <input class="form-control form-control-lg" type="text" name="name" value="{{ old('name') }}" placeholder="@lang('pages.contact.Name')*">
                </div>

                <div class="form-group col-sm-6 col-xl-3">
                    <input class="form-control form-control-lg" type="email" name="email" value="{{ old('email') }}" placeholder="@lang('pages.contact.Email')*">
                </div>

                <div class="form-group col-sm-6 col-xl-3">
                    <input class="form-control form-control-lg" type="text" name="subject" value="{{ old('subject') }}" placeholder="@lang('pages.contact.Subject')*">
                </div>

                <div class="form-group col-sm-6 col-xl-3">
                    <input class="form-control form-control-lg" type="text" name="company" value="{{ old('company') }}" placeholder="@lang('pages.contact.Company')">
                </div>

                <div class="form-group col-12">
                    <textarea class="form-control form-control-lg" rows="4" placeholder="@lang('pages.contact.Message')*" name="message">{{ old('message') }}</textarea>
                </div>

                <div class="col-12">
                    {!! NoCaptcha::display() !!}
                    <br>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-xl btn-block btn-primary" type="submit">@lang('pages.contact.Submit Inquiry')</button>
                </div>
            </form>

        </div>
    </main>
@endsection
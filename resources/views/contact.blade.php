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
                <small>Contact</small>
                <h2 class="display-4">Let's Talk</h2>
                <hr>
                <p class="lead">They original on mountains, drew the support time. The of to graduate into to is the to she.</p>
            </header>

            <form class="form-row input-border" action="{{ action('ContactController@mailToAdmin') }}" method="POST" data-form="mailer">
                {{ csrf_field() }}
                <div class="col-12">
                    <div class="alert alert-success d-on-success">We received your message and will contact you back soon.</div>
                </div>


                <div class="form-group col-sm-6 col-xl-3">
                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Name">
                </div>

                <div class="form-group col-sm-6 col-xl-3">
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Email">
                </div>

                <div class="form-group col-sm-6 col-xl-3">
                    <input class="form-control form-control-lg" type="text" name="subject" placeholder="Subject">
                </div>

                <div class="form-group col-sm-6 col-xl-3">
                    <input class="form-control form-control-lg" type="text" name="company" placeholder="Company Name">
                </div>

                <div class="form-group col-12">
                    <textarea class="form-control form-control-lg" rows="4" placeholder="Message" name="message"></textarea>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-xl btn-block btn-primary" type="submit">Submit Inquiry</button>
                </div>
            </form>

        </div>
    </main>
@endsection
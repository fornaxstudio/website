<section id="subscribe" class="section text-white">
    <div class="container text-center">

        <p class="small-4 text-uppercase ls-2 fw-600 opacity-70">@lang('pages.footer.subscribe-mini')</p>
        <h2>@lang('pages.footer.subscribe-main')</h2>

        <div class="row mt-7">
            <form class="col-md-8 col-xl-5 input-glass mx-auto" action="" method="post">
                {{ csrf_field() }}
                <div class="input-group input-group-lg1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="@lang('pages.footer.subscribe-email')">
                    <span class="input-group-append">
                  <button class="btn btn-light">@lang('pages.footer.subscribe-button')</button>
                </span>
                </div>
            </form>
        </div>

    </div>
</section>
<!-- Footer -->
<footer class="footer m-6">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">

                <div class="nav nav-bold nav-uppercase nav-center">
                    <a class="nav-link" href="{{ url('/') }}">@lang('pages.menu.Home')</a>
                    <a class="nav-link" href="{{ url('/projects') }}">@lang('pages.menu.Projects')</a>
                    <a class="nav-link" href="{{ url('/contact') }}">@lang('pages.menu.Contact')</a>
                </div>

                <hr>

                <p class="text-center">@lang('pages.footer.footer-slogan')</p>

            </div>
        </div>
    </div>
</footer><!-- /.footer -->
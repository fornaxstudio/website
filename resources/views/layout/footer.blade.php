<section id="subscribe" class="section text-white mt-6">
    <div class="container text-center">

        <p class="small-4 text-uppercase ls-2 fw-600 opacity-70">@lang('pages.layout.subscribe.mini')</p>
        <h2>@lang('pages.layout.subscribe.main')</h2>

        <div class="row mt-7">
            <form action="{{ url('https://fornaxstudio.us19.list-manage.com/subscribe/post?u=034416cddc34058acb37b7993&amp;id=6eeccd4781') }}"
                  method="post"
                  id="mc-embedded-subscribe-form"
                  name="mc-embedded-subscribe-form"
                  class="col-md-8 col-xl-5 input-glass mx-auto validate"
                  target="_blank" novalidate>
                <div class="input-group input-group-lg1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="text" name="EMAIL" id="mce-EMAIL" class="form-control" placeholder="@lang('pages.layout.subscribe.email')">
                    <span class="input-group-append">
                        <button class="btn btn-light">@lang('pages.layout.subscribe.button')</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="footer m-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="nav nav-bold nav-uppercase nav-center">
                    <a class="nav-link" href="{{ url('/') }}">@lang('pages.menu.Home')</a>
                    <a class="nav-link" href="{{ url('/projects') }}">@lang('pages.menu.Projects')</a>
                    <a class="nav-link" href="{{ url('/contact') }}">@lang('pages.menu.Contact')</a>
                </div>

                <hr>
                <p class="text-center">@lang('pages.layout.slogan')</p>

            </div>
        </div>
    </div>
</footer><!-- /.footer -->
<div id="popup-cookie-3" class="popup text-white bg-dark col-10 py-4" data-position="bottom-center" data-animation="slide-up">
    <div class="row gap-y align-items-center">
        <div class="col-md">
            @lang('pages.footer.cookie-message')
        </div>
        <div class="col-md-auto">
            <button class="btn btn-sm btn-outline-light" data-dismiss="popup">@lang('pages.footer.cookie-button')</button>
        </div>
    </div>
</div>
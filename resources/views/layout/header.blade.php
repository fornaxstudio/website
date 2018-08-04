<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo-dark" src="{{ asset('assets/img/fornax-studio-logo.png') }}" width="170" alt="{{ config('app.name') }} Logo">
                <img class="logo-light" src="{{ asset('assets/img/fornax-studio-logo-negative.png') }}" width="170" alt="{{ config('app.name') }} Logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>

            <ul class="nav nav-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">@lang('pages.menu.Home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/projects') }}">@lang('pages.menu.Projects')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">@lang('pages.menu.Contact')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="{{ asset('assets/img/language.png') }}" width="25" alt="English, Türkçe"> <span class="arrow"></span></a>
                    <nav class="nav">
                        <a class="nav-link" href="{{ url('language/?locale=en') }}">English</a>
                        <a class="nav-link" href="{{ url('language/?locale=tr') }}">Türkçe</a>
                    </nav>
                </li>
            </ul>
        </section>
    </div>
</nav><!-- /.navbar -->
<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="@lang('general.website.keywords')">
    <meta name="description" content="@lang('general.website.description')">
    <meta name="author" content="@lang('general.website.author')">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('assets/compiled.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{ asset('assets/img/og-img.jpg') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta name="twitter:card" content="summary_large_image">
</head>

<body class="@stack('body-class')">
@yield('page')
<script src="{{ asset('assets/compiled.js') }}"></script>
@stack('scripts')
<script>@stack('code')</script>
</body>
</html>
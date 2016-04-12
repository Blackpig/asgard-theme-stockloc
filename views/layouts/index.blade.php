<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    {!! Theme::style('css/app.css') !!}
    @include('partials.featured_image_css')
</head>
<body class="index">

@include('partials.navigation')

@yield('content')

@include('partials.footer')

{!! Theme::script('js/app.js') !!}
{!! Theme::script('js/parallax.js') !!}
@yield('scripts')

<?php if (Setting::has('core::google-analytics')): ?>
    {!! Setting::get('core::google-analytics') !!}
<?php endif; ?>
</body>
</html>

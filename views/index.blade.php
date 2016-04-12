@extends('layouts.index')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')

<section id="hero" class="container-fluid featured-image" data-speed="4" data-type="background">
    <div class="row">
        <div class="col-md-12">
            <div class="hero-text">
                <h1>Stockloc</h1>
                <h2>{{ trans('stockloc.home.strapline') }}</h2>
            </div>
        </div>
    </div>
</section>

<section id="feature_bullets">
    <div class="container">
    <div class="row row-centered">
        <div class="col-md-12">
            <ul>
                <li>{{ trans('stockloc.features.security') }}</li>
                <li>{{ trans('stockloc.features.reliability') }}</li>
                <li>{{ trans('stockloc.features.flexibility') }}</li>
                <li>{{ trans('stockloc.features.accessibility') }}</li>
                <li>{{ trans('stockloc.features.affordability') }}</li>
            </ul>
        </div>
        </div>
    </div>
</section>

<section id="our_services">
    <h1>{{ trans('stockloc.home.our_services') }}</h1>
    <div class="container">

        <div class="row">
            <div class="row-height">
              <div class="col-md-4 col-md-height">
                <div class="inside inside-full-height box-white">
                  <div class="content">
                        <img />
                        <h2>{{ trans('stockloc.home.commercial') }}</h2>
                        <p>{{ $page->extend()->commercial }}</p>
                        <div class="next_arrow">
                            <a href="{{ URL::to( locale() . '/' .strtolower(trans('stockloc.home.commercial')) ) }}"></a>
                        </div>
                    </div>
                </div>
              </div>

            <div class="col-md-4 col-md-height">
                <div class="inside inside-full-height box-white">
                  <div class="content">
                        <img />
                        <h2>{{ trans('stockloc.home.self_storage') }}</h2>
                        <p>{{ $page->extend()->self_storage }}</p>
                        <div class="next_arrow">
                            <a href="{{ URL::to( locale() . '/' .strtolower(trans('stockloc.home.self_storage')) ) }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-md-height">
                <div class="inside inside-full-height box-white">
                  <div class="content">
                        <img />
                        <h2>{{ trans('stockloc.home.packaging') }}</h2>
                        <p>{{ $page->extend()->packing }}</p>
                        <div class="next_arrow">
                            <a href="{{ URL::to( locale() . '/' .strtolower(trans('stockloc.home.packaging')) ) }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.feature_ticker')

<section id="storage_calculator">
    <div class="row row-centered">
        <div class="col-md-12">
            <h1>{{ trans('stockloc.home.storage_calculator') }}</h1>
            <p class="lead">{{ trans('stockloc.home.storage_calculator_line_1') }}</p>
            <p class="lead">{{ trans('stockloc.home.storage_calculator_line_2') }}</p>
            <p class="lead">{{ trans('stockloc.home.storage_calculator_line_3') }}</p>
            <a href="" class="btn btn-warning btn-large">{{ trans('stockloc.button.get_started') }}</a>
        </div>
    </div>
</section>

<section id="testimonials" data-speed="4" data-type="background">
    <div class="row">
        <div class="col-md-12">
            <div class="logo"></div>
            <h1>{{ trans('stockloc.home.testimonials') }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @foreach ($testimonials as $testimonial)
            <div class="testimonial">
                <blockquote>
                    {!! $testimonial->testimonial !!}
                </blockquote>
            </div>
            <div class="attribution">{{ $testimonial->present()->attribution }}</div>
        @endforeach
    </div>
</section>


@stop

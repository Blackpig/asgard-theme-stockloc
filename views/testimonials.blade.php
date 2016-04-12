@extends('layouts.master')

@section('title')
    Testimonials | @parent
@stop
@section('meta')
    <meta name="title" content="Testimonials" />
    <meta name="description" content="Testimonials" />
@stop

@section('content')
    <div class="row">
        <h1>Testimonials</h1>
        @foreach($testimonials as $testimonial)

            {!! $testimonial->testimonial !!}
            <br>
            {!! $testimonial->present()->attribution !!}

        @endforeach
    </div>
@stop

@extends('layouts.master')

@section('title')
    FAQs | @parent
@stop
@section('meta')
    <meta name="title" content="Testimonials" />
    <meta name="description" content="Testimonials" />
@stop

@section('content')
    <div class="row">
        <h1>Testimonials</h1>
        @foreach($faqs as $faq)

            <h2>{!! $faq->question !!}</h2>
            <br>
            {!! $faq->answer !!}

        @endforeach
    </div>
@stop

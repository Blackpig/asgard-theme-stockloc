@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')

    @if ($page->files()->first())
        <div class="container-fluid featured-image" data-speed="4" data-type="background"></div>
        <div class="content with-image">
    @else
        <div class="content">
    @endif

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1>{{ $page->title }}</h1>
                            {!! $page->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop


    <style>
        .featured-image{
            @if ($page->files()->first())
                background-image: url({{$page->files()->first()->path }});
            @else
                background-image: none;
            @endif
        }
    </style>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="fixed-switcher">
            <div class="locale-switcher pull-right">
                @if (locale() == 'en')
                    <a href="/fr">{!! Theme::image('images/french.png') !!}</a>
                @else
                    <a href="/en">{!! Theme::image('images/english.png') !!}</a>
                @endif
            </div>
            <div class="header-phone pull-right">
                <a href="tel:0562311989"><i class="fa fa-phone"></i>05 62 31 19 89</a>
            </div>
        </div>
        <div class="navbar-header clear-fix">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">{!! Theme::image('images/stockloc.gif') !!}</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            {!! Menu::render('top_bar')  !!}
        </div>
    </div>
</nav>

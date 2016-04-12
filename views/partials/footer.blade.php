<footer>
    <div class="container-fluid">
        <div class="row contact">
            <div class="col-md-5 col-md-offset-1">
                <ul>
                    <li>
                        <p><a href="tel:{{ trans('stockloc.contact.phone') }}" class="icon"><i class="fa fa-phone"></i></a></p>
                        <p><a href="tel:{{ trans('stockloc.contact.phone') }}">{{ trans('stockloc.contact.phone') }}</a></p>
                    </li>
                </ul>
            </div>
            <div class="col-md-5">
                {!! Menu::render('footer-contact', 'Modules\Stockloc\Presenters\Menu\FooterContactPresenter') !!}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="row links">
                <div class="col-md-4">
                    {!! Menu::render('top_bar', 'Modules\Stockloc\Presenters\Menu\FooterLinksPresenter') !!}
                </div>
                <div class="col-md-4">
                    {!! Menu::render('footer-links', 'Modules\Stockloc\Presenters\Menu\FooterLinksPresenter') !!}
                </div>
                <div class="col-md-4">
                    <ul>
                        @if (locale() == 'en')
                            <li><a href="/fr">francais</a></li>
                        @else
                            <li><a href="/en">English</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="row blackpig">
            <div class="col-md-12">

            </div>
        </div>
    <div>
</footer>

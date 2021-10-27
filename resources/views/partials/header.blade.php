<header class="header">
        <div class="header__top">
            <div class="container">
                <span>DC POWER<sup>SM</sup> VISA®</span>
            <span>ADDITIONAL DC SITES</span>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="header__logo">
                    <a href="/"><img src="{{ asset('images/dc-logo.png') }}" alt="logo DC"></a>
                </div>
                <div class="header__menu">
                    <ul class="header__links">
                        @foreach ($links['headerLinks'] as $key => $link)
                            <a href="{{$link}}">{{$key}}</a>
                        @endforeach
                    </ul>
                </div>
                <div class="header__search">
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>
</header>
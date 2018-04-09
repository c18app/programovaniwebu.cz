<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#xnavbarAdminTop"--}}
                    {{--aria-expanded="false">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <div class="cursor-box">
                    <img src="{{ url('css/img/arrow.png') }}" class="arrow">
                    <img src="{{ url('css/img/underscore.png') }}" class="underscore">
                </div>
                <span class="title">{{ config('cmsx.app.name') }}</span>
            </a>
        </div>

        <div class="xcollapse xnavbar-collapse" id="xnavbarAdminTop">
            {{--<ul class="nav navbar-nav">--}}
            {{--<li class="{{ Request()->route()->named('pages.index') ? ' active' : '' }}">--}}
            {{--<a href="#">topmenu</a>--}}
            {{--</li>--}}
            {{--</ul>--}}

            <ul class="nav navbar-nav navbar-right">
                {{--<li class="nav-item{{ Request()->route()->named('homepage') ? ' active' : '' }}">--}}
                    {{--<a class="nav-link" href="{{ route('homepage') }}">Úvod</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="javascript:void(0);">Články</a>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link btn-red scroll-btn col-xs-10 col-xs-offset-1 col-sm-12" href="#koupit-kurz">Koupit kurz</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}"><span class="fas fa-cog"></span></a>
                    </li>
                @endauth
                @if(false)
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endguest
                @endif
            </ul>
        </div>
    </div>
</nav>
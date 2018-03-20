<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarAdminTop"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('homepage') }}">{{ config('cmsx.app.name') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="navbarAdminTop">
            {{--<ul class="nav navbar-nav">--}}
                {{--<li class="{{ Request()->route()->named('pages.index') ? ' active' : '' }}">--}}
                    {{--<a href="#">topmenu</a>--}}
                {{--</li>--}}
            {{--</ul>--}}

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="{{ \C18app\Cmsx\Models\Page::findOrFail(19)->getUrl() }}">O mně</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ \C18app\Cmsx\Models\Page::findOrFail(17)->getUrl() }}">Kontakt</a>
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

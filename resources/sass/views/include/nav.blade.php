<nav class="navbar fixed-top navbar-dark navbar-expand-md upper main-nav" id="app-navbar">
    <div class="container-fluid"><a class="navbar-brand" href="#"><span>Keep Mind</span></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                @guest
                    <li class="nav-item" role="presentation"><button class="btn btn-effect-hover" data-toggle="modal" data-target="#signup" type="button">Login</button></li>
                @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="/home" class="dropdown-item">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item" role="presentation"><button class="btn btn-primary search-btn" type="button"><i class="fa fa-search"></i></button></li>
                <li class="nav-item" role="presentation"><a href="/Register"><button class="btn btn-effect-hover" type="button" data-toggle="modal" data-target="#signin">Get Started</button></a></li>
            </ul>
        </div>
    </div>
</nav>



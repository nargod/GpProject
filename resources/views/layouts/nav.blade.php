 <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Good Pet</a></li>
                    <li><a>@if (Auth::guest())
                    @else
                        {{ Auth::user()->name }}
                    @endif
                    </a></li>
                </ul>
                </ul>
                <ul>




                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->userid }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</li></a>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
            @include('layouts.menu')
        </div>
    </nav>

<!doctype html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> @yield('title')</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    </head>
    <body>

        <div class="img-wrapper">

            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('home') }}">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{  URL::to('user/list') }}">Users list</a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <a href="{{ route('user.update.form') }}">
                                            My Account
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="basic-web-content">

                @yield('content')
            </div>


            <footer> created by Konrad</footer>
            <!-- Optional JavaScript -->
            <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
            <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('js/code.js') }}"></script>


        </div>
    </body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">

    @yield('css')

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img style="width: 50px;" src="{{ asset('images/logo.png') }}" alt="" class="navbar-logo">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('login.guest') }}" class="nav-link primary">ゲストでログイン</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="main container">

            <!-- フラッシュメッセージ -->
            @if (session('flash_message'))
                <div class="flash_message bg-info text-center text-white py-3 my-0 mb-3">
                    {{ session('flash_message') }}
                </div>
            @endif
            @if (Request::is('training-note*'))
                <div class="menu-bar mb-5">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="{{ route('training-index') }}">ホーム</a></li>
                        <li class="list-inline-item"><a href="{{ route('training-calendar') }}">カレンダー</a></li>
                        <li class="list-inline-item"><a
                                href="{{ route('training-note', ['date' => now()->format('Y-m-d')]) }}">ノート</a></li>
                        <li class="list-inline-item"><a href="{{ route('training-new') }}">記録する</a></li>
                    </ul>
                </div>
            @endif
            @yield('content')
            @if (Request::is('training-note*'))
                <div class="footer-menu mt-5">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="{{ route('index') }}">jangle</a></li>
                        <li class="list-inline-item">copylight</li>
                        <li class="list-inline-item"><a href="{{ route('about') }}">about</a></li>
                    </ul>
                </div>
            @endif

        </main>
        <footer class="footer p20">
            <small class="copyright">Laravel-react 2021 copyright</small>
        </footer>
    </div>
</body>

</html>

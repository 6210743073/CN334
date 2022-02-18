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

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="relative bg-white">
    <div id="app">
        <header class="bg-grey-500 py-6 ">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="/">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="font-medium text-gray-500 hover:text-gray-900" href="/">Home</a>
                    <a class="font-medium text-gray-500 hover:text-gray-900" href="/blog">Blog</a>
                    @guest
                    <a class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="font-medium text-gray-500 hover:text-gray-900" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="font-medium text-gray-500 hover:text-gray-900" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest

                </nav>
            </div>
        </header>
        <div>
            @include('layouts.Herosection')
        </div>
        <div>
            @yield('content')
        </div>
        <div>
            @include('layouts.Timeline')
        </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
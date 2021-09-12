<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
{{-- :active="request()->routeIs('articles') --}}
<body>
    <nav class="bg-white shadow dark:bg-gray-800 w-full">
        <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300 w-full">
            <a href="/" class="{{request()->is('/') ? ('border-b-2'):null}} text-gray-800 dark:text-gray-200  border-blue-500 mx-1.5 sm:mx-6">Accueil</a>

            <a href="/articles" class="{{request()->is('/articles') ? ('border-b-2'):null}} text-gray-800 dark:text-gray-200  border-red-500 mx-1.5 sm:mx-6">Articles</a>

            
            <div class="flex items-center justify-end mt-4 md:mt-0 w-full">
                            
                <a class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-blue-600 md:mx-2 md:w-auto" href="/register">Register</a>
                <a class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-blue-600 md:mx-2 md:w-auto" href="/login">Login</a>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    @auth
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                    @endauth
            </form>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
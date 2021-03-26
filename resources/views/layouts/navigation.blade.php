<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .m{
        background-color: gray;
        color:white;
        border-radius: 10px;
        padding: 6px 5rem;
    }
</style>
<body>
    <div class="container">
        <nav data="{ open: false }" class="">
            <!-- Primary Navigation Menu -->
            <div class="d-flex justify-content-end">
                <div class="">
                    <div class="">
                        <!-- Logo -->
                        <div class="">
                            <a href="{{ route('dashboard') }}">

                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="mt-4 mb-2">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="m">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </div>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="btn btn-secondary">
                                    <div>{{ Auth::user()->name }}</div>

                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    <!-- Hamburger -->
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="" class="">
                <div class="">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    </x-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="">
                    <div class="">
                        <div class="">
                            <div class="invisible">{{ Auth::user()->name }}</div>
                            <div class="invisible">{{ Auth::user()->email }}</div>
                        </div>
                    </div>

                    <div class="">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">

                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>

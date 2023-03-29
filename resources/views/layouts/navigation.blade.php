<nav class="navbar navbar-expand-md navbar-light bg-white border-bottom sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="/instagram-logo.jpeg" class="img-fluid pe-3 me-3" style="height: 2rem;border-right: 2px solid" alt="">
            <span>Instagram</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <!-- <ul class="navbar-nav">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </ul> -->

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">

                <!-- Settings Dropdown -->
                @auth
                    @if(Request::segment(1)=='')
                        <x-nav-link href="{{ url('/dashboard') }}" class="text-muted">Dashboard</x-nav-link>
                    @else
                        <x-dropdown id="settingsDropdown">
                            <x-slot name="trigger">
                                {{ Auth::user()->name }}
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <x-dropdown-link :href="route('profile.showUser')">
                                        {{ __('Profile') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endif
                @else
                    @if (Route::has('login'))
                            
                        <x-nav-link href="{{ route('login') }}" class="text-muted">Log in</x-nav-link>

                        @if (Route::has('register'))
                            <x-nav-link href="{{ route('register') }}" class="ms-4 text-muted">Register</x-nav-link>
                        @endif
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>
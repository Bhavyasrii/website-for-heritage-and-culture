<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/home')}}">Ancestral Archives </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{url('/home')}}" class="nav-link">Home</a></li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item"><a href="{{route('pages.shops')}}" class="nav-link">Shops</a></li>
                        <li class="nav-item"><a href="{{route('pages.blogs')}}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{route('pages.events')}}" class="nav-link">Events</a></li>
                       
                        @role('admin')
                            <li class="nav-item"><a href="{{route('pages.admin.users')}}" class="nav-link">Admin Pannel</a></li>
                        @else
                            <li class="nav-item"><a href="{{ route('pages.dashboard') }}" class="nav-link">Dashboard</a></li>
                        @endrole
                        <li class="nav-item"><a href="{{url('/forum')}}" class="nav-link">Forum</a></li>

                        <li class="nav-item  mt-3 pl-3">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                                       onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('LogOut') }}
                                </x-responsive-nav-link>
                            </form>
                        </li>
                        {{--                        <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>--}}
                        {{--                        <li class="nav-item"><a href="{{url('/causes')}}" class="nav-link">Causes</a></li>--}}
                        {{--                        <li class="nav-item"><a href="{{url('/gallery')}}" class="nav-link">Gallery</a></li>--}}
                                                {{-- <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li> --}}
                    @else
                        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

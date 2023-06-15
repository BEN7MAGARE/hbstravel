    <!-- header starts -->
    <header class="main_header_area headerstye-1">
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img style="max-height:100px" src="/images/logo-white.png" alt="image" />
                                <img src="/images/logo.png" alt="image" />
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="{{ Request::is('/') ? 'active' : '' }}">
                                    <a href="{{ url('/') }}">Accommodations</i></a>
                                </li>

                                <li class="{{ Request::is('flights') ? 'active' : '' }}">
                                    <a href="#">Flights</a>
                                </li>

                                <li class="{{ Request::is('destinations') ? 'active' : '' }}">
                                    <a href="#">Destinations</a>
                                </li>

                                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a
                                        href="{{ url('contact') }}">Contact Us</a></li>

                                <li class="{{ Request::is('about') ? 'active' : '' }}"><a
                                        href="{{ url('about') }}">About Us</a></li>
                            </ul>

                        </div>
                        @guest
                            <div class="register-login">
                                <a href="{{ route('login') }}" class="{{ Request::is('login') ? 'active' : '' }}">
                                    <i class="icon-user mr-1"></i> Sign up / <i class="icon-login mr-1"></i>Sign in</a>
                            </div>
                        @else
                            <ul class="dropdown {{ Request::is('profile') || Request::is('profile') ? 'active' : '' }}">
                                <a href="#" class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @if (auth()->user()->role === 'admin')
                                        <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('bookings.index') }}">My Bookings</a>
                                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="sl sl-icon-user"></i>
                                        &nbsp;Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="sl sl-icon-power"></i> &nbsp;
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </ul>
                        @endguest

                        <div id="slicknav-mobile"></div>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <!-- header ends -->

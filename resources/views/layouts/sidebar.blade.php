<div class="col-lg-3">
    <div class="dashboard-sidebar">
        <div class="profile-sec">
            <div class="author-news mb-3">
                <div class="author-news-content text-center p-3">
                    <div class="author-thumb mt-0">
                        <img src="images/team/img1.jpg" alt="author">
                    </div>
                    <div class="author-content pt-2 p-0">
                        <h3 class="mb-1 white"><a href="#" class="white">{{ auth()->user()->name }}</a>
                        </h3>
                        <p class="detail"><i class="fa fa-envelope"></i> {{ auth()->user()->email }}</p>
                        <p class="detail"><i class="fa fa-phone"></i> {{ auth()->user()->phone }}</p>
                        {{-- <div class="header-social mt-2">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="dot-overlay"></div>
            </div>
        </div>

        <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i>
            Dashboard Navigation</a>
        <div class="dashboard-nav">
            {{-- <div class="dashboard-nav-inner"> --}}
            <ul>


                <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="{{ route('profile') }}"><i
                            class="sl sl-icon-user"></i>
                        Profile</a></li>

                @if (auth()->user()->role === 'admin')
                    <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i
                                class="sl sl-icon-settings"></i> Dashboard</a>
                    </li>

                    <li class="{{ Request::is('bookings') ? 'active' : '' }}"><a href="{{ route('bookings.index') }}"><i
                                class="sl sl-icon-envelope-open"></i>
                            Bookings</a></li>
                    <li class="{{ Request::is('hotels/create') ? 'active' : '' }}"><a
                            href="{{ route('hotels.create') }}"><i class="sl sl-icon-plus"></i> Add Hotel</a></li>
                    <li class="{{ Request::is('hotels') ? 'active' : '' }}"><a href="{{ route('hotels.index') }}"><i
                                class="sl sl-icon-layers"></i>
                            Listing</a></li>
                @else
                    <li class="{{ Request::is('bookings') ? 'active' : '' }}"><a href="{{ route('bookings.index') }}"><i
                            class="fa fa-list-ul"></i>Booking
                        History</a></li>
                @endif

                <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                            class="sl sl-icon-power"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            {{-- </div> --}}
        </div>
    </div>
</div>

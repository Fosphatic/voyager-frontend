<li>
    <form id="search-form" action="search" method="POST">
        {{ csrf_field() }}
        <input name="search" type="search" placeholder="Search..."/>
    </form>
</li>

@if (Auth::guest())
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@endif

@if (!Auth::guest())
    <ul class="dropdown menu" data-dropdown-menu>
    <li>
        <a href="#">My Account</a>
        <ul class="menu">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul> <!-- /.menu -->
    </li>
    </ul> <!-- /.dropdown -->
@endif

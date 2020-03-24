<div class="header-container">
    <div class="brand">
        <a href="{{ url('/') }}">
            Blog
        </a>
    </div>
    <nav class="main-menu">
        <!-- Left Side Of Navbar -->
        <ul>
            @admin
                <a href="{{route('admin.post.index')}}">Admin</a>
            @endadmin
        </ul>

        <!-- Right Side Of Navbar -->
        <ul>
            <!-- Authentication Links -->
            @guest
                <li>
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li>
                    <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div aria-labelledby="navbarDropdown">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
</div>


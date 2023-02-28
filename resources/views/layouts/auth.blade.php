@guest
    <li class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-person-badge-fill"></i>
            <span>Authentication</span>
        </a>
        <ul class="submenu ">
            @if (Route::has('login'))
            <li class="submenu-item ">
                <a href="{{ route('login') }}">Login</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="submenu-item ">
                <a href="{{ route('register') }}">Register</a>
            </li>
            @endif
            {{-- @if (Route::has('register'))
            <li class="submenu-item ">
                <a href="auth-forgot-password.html">Forgot Password</a>
            </li>
        
            @endif --}}
        </ul>
        @else
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-fill"></i>
                    <span>{{(auth()->user()->name)}}</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Deconnexion') }}
                    </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>       
            </li>
      
    </li>
@endguest
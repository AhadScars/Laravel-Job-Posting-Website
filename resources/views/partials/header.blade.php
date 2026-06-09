<link rel="stylesheet" href="{{ asset('css/partials/header.css') }}">
<header class="main-header">
    <div class="header-container">
        <a href="{{ url('/') }}" class="logo">
            Job<span>Portal</span>
        </a>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>

        <nav class="nav-menu">
            <ul class="nav-list">
                <li><a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/jobs') }}" class="nav-link {{ Request::is('jobs') ? 'active' : '' }}">Jobs</a></li>
                <li><a href="{{ url('/about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ url('/contact-us') }}" class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}">Contact Us</a></li>

                @guest
                    <li class="auth-links">
                        <a href="{{ url('/Auth/login') }}" class="btn-login">Login</a>
                        <a href="{{ url('/Auth/register') }}" class="btn-signup">Sign Up</a>
                    </li>
                @else
                    <li class="auth-links">
                        <a href="{{ url('/profile') }}" class="btn-profile">
                            👤 <span class="user-name">{{ auth()->user()->username }}</span>
                        </a>
                         @if(auth()->user()->is_admin)
                        <a href="{{ url('/dashboard') }}" class="btn-post-job">
                            📊 Dashboard
                        </a>
                       
                            <a href="{{ url('/post_job') }}" class="btn-post-job">
                                ➕ Post a Job
                            </a>
                        @endif
                        <a href="{{ route('logout') }}" class="btn-logout" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>

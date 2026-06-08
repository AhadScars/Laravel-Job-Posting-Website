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
                <li><a href="{{ url('/about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ url('/jobs') }}" class="nav-link {{ Request::is('jobs') ? 'active' : '' }}">Jobs</a></li>
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
                        <a href="{{ url('/post_job') }}" class="btn-post-job">
                            ➕ Post a Job
                        </a>
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

<style>
:root {
    --primary-color: #4f46e5;
    --primary-hover: #4338ca;
    --text-color: #1e293b;
    --text-light: #64748b;
    --bg-white: #ffffff;
    --bg-light: #f8fafc;
    --border: #e2e8f0;
    --transition: all 0.25s ease;
}

body {
    margin: 0;
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
}

.main-header {
    background-color: var(--bg-white);
    border-bottom: 1px solid var(--border);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.header-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 70px;
    position: relative;
}

.logo {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--text-color);
    text-decoration: none;
    letter-spacing: -0.75px;
}

.logo span {
    color: var(--primary-color);
}

.nav-menu {
    display: flex;
    align-items: center;
}

.nav-list {
    display: flex;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 1.5rem; /* Reduced gap slightly to fit more items on desktop */
}

.nav-link {
    color: var(--text-light);
    text-decoration: none;
    font-weight: 500;
    font-size: 0.95rem;
    padding: 0.5rem 0;
    transition: var(--transition);
}

.nav-link:hover, .nav-link.active {
    color: var(--primary-color);
}

.auth-links {
    display: flex;
    align-items: center;
    gap: 0.85rem;
    margin-left: 0.5rem;
}

.btn-login {
    color: var(--text-color);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    padding: 0.5rem 1rem;
    transition: var(--transition);
}

.btn-login:hover {
    color: var(--primary-color);
}

.btn-signup {
    background-color: var(--primary-color);
    color: var(--bg-white);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    padding: 0.6rem 1.2rem;
    border-radius: 8px;
    transition: var(--transition);
}

.btn-signup:hover {
    background-color: var(--primary-hover);
    box-shadow: 0 4px 12px rgba(79, 70, 229, 0.15);
}

/* Logged-in User Profile Pill Button */
.btn-profile {
    display: flex;
    align-items: center;
    background: var(--bg-light);
    border: 1px solid var(--border);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    text-decoration: none;
    transition: var(--transition);
}

.btn-profile:hover {
    border-color: var(--primary-color);
    background: #eef2ff;
}

.user-name {
    font-size: 0.9rem;
    color: var(--text-color);
    font-weight: 600;
    margin-left: 0.25rem;
}

/* FIXED & STYLED: Post a Job Button UI */
.btn-post-job {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #eef2ff;
    color: var(--primary-color);
    border: 1px solid #c7d2fe;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    transition: var(--transition);
}

.btn-post-job:hover {
    background-color: var(--primary-color);
    color: var(--bg-white);
    border-color: var(--primary-color);
    box-shadow: 0 4px 10px rgba(79, 70, 229, 0.1);
}

.btn-logout {
    color: #ef4444;
    text-decoration: none;
    font-size: 0.95rem;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border: 1px solid #fecaca;
    border-radius: 8px;
    transition: var(--transition);
}

.btn-logout:hover {
    background-color: #fef2f2;
}

/* Hamburger Menu Mobile Configuration */
.nav-toggle {
    display: none;
}

.nav-toggle-label {
    display: none;
    cursor: pointer;
    padding: 0.5rem;
    z-index: 1001;
}

.nav-toggle-label span,
.nav-toggle-label span::before,
.nav-toggle-label span::after {
    display: block;
    background: var(--text-color);
    height: 2px;
    width: 1.5rem;
    position: relative;
    transition: var(--transition);
}

.nav-toggle-label span::before,
.nav-toggle-label span::after {
    content: '';
    position: absolute;
}

.nav-toggle-label span::before { top: -6px; }
.nav-toggle-label span::after { top: 6px; }

/* Responsive Mobile Rules */
@media screen and (max-width: 920px) { /* Shifted breakpoint slightly up to prevent desktop wrap */
    .nav-toggle-label {
        display: block;
    }

    .nav-menu {
        position: absolute;
        top: 70px;
        left: 0;
        width: 100%;
        background-color: var(--bg-white);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        border-top: 1px solid var(--border);
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
        z-index: 999;
    }

    .nav-list {
        flex-direction: column;
        align-items: stretch;
        width: 100%;
        padding: 1.5rem;
        gap: 1rem;
    }

    .nav-link {
        display: block;
        padding: 0.5rem 0;
    }

    .auth-links {
        flex-direction: column;
        align-items: stretch;
        border-top: 1px solid var(--border);
        padding-top: 1rem;
        margin-left: 0;
        gap: 0.75rem;
    }

    .btn-login, .btn-signup, .btn-logout, .btn-profile, .btn-post-job {
        text-align: center;
        justify-content: center;
        width: 100%;
        border-radius: 8px; /* Box style targets better on mobile rows */
    }

    .nav-toggle:checked ~ .nav-menu {
        max-height: 520px; /* Increased height capacity to smoothly fit the added buttons */
    }

    .nav-toggle:checked ~ .nav-toggle-label span { background: transparent; }
    .nav-toggle:checked ~ .nav-toggle-label span::before { transform: rotate(45deg); top: 0; }
    .nav-toggle:checked ~ .nav-toggle-label span::after { transform: rotate(-45deg); top: 0; }
}
</style>
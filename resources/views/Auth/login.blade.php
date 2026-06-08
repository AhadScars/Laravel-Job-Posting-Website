<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --background: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --error: #ef4444;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--background);
        }

        /* Wraps the view page area under the header navigation */
        .page-content-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 70px); /* Adjusts view context below 70px header height */
            padding: 2rem 1.25rem;
        }

        .auth-container {
            width: 100%;
            max-width: 420px;
            background: var(--card-bg);
            padding: 2.5rem 2rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .auth-header h1 {
            color: var(--text-main);
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .auth-header p {
            color: var(--text-muted);
            font-size: 0.925rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            color: var(--text-main);
            font-weight: 500;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 0.95rem;
            color: var(--text-main);
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .form-input.is-invalid {
            border-color: var(--error);
        }

        .invalid-feedback {
            color: var(--error);
            font-size: 0.8rem;
            margin-top: 0.35rem;
            display: block;
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-muted);
            cursor: pointer;
        }

        .remember-me input {
            accent-color: var(--primary);
        }

        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .btn-submit {
            width: 100%;
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.85rem;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn-submit:hover {
            background-color: var(--primary-hover);
        }

        .auth-footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.875rem;
            color: var(--text-muted);
        }

        .auth-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

@include('partials.header')

<div class="page-content-wrapper">
    <div class="auth-container">
        <div class="auth-header">
            <h1>Welcome Back</h1>
            <p>Login to manage your job applications</p>
        </div>

        <form method="POST" action="/Auth/login">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <input id="email" type="email" name="email" class="form-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" class="form-input @error('password') is-invalid @enderror" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-options">
                <label for="remember_me" class="remember-me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ url('/Auth/password/reset') }}">Forgot password?</a>
                @endif
            </div>

            <button type="submit" class="btn-submit">
                Sign In
            </button>
        </form>

        <div class="auth-footer">
            Don't have an account? <a href="{{ url('/Auth/register') }}">Sign up</a>
        </div>
    </div>
</div>

</body>
</html>
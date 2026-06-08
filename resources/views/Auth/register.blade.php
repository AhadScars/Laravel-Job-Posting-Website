<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #10b981; /* Emerald Green variant to differentiate visually from Login */
            --primary-hover: #059669;
            --background: #f1f5f9;
            --card-bg: #ffffff;
            --text-main: #0f172a;
            --text-muted: #475569;
            --border: #cbd5e1;
            --error: #dc2626;
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

        /* Wraps the view page area safely under the header navigation grid layout */
        .page-content-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 70px); /* Adjusts viewport height calculation relative to the header */
            padding: 2rem 1.25rem;
        }

        .auth-container {
            width: 100%;
            max-width: 480px;
            background: var(--card-bg);
            padding: 3rem 2.5rem;
            border-radius: 20px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2.25rem;
        }

        .auth-header h1 {
            color: var(--text-main);
            font-size: 1.85rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .auth-header p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .form-grid {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            color: var(--text-main);
            font-weight: 500;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 0.95rem;
            color: var(--text-main);
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.15);
        }

        .form-input.is-invalid {
            border-color: var(--error);
        }

        .invalid-feedback {
            color: var(--error);
            font-size: 0.8rem;
            margin-top: 0.35rem;
        }

        .btn-submit {
            width: 100%;
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.9rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 0.5rem;
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
            <h1>Create Account</h1>
            <p>Get started with your dream job search</p>
        </div>

        <form method="POST" action="{{ url('/Auth/register') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input id="username" type="text" name="username" class="form-input @error('username') is-invalid @enderror" value="{{ old('username') }}" required autofocus autocomplete="username">
                    @error('username')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" type="email" name="email" class="form-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="username">
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-input @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-input" required autocomplete="new-password">
                </div>

                <button type="submit" class="btn-submit">
                    Register Now
                </button>
            </div>
        </form>

        <div class="auth-footer">
            Already have an account? <a href="{{ url('/Auth/login') }}">Sign in</a>
        </div>
    </div>
</div>

</body>
</html>
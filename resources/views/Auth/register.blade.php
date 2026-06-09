<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/Auth/register.css') }}">
</head>

<body>

    @include('partials.header')

    <div class="page-content-wrapper">
        <div class="auth-container">
            <div class="auth-header">
                <h1>Create Account</h1>
                <p>Get started with your dream job search</p>
            </div>

            <form method="POST" action="{{ url('/Auth/register') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-grid">
                    <div class="form-group">
                        <label for="username" class="form-label">Username</label>
                        <input id="username" type="text" name="username"
                            class="form-input @error('username') is-invalid @enderror" value="{{ old('username') }}"
                            required autofocus autocomplete="username">
                        @error('username')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" name="email"
                            class="form-input @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                            autocomplete="username">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password"
                            class="form-input @error('password') is-invalid @enderror" required
                            autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation"
                            class="form-input" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <label for="document" class="form-label">Resume Upload (optional)</label>
                        <input id="document" type="file" name="document"
                            class="form-input @error('document') is-invalid @enderror">
                        @error('document')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
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
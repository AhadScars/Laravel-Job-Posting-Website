<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB-PORTAL | Find Your Dream Job</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>

    @include('partials.header')

    <div class="page-content-wrapper">
        <div class="home-container">

            <section class="hero-section">
                <h1>Find Your <span>Dream Job</span> & Build Your Definition of Success</h1>
                <p>Your gateway to exciting career opportunities. Discover thousands of curated jobs from world-class tech companies.</p>

                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Job title, keywords, or company...">
                    <input type="text" class="search-input location-input" placeholder="Location (e.g. Remote, Delhi)...">
                    <button class="search-btn">Search Jobs</button>
                </div>
            </section>

            <section class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🔍</div>
                    <h3>Easy Searching</h3>
                    <p>Filter through verified active job listings using our smart indexing system seamlessly.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Instant Apply</h3>
                    <p>Submit your optimized profile layout to top tech companies in just a few quick clicks.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3>Verified Companies</h3>
                    <p>No spam or dead listings. We make sure every job post belongs to a trusted employer.</p>
                </div>
            </section>

        </div>
    </div>

</body>
</html>
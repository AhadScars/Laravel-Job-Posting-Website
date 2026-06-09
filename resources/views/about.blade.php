<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>

@include('partials.header')

<div class="page-content-wrapper">
    <div class="about-container">
        
        <section class="about-hero">
            <h1>Connecting Talent with <span>Opportunity</span></h1>
            <p>We build technologies that bridge the gap between world-class companies and incredible professionals looking to make their next definitive career move.</p>
        </section>

        <section class="stats-section">
            <div class="stat-item">
                <div class="stat-number">150K+</div>
                <div class="stat-label">Active Jobs</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">80M+</div>
                <div class="stat-label">Matches Made</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">12K+</div>
                <div class="stat-label">Top Companies</div>
            </div>
        </section>

        <section class="about-grid">
            <div class="about-card">
                <h2>Our Mission</h2>
                <p>To simplify the recruitment process. Finding a job or hiring standard-setting talent shouldn't take months of digging through unqualified applications or automated template responses. We prioritize clarity, transparency, and human-centric workflows.</p>
            </div>

            <div class="about-card">
                <h2>Why Choose Us</h2>
                <p>Unlike traditional job boards packed with dead listings, JobPortal monitors listing health ecosystem-wide. Backed by intelligent indexing tools and dynamic job alerts, candidates land interviews faster and companies fill benches with zero friction.</p>
            </div>
        </section>

    </div>
</div>

</body>
</html>
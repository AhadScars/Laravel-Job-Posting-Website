<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #4f46e5; /* Consistent Indigo primary */
            --primary-hover: #4338ca;
            --background: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--background);
            color: var(--text-main);
        }

        .page-content-wrapper {
            min-height: calc(100vh - 70px);
            padding: 3rem 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .about-container {
            width: 100%;
            max-width: 1000px;
            display: flex;
            flex-direction: column;
            gap: 3rem;
        }

        /* Hero Section */
        .about-hero {
            text-align: center;
            padding: 2rem 0;
        }

        .about-hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-main);
            margin-bottom: 1rem;
            letter-spacing: -0.5px;
        }

        .about-hero h1 span {
            color: var(--primary);
        }

        .about-hero p {
            font-size: 1.125rem;
            color: var(--text-muted);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Grid Section */
        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .about-card {
            background: var(--card-bg);
            padding: 2.5rem 2rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .about-card h2 {
            font-size: 1.35rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-main);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        /* Small colored accent accent bar for cards */
        .about-card h2::before {
            content: '';
            display: inline-block;
            width: 4px;
            height: 1.25rem;
            background-color: var(--primary);
            border-radius: 2px;
        }

        .about-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Stats Section */
        .stats-section {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            flex-wrap: wrap;
            gap: 2rem;
            border: 1px solid var(--border);
        }

        .stat-item .stat-number {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .stat-item .stat-label {
            font-size: 0.9rem;
            color: var(--text-muted);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Responsive Breakpoints */
        @media screen and (max-width: 768px) {
            .about-hero h1 {
                font-size: 2rem;
            }
            
            .stats-section {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
        }

        @media screen and (max-width: 480px) {
            .stats-section {
                grid-template-columns: 1fr;
            }
        }
    </style>
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
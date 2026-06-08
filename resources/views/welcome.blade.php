<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB-PORTAL | Find Your Dream Job</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #4f46e5;
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
            padding: 4rem 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4rem;
        }

        .home-container {
            width: 100%;
            max-width: 1100px;
            display: flex;
            flex-direction: column;
            gap: 4rem;
        }

        /* Hero Section */
        .hero-section {
            text-align: center;
            padding: 3rem 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -1px;
            color: var(--text-main);
            max-width: 800px;
        }

        .hero-section h1 span {
            color: var(--primary);
        }

        .hero-section p {
            font-size: 1.25rem;
            color: var(--text-muted);
            max-width: 600px;
            line-height: 1.6;
        }

        /* Search Bar Style */
        .search-container {
            width: 100%;
            max-width: 750px;
            background: var(--card-bg);
            padding: 0.75rem;
            border-radius: 50px;
            box-shadow: 0 15px 30px -10px rgba(79, 70, 229, 0.15);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: 1rem;
        }

        .search-input {
            flex: 1;
            padding: 0.75rem 1.5rem;
            border: none;
            outline: none;
            font-size: 1rem;
            color: var(--text-main);
            background: transparent;
        }

        .search-input.location-input {
            border-left: 1px solid var(--border); 
            max-width: 220px;
        }

        .search-input::placeholder {
            color: var(--text-muted);
        }

        .search-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.85rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .search-btn:hover {
            background-color: var(--primary-hover);
        }

        /* Features / Why Us Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: var(--card-bg);
            padding: 2.5rem 2rem;
            border-radius: 16px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background-color: #e0e7ff;
            color: var(--primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--text-main);
        }

        .feature-card p {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Responsive Breakpoints */
        @media screen and (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.25rem;
            }

            .search-container {
                border-radius: 16px;
                flex-direction: column;
                padding: 1rem;
                gap: 0.5rem;
            }

            .search-input {
                width: 100%;
                padding: 0.75rem 0.5rem;
            }

            .search-input.location-input {
                border-left: none;
                border-top: 1px solid var(--border);
                max-width: 100%;
            }

            .search-btn {
                width: 100%;
                border-radius: 10px;
                margin-top: 0.5rem;
            }
        }
    </style>
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
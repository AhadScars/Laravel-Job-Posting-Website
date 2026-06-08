<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Job Openings - JobPortal</title>
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

        .jobs-section {
            max-width: 1100px;
            margin: 0 auto;
            padding: 4rem 1.5rem;
        }

        .section-title {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--text-main);
            margin-bottom: 2.5rem;
            text-align: center;
            letter-spacing: -0.5px;
        }

        .section-title span {
            color: var(--primary);
        }

        /* 3-Column Responsive Grid */
        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        /* Card Styling */
        .job-card {
            background: var(--card-bg);
            border-radius: 16px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .job-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05);
            border-color: var(--primary);
        }

        /* Header Inner Card */
        .job-header {
            margin-bottom: 1.25rem;
        }

        .job-company {
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--primary);
            background: #e0e7ff;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 0.75rem;
        }

        .job-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--text-main);
            line-height: 1.3;
        }

        /* Meta Information Rows */
        .job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .meta-tag {
            font-size: 0.9rem;
            color: var(--text-muted);
            background: var(--background);
            padding: 0.5rem 0.85rem;
            border-radius: 8px;
            border: 1px solid var(--border);
            display: inline-flex;
            align-items: center;
            font-weight: 500;
        }

        .salary-tag {
            color: #16a34a;
            background: #f0fdf4;
            border-color: #bbf7d0;
        }

        /* Footer Links Alignment */
        .job-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid var(--border);
            padding-top: 1.25rem;
            margin-top: auto;
        }

        .apply-link {
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            transition: color 0.2s, background 0.2s;
        }

        .job-footer .apply-link:first-child {
            color: var(--text-muted);
        }

        .job-footer .apply-link:first-child:hover {
            color: var(--text-main);
        }

        .job-footer .apply-link:last-child {
            background-color: var(--primary);
            color: white;
            padding: 0.65rem 1.25rem;
            border-radius: 8px;
        }

        .job-footer .apply-link:last-child:hover {
            background-color: var(--primary-hover);
        }

        /* Fallback Empty Card */
        .no-jobs-card {
            grid-column: span 3;
            background: var(--card-bg);
            padding: 4rem 2rem;
            text-align: center;
            border-radius: 16px;
            border: 1px dashed var(--border);
            color: var(--text-muted);
        }

        /* FIXED Laravel Bootstrap 5 Pagination Custom Elements Wrapper */
        .pagination-container {
            margin-top: 4rem;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .pagination-container nav {
            display: block;
            box-shadow: none !important;
        }

        /* Overriding Laravel generic SVG layout sizing bug */
        .pagination-container svg {
            width: 1rem;
            height: 1rem;
            vertical-align: middle;
        }

        .pagination-container .pagination {
            display: flex;
            gap: 0.35rem;
            padding: 0;
            list-style: none;
            align-items: center;
        }

        .pagination-container .page-item {
            display: inline-block;
        }

        .pagination-container .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-main);
            background: var(--card-bg);
            border: 1px solid var(--border);
            padding: 0.6rem 1rem;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            min-width: 42px;
            height: 42px;
            transition: all 0.2s ease;
        }

        /* Hover state */
        .pagination-container .page-item:not(.active):not(.disabled) .page-link:hover {
            border-color: var(--primary);
            color: var(--primary);
            background: #eef2ff;
        }

        /* Active active element pill */
        .pagination-container .page-item.active .page-link {
            background-color: var(--primary) !important;
            border-color: var(--primary) !important;
            color: white !important;
            cursor: default;
        }

        /* Disabled state structure */
        .pagination-container .page-item.disabled .page-link {
            color: var(--text-muted);
            opacity: 0.5;
            background: var(--background);
            border-color: var(--border);
            cursor: not-allowed;
        }
    </style>
</head>
<body>

@include('partials.header')

<main class="page-content-wrapper">
    <section class="jobs-section">
        <h2 class="section-title">Latest Job <span>Openings</span></h2>
        
        <div class="jobs-grid">
            @forelse ($jobs as $job)
                <div class="job-card">
                    <div>
                        <div class="job-header">
                            <span class="job-company">{{ $job->company }}</span>
                            <h3 class="job-title">{{ $job->title }}</h3>
                        </div>

                        <div class="job-meta">
                            <span class="meta-tag">
                                📍 {{ $job->location }}
                            </span>
                            <span class="meta-tag salary-tag">
                                ₹{{ number_format($job->salary, 0) }}
                            </span>
                        </div>
                    </div>

                    <div class="job-footer">
                        <a href="{{ url('/jobs/'.$job->id) }}" class="apply-link">View Details &rarr;</a>
                        <a href="{{ url('/jobs/'.$job->id.'/apply') }}" class="apply-link">Apply Now</a>
                    </div>
                </div>
            @empty
                <div class="no-jobs-card">
                    <p style="font-size: 1.1rem; font-weight: 500;">No jobs found at the moment.</p>
                    <p style="font-size: 0.95rem; margin-top: 0.25rem;">Please check back later or modify your filters.</p>
                </div>
            @endforelse
        </div>

        <div class="pagination-container">
            {{ $jobs->links() }}
        </div>
    </section>
</main>

</body>
</html>
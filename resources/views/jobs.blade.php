<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Job Openings - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">
        
   
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
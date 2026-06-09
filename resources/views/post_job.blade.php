<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/post_job.css') }}">
</head>
<body>

@include('partials.header')

<main class="page-content-wrapper">
    <div class="form-container">
        <h1>Post a Job</h1>
        <p class="subtitle">Find the perfect candidate by filling out the position details below.</p>
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <form action="{{ route('post_job.store') }}" method="POST" class="post-job-form">
            @csrf
            
            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" id="title" name="title" placeholder="e.g. Senior Laravel Developer" required>
            </div>
            
            <div class="form-group">
                <label for="company">Company Name</label>
                <input type="text" id="company" name="company" placeholder="e.g. Stripe, Inc." required>
            </div>
            
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" placeholder="e.g. Remote / Delhi, India" required>
            </div>
            
            <div class="form-group">
                <label for="description">Job Description</label>
                <textarea id="description" name="description" rows="5" placeholder="Describe the responsibilities, requirements, and benefits of the role..." required></textarea>
            </div>
            
            <div class="form-group">
                <label for="salary">Salary ($)</label>
                <input type="text" id="salary" name="salary" placeholder="e.g. 85000" required>
            </div>
            
            <button type="submit" class="btn-submit">Post Job Listing</button>
        </form>
    </div>
</main>

</body>
</html>
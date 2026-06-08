<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job - JobPortal</title>
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
            --focus-ring: rgba(79, 70, 229, 0.15);
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
            justify-content: center;
            align-items: center;
        }

        .form-container {
            width: 100%;
            max-width: 650px;
            background: var(--card-bg);
            padding: 3rem 2.5rem;
            border-radius: 16px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
        }

        .form-container h1 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-main);
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .form-container .subtitle {
            font-size: 0.95rem;
            color: var(--text-muted);
            margin-bottom: 2.5rem;
        }

        .post-job-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-main);
        }

        /* Inputs & Textarea Styling */
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            color: var(--text-main);
            background-color: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 8px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px var(--focus-ring);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Submit Button Styling */
        .btn-submit {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.85rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
            margin-top: 1rem;
            text-align: center;
        }

        .btn-submit:hover {
            background-color: var(--primary-hover);
        }

        .btn-submit:active {
            transform: scale(0.98);
        }

        /* Responsive padding adjustments */
        @media screen and (max-width: 480px) {
            .form-container {
                padding: 2rem 1.5rem;
            }
            .form-container h1 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>

@include('partials.header')

<main class="page-content-wrapper">
    <div class="form-container">
        <h1>Post a Job</h1>
        <p class="subtitle">Find the perfect candidate by filling out the position details below.</p>
        
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
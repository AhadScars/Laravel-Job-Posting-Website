<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #4f46e5; /* Wahi Indigo theme */
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

        .profile-container {
            width: 100%;
            max-width: 800px; /* About se thoda compact profile ke liye */
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* Profile Card */
        .profile-card {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(226, 232, 240, 0.8);
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* Header Section inside Card */
        .profile-header {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            border-bottom: 1px solid var(--border);
            padding-bottom: 1.5rem;
        }

        .profile-avatar {
            width: 80px;
            height: 80px;
            background-color: #e0e7ff;
            color: var(--primary);
            font-size: 2rem;
            font-weight: 700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
        }

        .profile-title h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 0.25rem;
        }

        .profile-title p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* Details Grid */
        .profile-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .detail-item {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .detail-item label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .detail-value {
            font-size: 1.05rem;
            color: var(--text-main);
            background: var(--background);
            padding: 0.75rem 1rem;
            border-radius: 8px;
            border: 1px solid var(--border);
            font-weight: 500;
        }

        /* Responsive Breakpoints */
        @media screen and (max-width: 600px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

@include('partials.header')

<div class="page-content-wrapper">
    <div class="profile-container">
        
        <div class="profile-card">
            <!-- Avatar aur Welcome Message -->
            <div class="profile-header">
                <div class="profile-avatar">
                    <!-- Username ka pehla akshar avatar me dikhane ke liye -->
                    {{ substr(auth()->user()->username, 0, 1) }}
                </div>
                <div class="profile-title">
                    <h2>Welcome back, {{ auth()->user()->username }}!</h2>
                    <p>Manage your account information and job status.</p>
                </div>
            </div>

            <!-- User Info Details -->
            <div class="profile-details">
                <div class="detail-item">
                    <label>Username</label>
                    <div class="detail-value">{{ auth()->user()->username }}</div>
                </div>

                <div class="detail-item">
                    <label>Email Address</label>
                    <div class="detail-value">{{ auth()->user()->email }}</div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
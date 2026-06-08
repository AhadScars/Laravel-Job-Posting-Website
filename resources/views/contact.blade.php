<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - JobPortal</title>
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
            padding: 3rem 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-container {
            width: 100%;
            max-width: 1000px;
            display: flex;
            flex-direction: column;
            gap: 3rem;
        }

        /* Hero Section */
        .contact-hero {
            text-align: center;
            padding: 1rem 0;
        }

        .contact-hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-main);
            margin-bottom: 0.75rem;
            letter-spacing: -0.5px;
        }

        .contact-hero h1 span {
            color: var(--primary);
        }

        .contact-hero p {
            font-size: 1.125rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Main Content Layout Split */
        .contact-layout {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 2.5rem;
            background: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        /* Left Side: Info Panel */
        .contact-info-panel {
            background-color: var(--primary);
            color: white;
            padding: 3rem 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 3rem;
        }

        .info-header h2 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .info-header p {
            color: #c7d2fe;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .info-details {
            display: flex;
            flex-direction: column;
            gap: 1.75rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .info-text p {
            font-size: 0.85rem;
            color: #c7d2fe;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .info-text h4 {
            font-size: 1.05rem;
            font-weight: 500;
            margin-top: 0.1rem;
        }

        /* Right Side: Form Panel */
        .contact-form-panel {
            padding: 3rem 2.5rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        .form-group label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-main);
        }

        .form-group input, .form-group textarea {
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            background-color: var(--background);
            color: var(--text-main);
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-group input:focus, .form-group textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            background-color: #fff;
        }

        .btn-submit {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.85rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 1rem;
            align-self: flex-start;
        }

        .btn-submit:hover {
            background-color: var(--primary-hover);
        }

        /* Responsive Design */
        @media screen and (max-width: 850px) {
            .contact-layout {
                grid-template-columns: 1fr;
            }
            .form-grid {
                grid-template-columns: 1fr;
            }
            .form-group.full-width {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>

@include('partials.header')

<div class="page-content-wrapper">
    <div class="contact-container">
        
        <section class="contact-hero">
            <h1>Get In <span>Touch</span></h1>
            <p>Have questions or feedback? We would love to hear from you. Leave us a message and our team will get back to you shortly.</p>
        </section>

        <div class="contact-layout">
            
            <div class="contact-info-panel">
                <div class="info-header">
                    <h2>Contact Information</h2>
                    <p>Reach out to us directly or fill out the form, we are here to support your career journey.</p>
                </div>

                <div class="info-details">
                    <div class="info-item">
                        <div class="info-icon">✉️</div>
                        <div class="info-text">
                            <p>Email Us</p>
                            <h4>support@jobportal.com</h4>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-text">
                            <p>Our Headquarter</p>
                            <h4>Tech Hub, New Delhi, India</h4>
                        </div>
                    </div>
                </div>

                <div style="font-size: 0.85rem; color: #c7d2fe;">
                    &copy; 2026 JobPortal Inc. All rights reserved.
                </div>
            </div>

            <div class="contact-form-panel">
                <form action="{{ url('/contact') }}" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
                    @csrf
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="{{ Auth::user()->username ?? 'John Doe' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="{{ Auth::user()->email ?? 'john@example.com' }}" required>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="How can we help you?" required>
                    </div>

                    <div class="form-group full-width">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
            </div>

        </div>

    </div>
</div>

</body>
</html>
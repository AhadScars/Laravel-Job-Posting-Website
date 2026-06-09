<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
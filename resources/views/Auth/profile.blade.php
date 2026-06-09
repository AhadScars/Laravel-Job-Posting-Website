<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - JobPortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/Auth/profile.css') }}">
</head>
<body>

@include('partials.header')

<div class="page-content-wrapper">
    <div class="profile-container">
        
        <div class="profile-card">
           
            <div class="profile-header">
                <div class="profile-avatar">
                   
                    {{ substr(auth()->user()->username, 0, 1) }}
                </div>
                <div class="profile-title">
                    <h2>Welcome back, {{ auth()->user()->username }}!</h2>
                    <p>Manage your account information and job status.</p>
                </div>
            </div>

            
            <div class="profile-details">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if($errors->has('document'))
                    <div class="alert alert-danger">{{ $errors->first('document') }}</div>
                @endif

                <div class="detail-item">
                    <label>Username</label>
                    <div class="detail-value">{{ auth()->user()->username }}</div>
                </div>

                <div class="detail-item">
                    <label>Email Address</label>
                    <div class="detail-value">{{ auth()->user()->email }}</div>
                </div>

                <div class="file-path">
                    <label>Resume</label>
                    @if(auth()->user()->file_path)
                        <a href="{{ asset('storage/' . auth()->user()->file_path) }}" target="_blank" class="resume-link">View Uploaded Resume</a>
                    @else
                        <span class="no-resume">No resume uploaded yet.</span>
                    @endif
                </div>

                <!-- <form action="{{ route('upload.document') }}" method="POST" enctype="multipart/form-data" class="upload-form">
                    @csrf
                    <div class="form-group">
                        <label for="document" class="form-label">Upload Resume</label>
                        <input id="document" type="file" name="document"
                            class="form-input @error('document') is-invalid @enderror">
                        @error('document')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-submit">Upload Resume</button>
                </form> -->
            </div>
        </div>

    </div>
</div>

</body>
</html>
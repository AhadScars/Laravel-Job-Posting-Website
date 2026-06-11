# 💼 JobPortal - Laravel Job Board Platform

A modern, fully-functional job board web application built with **Laravel**. JobPortal enables companies to post job openings and job seekers to browse, search, and apply for positions—all with a responsive, user-friendly interface.

---

## ✨ Key Features

### 👥 User Authentication & Profile Management
- **User Registration** with optional resume upload during signup
- **Secure Login** with session-based authentication and remember-me option
- **User Profile Page** with resume upload, update, and download functionality
- **Resume Storage** supporting PDF, DOC, DOCX (max 2MB per file)

### 💼 Job Management (Admin-Only)
- **Post Jobs** — Admin form to create new job listings with full details
- **Edit Jobs** — Modify job title, description, company, location, and salary
- **Delete Jobs** — Remove job postings with confirmation dialog
- **Admin Authorization** — Only `is_admin` flagged users can manage jobs

### 🔍 Job Browsing & Search (Public)
- **Job Listings Grid** — Clean 3-column responsive layout showing all active jobs
- **Search Functionality** — Filter by job title, description, company, location, or salary
- **Job Details Page** — Full job information with applicant details
- **Smart Pagination** — 6 jobs per page with Bootstrap 5 navigation

### 📨 Job Applications
- **Apply for Jobs** — Authenticated users can submit applications (prevents duplicate applications)
- **Application Tracking** — Admin dashboard shows all received applications
- **Applicant Info** — View applicant name, email, resume, and application date
- **Automatic Notifications** — Track who applied for which position in real-time

### 📊 Admin Dashboard
- **Applications Overview** — Table displaying all job applications received
- **Live Metrics** — Total registered users and active job listings
- **Quick Actions** — Shortcuts to post new jobs or manage listings
- **Applicant Resumes** — Direct download links to candidate resumes

### 🎨 Responsive Design
- **Mobile-Friendly Navigation** with dynamic authentication-aware menu
- **Custom CSS3 Design** with CSS variables for consistent theming
- **Inter Font Family** throughout for modern typography
- **Emoji Icons** (🔍, ⚡, 📍, ₹) for enhanced UX

---

## 🛠️ Tech Stack

| Component | Technology |
|-----------|-----------|
| **Backend Framework** | Laravel 12.0 |
| **Language** | PHP 8.2+ |
| **Database** | MySQL / PostgreSQL |
| **Frontend** | Blade Templates + Vanilla CSS3 |
| **Build Tool** | Vite |
| **Testing Framework** | PHPUnit |
| **Authentication** | Laravel Session Guard + Eloquent |
| **Storage** | Local filesystem with public symlink |

---

## 📦 Installation & Setup

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & npm
- MySQL or PostgreSQL database

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/jobportal.git
cd jobportal
```

### 2. Install Dependencies
```bash
composer install
npm install
npm run dev
```

### 3. Configure Environment
```bash
cp .env.example .env
```

Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jobportal_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Generate App Key & Run Migrations
```bash
php artisan key:generate
php artisan migrate
php artisan storage:link
```

### 5. Start the Development Server
```bash
php artisan serve
```

Visit `http://127.0.0.1:8000` to access the application.

---

## 📂 Project Structure

```
JobPortal/
├── app/
│   ├── Models/
│   │   ├── User.php              # User model with is_admin flag
│   │   ├── Joblist.php           # Job listing model
│   │   └── AppliedJobs.php       # Job application tracking
│   └── Http/Controllers/
│       ├── UserController.php    # Auth & profile management
│       └── JoblistController.php # Job CRUD & applications
├── database/
│   ├── migrations/               # Database schema definitions
│   └── seeders/                  # Sample data seeders
├── resources/views/
│   ├── Auth/                     # Login, register, profile pages
│   ├── partials/                 # Header, footer components
│   ├── welcome.blade.php         # Homepage
│   ├── jobs.blade.php            # Job listings & search
│   ├── job_details.blade.php     # Individual job page
│   ├── post_job.blade.php        # Admin job creation form
│   ├── editjobdetails.blade.php  # Admin job editing form
│   ├── dashboard.blade.php       # Admin dashboard with applications
│   ├── about.blade.php           # About page
│   └── contact.blade.php         # Contact page
├── public/
│   ├── css/                      # Custom stylesheets
│   ├── storage/                  # Symlink to storage/app/public
│   └── index.php                 # Entry point
├── routes/
│   └── web.php                   # All application routes
└── storage/
    ├── app/public/documents/     # Resume file storage
    └── logs/                     # Application logs
```

---

## 🔐 Database Schema

### Users Table
```sql
id | username | email | password | file_path | is_admin | timestamps
```

### Joblists Table
```sql
id | title | description | company | location | salary | timestamps
```

### AppliedJobs Table
```sql
id | user_id (FK) | job_id (FK) | timestamps
```

---

## 🚦 Routes Overview

| Method | Route | Controller | Auth | Admin | Purpose |
|--------|-------|-----------|------|-------|---------|
| GET | `/` | - | - | - | Homepage |
| GET | `/jobs` | JoblistController@index | - | - | View all jobs |
| GET | `/jobs/{id}` | JoblistController@show | - | - | Job details |
| POST | `/jobs/{id}/apply` | JoblistController@apply | ✅ | - | Apply for job |
| GET | `/post_job` | JoblistController@job | ✅ | ✅ | Post job form |
| POST | `/post_job` | JoblistController@store | ✅ | ✅ | Create job |
| GET | `/jobs/{id}/edit_job` | JoblistController@edit | ✅ | ✅ | Edit job form |
| PUT | `/jobs/{id}/edit_job` | JoblistController@update | ✅ | ✅ | Update job |
| DELETE | `/jobs/{id}/delete_job` | JoblistController@destroy | ✅ | ✅ | Delete job |
| GET | `/dashboard` | - | ✅ | - | Admin dashboard |
| GET | `/profile` | UserController@profile | ✅ | - | User profile |
| POST | `/upload` | UserController@uploadDocument | ✅ | - | Upload resume |
| GET | `/Auth/register` | UserController@register | - | - | Register form |
| POST | `/Auth/register` | UserController@store | - | - | Create user |
| GET | `/Auth/login` | UserController@login | - | - | Login form |
| POST | `/Auth/login` | UserController@authenticate | - | - | Authenticate |
| POST | `/logout` | UserController@logout | ✅ | - | Logout |

---

## 💡 Usage Examples

### For Job Seekers
1. **Sign Up** → Register with optional resume
2. **Browse Jobs** → Explore listings with search filters
3. **Apply** → Submit applications (one per job)
4. **Track Profile** → Update resume from profile page
5. **View Details** → See complete job information before applying

### For Admins
1. **Post Jobs** → Navigate to "Post a Job" in admin menu
2. **Manage Listings** → Edit or delete existing jobs
3. **Track Applications** → View dashboard to see who applied
4. **Download Resumes** → Access candidate resumes directly from dashboard

---

## 🔒 Security Features

- **Password Hashing** — All passwords bcrypted using Laravel's native hashing
- **CSRF Protection** — Token validation on all state-changing requests
- **SQL Injection Prevention** — Eloquent ORM parameterized queries
- **File Upload Validation** — Type checking and size limits on resumes
- **Authentication Middleware** → Protected routes require login
- **Authorization Checks** → Admin-only features verified server-side
- **Session Management** — Secure session handling with remember-me tokens

---

## 🧪 Testing

Run tests using PHPUnit:
```bash
php artisan test
```

Run specific test file:
```bash
php artisan test tests/Feature/ExampleTest.php
```

---

## 📝 Environment Variables

Key environment variables in `.env`:
```env
APP_NAME=JobPortal
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jobportal_db
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
```

---

## 🐛 Troubleshooting

**Issue: "The storage directory is not writable"**
```bash
chmod -R 775 storage bootstrap/cache
```

**Issue: "CSRF token mismatch"**
- Ensure `@csrf` is included in all POST/PUT/DELETE forms

**Issue: "Resume not downloading"**
- Verify storage symlink exists: `php artisan storage:link`
- Check file permissions in `storage/app/public/documents/`

**Issue: Applications not showing in dashboard**
- Ensure migrations ran: `php artisan migrate`
- Verify user is logged in and `is_admin` flag is true in database

---

## 🤝 Contributing

Contributions are welcome! Please fork the repository and submit pull requests for any improvements.

---

## 📄 License

This project is open source and available under the MIT License.

---

## 👨‍💻 Author

Created with ❤️ as a modern job board platform for connecting talent with opportunities.
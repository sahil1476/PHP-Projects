# Job Portal Application

This is a PHP Laravel-based web application designed for job seekers and employers. Job seekers can browse available job postings, while employers can post job listings and manage them.

---

## Features

- **Job Posting**: Employers can create and manage job postings.
- **Job Listings**: Job seekers can browse and view job details.
- **User Authentication**: Secure registration and login for users.
- **Responsive Design**: Mobile-first design with Tailwind CSS for styling.
- **Database**: SQLite is used as the database for simplicity and portability.

---

## Installation

### Prerequisites

- PHP >= 8.0
- Composer
- Laravel >= 10.x
- Node.js (for frontend assets)
- SQLite or any other supported database

### Steps

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-repo-name/job-portal.git
   cd job-portal
   
2. Install Dependencies:
   ```
   composer install
   npm install && npm run dev

3. Set Up Environment:

   ```
   cp .env.example .env


 Update the .env file with your settings. For SQLite:
```
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite

touch database/database.sqlite
```
4. Run Migrations:
   ```
   php artisan migrate

6. Start the Development Server:
 ```
php artisan serve
```
#### Visit the application at http://127.0.0.1:8000.

## Usage
1. Register an Account:
   Navigate to /register to create a new account.
2. Login:
   Access /login to sign in.
3. Post a Job:
   After logging in, go to /jobs/create to post a job listing.
4. View Jobs: 
   Visit /jobs to view all available job postings.

### Styling
This application uses Tailwind CSS for styling. Customize styles in the tailwind.config.js file and recompile assets using:
```
npm run dev
```

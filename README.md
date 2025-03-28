# ClaimTech Claims Management System

## Project Overview

This is a Laravel 10 and Vue 3 based claims management application that allows user registration, document upload, and claim submission.

## Technical Stack

- Backend: Laravel 10
- Frontend: Vue 3
- Styling: TailwindCSS
- Validation: Zod
- Storage: AWS S3 (or local storage fallback)
- Database: MySQL

## Setup Instructions

### Prerequisites

- PHP 8.1+
- Composer
- Node.js 16+
- MySQL
- AWS S3 Account (optional)

### Installation Steps

1. Clone the repository
```bash
git clone https://github.com/kgaugelobopape/claimtech-claims-management.git
cd claimtech-claims-management
```

2. Install PHP dependencies
```bash
composer install
```

3. Install Node.js dependencies
```bash
npm install
```

4. Copy environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure Database
- Create a MySQL database
- Update `.env` file with database credentials

7. Configure Storage (S3 or Local)
- For S3: Add AWS credentials to `.env`
- For local storage: Ensure `storage/app/public` is configured

8. Run Migrations
```bash
php artisan migrate
```

9. Compile Frontend Assets
```bash
npm run dev
```

10. Start Development Server
```bash
php artisan serve
```

## Project Roadmap

### 1. User Registration
- [ ] Create users table migration
- [ ] Implement Laravel authentication
- [ ] Create middleware for authenticated routes
- [ ] Automatic login after registration

### 2. Document Upload
- [ ] Modify users table for document paths
- [ ] Implement file compression
- [ ] S3/Local storage upload
- [ ] Store file paths in users table

### 3. Claim Submission
- [ ] Create claims table migration
- [ ] Set up Eloquent relationships
- [ ] Create claim submission API endpoint
- [ ] Integrate Postman Echo API
- [ ] Capture claim details with UUID

### 4. Claim Viewing
- [ ] Create API endpoint for user claims
- [ ] Implement structured JSON response

## Frontend Components

- [ ] User Registration Form
- [ ] Claim Submission Form
- [ ] File Upload Component
- [ ] Claim Listing Page

## Challenges and Considerations

1. File Compression: Implement efficient image/document compression
2. API Integration: Handle Postman Echo API responses
3. Validation: Robust input validation with Zod
4. Security: Ensure middleware and authentication are secure

## Commit Strategy

- Commit before starting each task
- Commit after completing each task
- Use descriptive commit messages

## Testing

- Run PHP unit tests: `php artisan test`
- Run frontend tests: `npm run test`

## Potential Improvements

- Create more comprehensive test coverage

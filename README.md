# Laravel Example Application

A Laravel-based job board application demonstrating various Laravel features including Eloquent relationships, authentication, authorization, and CRUD operations.

## About This Project

This is a sample Laravel application that showcases a job board system where users can view, create, edit, and delete job listings. The application includes user authentication, employer management, and a tagging system for jobs and posts.

### Key Features

- **Job Management**: Full CRUD operations for job listings
- **User Authentication**: Registration and login functionality  
- **Employer System**: Manage employers and their associated jobs
- **Tagging System**: Flexible tagging for jobs and posts
- **Vehicle Counting**: Additional feature for tracking vehicle counts by location
- **Authorization**: Policy-based access control for job editing

## Tech Stack

### Backend
- **PHP**: ^8.2
- **Laravel Framework**: ^11.9
- **Database**: SQLite (development)
- **Authentication**: Laravel Sanctum ^4.0

### Frontend
- **Vite**: ^5.0 (Build tool)
- **Tailwind CSS**: ^3.4.13 (Styling)
- **Blade Templates**: Laravel's templating engine

### Development Tools
- **Laravel Debugbar**: ^3.14 (Development debugging)
- **Laravel Pint**: ^1.13 (Code formatting)
- **Laravel Sail**: ^1.26 (Docker development environment)
- **PHPUnit**: ^11.0.1 (Testing)

## Database Schema

The application includes the following main entities:

- **Users**: Authentication and user management
- **Employers**: Company/employer information linked to users
- **Job Listings**: Job postings with title, salary, and employer relationship
- **Tags**: Tagging system for jobs and posts
- **Posts**: Content management with tag relationships
- **Vehicle Counts**: Location-based vehicle counting system

## Installation & Setup

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js and npm

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd example-app
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   ```bash
   # SQLite database will be created automatically
   php artisan migrate
   ```

6. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

7. **Build frontend assets**
   ```bash
   npm run build
   # Or for development with hot reload:
   npm run dev
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

The application will be available at `http://localhost:8000`

## Application Structure

### Models & Relationships
- **User → Employer**: One-to-one relationship
- **Employer → Jobs**: One-to-many relationship  
- **Job → Tags**: Many-to-many relationship
- **Post → Tags**: Many-to-many relationship

### Controllers
- `JobController`: Handles job CRUD operations
- `RegisterController`: User registration
- `SessionController`: Authentication
- `VehicleCountController`: Vehicle counting functionality

### Key Routes
- `/` - Home page
- `/jobs` - Job listings with pagination
- `/jobs/{job}` - Individual job view
- `/job/create` - Create new job (authenticated)
- `/job/{job}/edit` - Edit job (authorized users only)
- `/login` - User login
- `/register` - User registration

## Features in Detail

### Authentication & Authorization
- User registration and login system
- Policy-based authorization for job editing
- Protected routes using middleware

### Job Management
- Browse job listings with pagination
- Create new job postings
- Edit existing jobs (with proper authorization)
- Delete job listings
- Jobs are linked to employers

### Database Features
- Eloquent ORM relationships
- Model factories for testing/seeding
- Database migrations for version control
- Polymorphic tagging system

## Development

### Code Quality
- **Laravel Pint**: Automatic code formatting
- **Laravel Debugbar**: Development debugging tools
- **PHPUnit**: Unit and feature testing

### Frontend Development
```bash
# Development with hot reload
npm run dev

# Production build
npm run build
```

### Testing
```bash
# Run all tests
php artisan test

# Run specific test suite
./vendor/bin/phpunit
```

## Documentation & Resources

### Laravel Documentation
- [Laravel Documentation](https://laravel.com/docs) - Official Laravel documentation
- [Laravel Bootcamp](https://bootcamp.laravel.com) - Learn Laravel from scratch
- [Laracasts](https://laracasts.com) - Video tutorials for Laravel and PHP

### Key Laravel Concepts Demonstrated
- **Eloquent ORM**: Model relationships and database interactions
- **Blade Templates**: Server-side templating
- **Route Model Binding**: Automatic model injection
- **Middleware**: Request filtering and authentication
- **Policies**: Authorization logic
- **Migrations**: Database version control
- **Factories & Seeders**: Test data generation

## Contributing

Thank you for considering contributing to this Laravel example application! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# PostIt - Strength Sport Coaching App

A Laravel-based strength sport coaching platform with user management, payment processing, statistics, graphs, and exercise tracking capabilities.

## Tech Stack

- **Backend**: PHP 8.3 + Laravel 13
- **Authentication**: Laravel Sanctum (API tokens)
- **Database**: SQLite (default, configurable to MySQL/PostgreSQL)
- **Frontend**: HTML/CSS/JavaScript (static files in `/public`)

## Features

### Current Implementation

- ✅ Landing page
- ✅ Login page
- ✅ RESTful API with authentication
- ✅ Admin back office interface
- ✅ User management system
- ✅ Role-based access control (Admin/User)

### Planned Features

- Payment processing integration
- Performance statistics and analytics
- Interactive graphs and charts
- Exercise library and tracking
- Workout programming

## Installation

1. **Install Dependencies**
   ```bash
   composer install
   ```

2. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database Setup**
   ```bash
   php artisan migrate
   ```

4. **Start Development Server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

## API Endpoints

### Public Routes

- `POST /api/register` - Register new user
- `POST /api/login` - Login user

### Protected Routes (require authentication)

- `POST /api/logout` - Logout user
- `GET /api/user` - Get authenticated user

### Admin Routes (require admin privileges)

- `GET /api/admin/users` - List all users
- `POST /api/admin/users` - Create new user
- `GET /api/admin/users/{id}` - Get user details
- `PUT /api/admin/users/{id}` - Update user
- `DELETE /api/admin/users/{id}` - Delete user

## Admin Panel

Access the admin panel at:

- Dashboard: `http://localhost:8000/admin`
- User Management: `http://localhost:8000/admin/users`

## Authentication

The API uses Laravel Sanctum for token-based authentication.

### Login Example

```bash
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{"email":"user@example.com","password":"password"}'
```

Response:
```json
{
  "access_token": "1|xxxxxxxxxxxxxx",
  "token_type": "Bearer",
  "user": {
    "id": 1,
    "name": "User Name",
    "email": "user@example.com",
    "is_admin": false
  }
}
```

### Making Authenticated Requests

```bash
curl -X GET http://localhost:8000/api/user \
  -H "Authorization: Bearer 1|xxxxxxxxxxxxxx"
```

## Database Schema

### Users Table

- `id` - Primary key
- `name` - User's full name
- `email` - Unique email address
- `password` - Hashed password
- `is_admin` - Boolean flag for admin access
- `email_verified_at` - Email verification timestamp
- `remember_token` - Remember me token
- `created_at` - Creation timestamp
- `updated_at` - Last update timestamp

## Development

### Running Tests

```bash
php artisan test
```

### Code Style

```bash
./vendor/bin/pint
```

## Project Structure

```
.
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/
│   │   │   │   └── AuthController.php
│   │   │   └── Admin/
│   │   │       ├── DashboardController.php
│   │   │       └── UserController.php
│   │   └── Middleware/
│   │       └── AdminMiddleware.php
│   └── Models/
│       └── User.php
├── database/
│   └── migrations/
├── public/
│   ├── index.html (Landing page)
│   ├── login.html (Login page)
│   └── styles.css
├── resources/
│   └── views/
│       └── admin/
│           ├── dashboard.blade.php
│           └── users.blade.php
└── routes/
    ├── api.php (API routes)
    └── web.php (Web routes)
```

## Security

- Passwords are hashed using bcrypt
- API authentication via Sanctum tokens
- Admin routes protected by middleware
- CSRF protection enabled for web routes
- SQL injection prevention via Eloquent ORM

## License

Proprietary - All rights reserved

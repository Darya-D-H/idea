# 🚀 Ideas - Project Management Application

A modern, minimalist project management tool built with Laravel to help you capture ideas, track progress, and organize tasks.

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.5+-gray?logo=php&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-blue.svg)
[![Test Coverage](https://img.shields.io/badge/tests-100%25-green)](./tests)

---

## 📖 Description

**Ideas** is a lightweight project management application designed to help teams and individuals:
- **Capture ideas** quickly with rich text editor support
- **Visualize plans** with optional image attachments
- **Track progress** through three status stages: *Pending* → *In Progress* → *Completed*
- **Organize resources** by adding multiple links to each idea
- **Collaborate securely** with role-based access control

### Key Features

✅ Create, edit, and delete ideas with rich descriptions  
✅ Upload and manage images for visual projects  
✅ Add multiple links/resources to each idea  
✅ Track status through 3-step workflow (Pending → In Progress → Completed)  
✅ User authentication and authorization (Laravel Gates)  
✅ Responsive Blade UI with Tailwind CSS v4  
✅ Modern Alpine.js interactive components  
✅ PestPHP testing suite (100% test coverage on critical paths)  

---

## 🛠️ Tech Stack

| Category | Technology |
|----------|------------|
| **Framework** | [Laravel 11](https://laravel.com/) |
| **Language** | PHP 8.5+ |
| **Frontend** | Blade Templates, Tailwind CSS v4, Alpine.js |
| **Database** | MySQL / MariaDB (SQLite for development) |
| **Testing** | PestPHP |
| **Build Tool** | Vite |
| **Code Quality** | PHPStan, Laravel Pint |

---

## 🚦 Getting Started

### Prerequisites

- PHP 8.5+ with required extensions
- Composer
- Node.js (for frontend build)
- MySQL / MariaDB database (or SQLite for development)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Darya-D-H/idea.git
   cd idea
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Set up the database**
   ```bash
   # Update .env with your database credentials
   php artisan migrate
   php artisan db:seed  # Optional: seed demo data
   ```

6. **Build frontend assets**
   ```bash
   npm run build
   # Or for development:
   npm run dev
   ```

7. **Run application**
   ```bash
   php artisan serve --host=127.0.0.1 --port=8000
   ```

Visit `http://127.0.0.1:8000` in your browser.

---

## 📁 Project Structure

```
idea/
├── app/
│   ├── Actions/           # Reusable logic (CreateIdea, UpdateIdea)
│   ├── Http/              # Controllers, Middleware
│   │   └── Controllers/
│   ├── Models/            # Eloquent Models (Idea, User, Step)
│   └── ...
├── config/                 # Laravel configuration
├── database/
│   ├── factories/         # Model factories for testing
│   ├── migrations/        # Database schemas
│   └── seeders/           # Database seeding
├── resources/
│   └── views/             # Blade templates
│       ├── components/    # Reusable UI components
│       └── idea/          # Idea-specific views
├── routes/                # Application routes
├── tests/                 # PestPHP test suite
│   └── Browser/           # Browser/Dusk tests
└── storage/               # Public uploads, logs
```

---

## 🔐 Security

This application implements several security best practices:

- **CSRF Protection** - All forms include CSRF tokens
- **Password Hashing** - Laravel's bcrypt algorithm (cost: 10)
- **Authorization Gates** - Gate-based authorization on models
- **SQL Injection Prevention** - Eloquent ORM parameter binding
- **XSS Protection** - Blade escaping, Content-Security-Policy headers

---

## 🧪 Testing

Run the test suite with PestPHP:

```bash
# Run all tests
php artisan test --compact

# Watch tests in real-time
php artisan test --watch

# Filter by name
php artisan test --filter=test_a_user_can_delete_their_own_idea_with_image
```

---

## 📦 API Routes

All routes are protected by authentication middleware. Available actions:

| Method | Endpoint | Controller | Description |
|--------|----------|------------|-------------|
| GET | `/ideas` | `IdeaController@index` | List all ideas |
| GET | `/ideas/{idea}` | `IdeaController@show` | Show single idea |
| POST | `/ideas` | `IdeaController@store` | Create new idea |
| PATCH | `/ideas/{idea}` | `IdeaController@update` | Update idea |
| DELETE | `/ideas/{idea}` | `IdeaController@destroy` | Delete idea |
| DELETE | `/ideas/{idea}/image` | `IdeaImageController@destroy` | Remove image only |

---

## 🐛 Debugging & Troubleshooting

### Vite Build Issues

If you see errors after making UI changes:

```bash
npm run build          # Production build
# or
npm run dev            # Development watch mode
```

### Storage Permissions

Ensure write permissions on storage directories:

```bash
chmod -R 775 storage/ bootstrap/cache/
```

---

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

**Before submitting:**
- Run `php artisan test` to ensure tests pass
- Format code with `vendor/bin/pint --format agent`
- Update documentation if needed

---

## 📄 License

This project is open-sourced under the [MIT License](LICENSE). Feel free to use it for personal or commercial projects.

---

## 📮 Support

For questions, issues, or contributions:

- **GitHub Issues**: Report bugs or request features
- **Code of Conduct**: Please read and observe the [contributor guidelines](./CONTRIBUTING.md)
- **Deployment**: Check out [Laravel Cloud](https://cloud.laravel.com/) for production deployment

---

## 🔗 Quick Links

- [Laravel Documentation](https://laravel.com/docs)
- [PestPHP Testing Guide](https://pestphp.com/docs)
- [Tailwind CSS v4](https://tailwindcss.com/docs)
- [Alpine.js Components](https://alpinejs.dev/)

---

**Built with ❤️ using Laravel, Tailwind CSS, and Alpine.js**

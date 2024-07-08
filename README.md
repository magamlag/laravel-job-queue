# Laravel API with Job Queue, Database, and Event Handling

##Objective
Create a Laravel API that demonstrates your proficiency with Laravel's job queues, database operations, migrations, and event handling. This test should take approximately 2-3 hours to complete.

##Requirements
###API Endpoint: 
Develop a single API endpoint `/submit` that accepts a `POST` request with the following JSON payload structure:

{
"name": "John Doe",
"email": "john.doe@example.com",
"message": "This is a test message."
}

###Validate the data: 
(ensure `name`, `email`, and `message` are present).

###Database Setup: 
Use Laravel migrations to create a table named `submissions` with columns for `id`, `name`, `email`, `message`, and timestamps (`created_at` and `updated_at`).

###Job Queue: 
Upon receiving the API request, the data should not be immediately saved to the database. Instead, dispatch a Laravel job to process the data. The job should perform the following tasks:
Save the data to the `submissions` table in the database.

###Events: 
After the data is successfully saved to the database, trigger a Laravel event named `SubmissionSaved`. Attach a listener to this event that logs a message indicating a successful save, including the `name` and `email` of the submission.

###Error Handling: 
Implement error handling for the API to respond with appropriate messages and status codes for the following scenarios:
Invalid data input (e.g., missing required fields).
Any errors that occur during the job processing.

### Documentation:
Briefly document the following in a README file:
Instructions on setting up the project and running migrations.
A simple explanation of how to test the API endpoint.
Write a simple Unit test.

### Deliverables:
Source code for the Laravel project, including all migrations, models, controllers, jobs, and event classes.
A README file with setup and testing instructions.
Submission Instructions
Please submit your project as a link to a GitHub repository. Ensure that any necessary setup instructions are included in your README to facilitate the review of your project.
--------------------------------------------------------
## Setup

1. Clone the repository
2. Install dependencies: `composer install`
3. Configure your `.env` file with your database credentials
4. Run migrations: `php artisan migrate`
5. Start the queue worker: `php artisan queue:work`

## Testing

To test the API endpoint, you can use the following command:

```bash
php artisan test


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

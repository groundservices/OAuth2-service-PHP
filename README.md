<h1 align="center" style="font-weight: bold;"><a href="#" target="_blank">Groundservices/Auth-service-PHP</a></h1>
<br>
<p align="center">
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://travis-ci.com/groundservices/OAuth2-service-PHP.svg" alt="Build Status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://sonarcloud.io/api/project_badges/measure?project=groundservices_OAuth2-service-PHP&metric=alert_status" alt="quality gate status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://sonarcloud.io/api/project_badges/measure?project=groundservices_OAuth2-service-PHP&metric=security_rating" alt="quality gate status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://sonarcloud.io/api/project_badges/measure?project=groundservices_OAuth2-service-PHP&metric=vulnerabilities" alt="quality gate status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/groundservices/OAuth2-service-PHP"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img alt="GitHub" src="https://img.shields.io/github/license/groundservices/OAuth2-service-PHP"></a>
</p>

## About Groundservices

Groundservices is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Groundservices takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Groundservices is accessible, powerful, and provides tools required for large, robust applications.

## OAuth2-service-php installation
### Requirements
- Laravel 7.x
- PHP 7.x.x

### Process
1. Clone the repo
2. Run the `composer install` command
3. Migrate the database
```
php artisan migrate
```
4. Create the encryption keys needed to generate secure access tokens. In addition, the command will create "personal access" and "password grant" clients which will be used to generate access tokens:
```
php artisan passport:install
```
-Optional: If you prefer to use UUIDs instead of auto increment values.
```
php artisan passport:install --uuids
```
5. Add the personal access client ID and secret values to your .env file (You can find them in the terminal after running the command in STEP 4. You can also find them in your database)
```
PASSPORT_PERSONAL_ACCESS_CLIENT_ID=client-id-value
PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET=unhashed-client-secret-value
```

## Groundservices/Auth-serivce-php Docs

Groundservices has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

## Groundservices Sponsors

We would like to extend our thanks to the following sponsors for funding Groundservices development. If you are interested in becoming a sponsor, please visit the Groundservices [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to Groundservices! The contribution guide can be found in the [Groundservices documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Groundservices community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Groundservices, please send an e-mail to Taylor Otwell via [mcjohnsonlyndon@gmail.com](mailto:mcjohnsonlyndon@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Auth service is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

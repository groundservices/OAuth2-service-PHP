<h1 align="center" style="font-weight: bold;"><a href="#" target="_blank">OAuth2-service-PHP</a></h1>
<br>
<p align="center">
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://travis-ci.com/groundservices/OAuth2-service-PHP.svg" alt="Build Status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://sonarcloud.io/api/project_badges/measure?project=groundservices_OAuth2-service-PHP&metric=alert_status" alt="quality gate status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://sonarcloud.io/api/project_badges/measure?project=groundservices_OAuth2-service-PHP&metric=security_rating" alt="quality gate status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://sonarcloud.io/api/project_badges/measure?project=groundservices_OAuth2-service-PHP&metric=vulnerabilities" alt="quality gate status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img alt="GitHub" src="https://img.shields.io/github/license/groundservices/OAuth2-service-PHP"></a>
</p>

## About OAuth2 service

The OAuth2 service is a highly capable and customizable authentication micresoervice built on top of the laravel framework. We believe development of microservices can be enjoyable as definitely shouldn't be time consuming at all. Groundservices OAuth2 service takes the pain out of authentication developoment by scaffolding basic components of an authentication service, while leaving room for customization with extra features.

## OAuth2-service-php setup guide
### Requirements
- Laravel 7.x
- PHP 7.x.x

### Installation
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

Groundservices has the most extensive and thorough [documentation](#), making it a breeze to get started with the micro services.

## Groundservices Sponsors

We would like to extend our thanks to our sponsors for funding Groundservices development. If you are interested in becoming a sponsor, please visit the Groundservices [Patreon page](https://www.patreon.com/lyndonmcjohnson).

## Contributing

Thank you for considering contributing to Groundservices! The contribution guide can be found in the [Groundservices documentation](#).

## Code of Conduct

In order to ensure that the Groundservices community is welcoming to all, please review and abide by the [Code of Conduct](#).

## Security Vulnerabilities

If you discover a security vulnerability within Groundservices, please send an e-mail to Taylor Otwell via [mcjohnsonlyndon@gmail.com](mailto:mcjohnsonlyndon@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The OAuth2 service is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

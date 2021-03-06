<h1 align="center" style="font-weight: bold;"><a href="#" target="_blank">Groundservices OAuth2</a></h1>
<br>
<p align="center">
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://travis-ci.com/groundservices/OAuth2-service-PHP.svg" alt="Build Status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://sonarcloud.io/api/project_badges/measure?project=groundservices_OAuth2-service-PHP&metric=alert_status" alt="quality gate status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://sonarcloud.io/api/project_badges/measure?project=groundservices_OAuth2-service-PHP&metric=security_rating" alt="quality gate status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img src="https://sonarcloud.io/api/project_badges/measure?project=groundservices_OAuth2-service-PHP&metric=vulnerabilities" alt="quality gate status"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img alt="GitHub" src="https://img.shields.io/github/license/groundservices/OAuth2-service-PHP"></a>
<a href="https://github.com/groundservices/OAuth2-service-PHP"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/groundservices/oauth2-service"></a>
</p>

## Introduction

The groundservices OAuth2 is a highly capable and customizable authentication micresoervice built on top of the laravel framework. We believe that development of micro services can be enjoyable and definitely shouldn't be time consuming. Groundservices OAuth2 service takes the pain out of authentication developoment by scaffolding basic components of an authentication service, while leaving room for customization with extra features.

## Setup guide
### Requirements
- <a href="https://getcomposer.org/">Composer</a>
- PHP 7.x.x

### Installation
1. Install the OAuth2 project
```
composer create-project groundservices/OAuth2 <project-name>
```
2. Run the `composer install && composer update` command to install and update dependancies
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

### Usage
The OAuth2 service is used by making API calls to the service from a seaparate front end which may either reside on the same domain or an entirely fifferent domain.
Below are the available endpoints to intereact to with the OAuth2 service.
Note that it is strongly recommended to channel the requests through an API gateway rather than directly from the front end app.

- register:`/api/register`
- login:`/api/login`
- logout:`/api/logout`
- login with github`/api/login/github`


## Security Vulnerabilities

If you discover a security vulnerability within Groundservices, please send an e-mail to Taylor Otwell via [mcjohnsonlyndon@gmail.com](mailto:mcjohnsonlyndon@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The OAuth2 service is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

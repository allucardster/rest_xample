RESTxample
==========

Just an small example related with RESTful api with Symfony

Requirements
============

- Apache 2.4
- PHP >= 5.5
- MySQL >= 5.x
- Composer
- Git

Instalation
===========

1. Clone this repository
2. Create rest_xample/app/config/parameters.yml file from parameters.yml.dist
3. Create database (according parameters.yml.dist)
4. From the command-line:
```
:~$ cd rest_xample
:~$ composer install
:~$ app/console doctrine:schema:update --force
:~$ app/console fos:user:create
:~$ app/console restxample:oauth-server:create-client --redirect-uri=www.restxampleclient.dev --grant-type=password --grant-type=client_credentials --grant-type=refresh_token
```

Contributors
============

- Richard Melo [Twitter](@allucardster), [Linkedin](https://co.linkedin.com/in/richardmelo)

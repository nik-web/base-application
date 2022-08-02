# Base application with Laminas MVC framework

## Introduction

This is a base application using the Laminas MVC layer and module
systems. This application is meant to be used as a starting place for the de_DE location.

## Installation using GitHub and Composer

The easiest way to create a new base application for de_DE with Laminas MVC is 
to use this Repository on GitHub
https://github.com/nik-web/base-application.git
[Composer](https://getcomposer.org/). If you don't have it already installed,
then please install as per the [documentation](https://getcomposer.org/doc/00-intro.md).

To create your new base-application:
Folder to clone into:

```bash
$ mkdir /home/<username>/www/html/
$ cd /home/<username>/www/html/
$ git clone https://github.com/nik-web/base-application.git
```
This will download the project to a folder named after the Git repository ("base-application" in this case).
If you want a different folder name, simply specify it as the last parameter:

```bash
$ git clone https://github.com/nik-web/base-application.git other-name
```
Composer install:

```bash
$ composer install
```
Change the rights for the following directory:
```bash
$ chown -R www-data:www-data data
$ chmod -R 775 data
```
Add your provider data to the web application:
Copy the file without the .dist extension and change the values of the constants.
```bash
$ cp module/Application/src/ValueObject/Provider.php.dist module/Application/src/ValueObject/Provider.php
```

Once installed, you can test it out immediately using PHP's built-in web server:

```bash
$ cd path/to/install
$ php -S 0.0.0.0:8080 -t public
```
This will start the cli-server on port 8080, and bind it to all network
interfaces. You can then visit the site at http://localhost:8080/
- which will bring up Laminas MVC Skeleton welcome page.

**Note:** The built-in CLI server is *for development only*.

## Running Unit Tests

To run the unit tests, you need to do one of the following:

- Install the MVC test support with [laminas-test](https://docs.laminas.dev/laminas-test/)

  ```bash
  $ composer require --dev laminas/laminas-test
  ```

Once testing support is present, you can run the tests using:

```bash
$ ./vendor/bin/phpunit
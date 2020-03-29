# Base application with Laminas MVC framework

## Introduction

This is a base application using the Laminas MVC layer and module
systems. This application is meant to be used as a starting place for german 
webaplicationes.

## Installation using Git and Composer

The easiest way to create a new Laminas MVC project is to use
[Composer](https://getcomposer.org/). If you don't have it already installed,
then please install as per the [documentation](https://getcomposer.org/doc/00-intro.md).

To create your new Laminas MVC project:

Folder to clone into:

```bash
$ cd /var/www/html/
$ git clone https://github.com/nik-web/base-application.git
```
This will download the project to a folder named after the Git repository ("base-application" in this case). If you want a different folder name, simply specify it as the last parameter:

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
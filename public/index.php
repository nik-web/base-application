<?php

/**
 * Base application with Laminas MVC framework
 * 
 * @link https://www.php.net/manual/en/control-structures.declare.php
 * The declare construct is used to set execution directives for a block of code.
 * @link https://www.php.net/manual/en/function.chdir
 * Changes PHP's current directory to the param "directory".
 * @link https://www.php.net/manual/en/function.dirname
 * Returns a parent directory's path.
 * @link https://www.php.net/manual/en/function.php-sapi-name
 * Returns the type of interface between web server and PHP.
 * @link https://www.php.net/manual/en/features.commandline.webserver.php
 * As of PHP 5.4.0, the CLI SAPI provides a built-in web server.
 * 
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

use Laminas\Mvc\Application;
use Laminas\Stdlib\ArrayUtils;

    
// Define application root for better file path definitions
if (! defined('PROJECT_ROOT')) {
    define('PROJECT_ROOT', realpath(__DIR__ . '/..'));
}

// Define application environment to production, to change needs to be set
// within virtual host or in the .htaccess file.
if (! defined('APPLICATION_ENV')) {
    define(
        'APPLICATION_ENV', (getenv('APPLICATION_ENV')
        ? getenv('APPLICATION_ENV')
        : 'production')
    );
}

// Display all errors when APPLICATION_ENV is development.
if (APPLICATION_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set("display_errors", '1');
}

// Everything is relative to the application root now.
chdir(dirname(__DIR__));

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url(getenv('REQUEST_URI'), PHP_URL_PATH));
    if (is_string($path) && __FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}

// Composer autoloading
include PROJECT_ROOT . '/vendor/autoload.php';

if (! class_exists(Application::class)) {
    throw new RuntimeException(
        "Unable to load application.\n"
        . "- Type `composer install` if you are developing locally.\n"
        . "- Type `vagrant ssh -c 'composer install'` if you are using Vagrant.\n"
        . "- Type `docker-compose run lamians composer install` if you are using Docker.\n"
    );
}

// Retrieve configuration
$appConfig = require PROJECT_ROOT . '/config/application.config.php';

if (file_exists(PROJECT_ROOT . '/config/development.config.php')) {
    $appConfig = ArrayUtils::merge($appConfig, require PROJECT_ROOT . '/config/development.config.php');
}

// Run the application!
Application::init($appConfig)->run();
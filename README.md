# victr-code-test

## Description

This application was developed as part of a coding challenge from VICTR.

The application fetches information about the 30 most starred PHP projects from GitHub's API, populates a MySQL database with information about them, and displays a list and single view about these entries.

I took this opportunity to write a custom framework inspired by several of my past projects. I'm not totally convinced this is a great architecture; I'm just experimenting with this design. It's a standard MVC architectural pattern with a front controller design pattern. This is configured in the Apache config file `public/.htaccess`.

## Installation

### PHP Version

PHP 7.3

### Dependencies

* MySQLi
* php-curl

## Configuration

Database credentials should be placed in `application/config/config.php` using `application/config/config.php.example` as a template. The database schema can be found in `framework/database/schema.sql`.

## License

This work is licensed under the Creative Commons Attribution 4.0 International License. To view a copy of this license, visit https://creativecommons.org/licenses/by/4.0/

## Author

Gerald Todd II\
https://gtodd.dev
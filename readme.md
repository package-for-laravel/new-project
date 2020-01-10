# Package for Laravel New Project

*Formerly Laravel Boot*

My Laravel boot up framework that I use to scaffold projects.

To create a new project with this framework, run the following command:

`composer create-project package-for-laravel/new-project $1`

Where `$1` is the folder name you'd like to install into.

## Development Notes

For these, you can run `bin/dev/artisan`, `bin/dev/composer` and `bin/dev/npm` if you're using the Docker configuration.

**Configuration**

All configuration options are defined in the `.env` file. You may change Docker settings there as well.

**Unit Testing**

`composer test` for tests (you can also use `bin/dev/test` followed by any PHPUnit arguments to run the test in docker container)

`composer test-coverage` to generate HTML coverage in `tests/html-coverage`

`vendor/bin/phpunit` to access it for specific reasons

`npm run test` for Javascript tests

**IDE Helper**

`composer ide-helper-update`

**PHP Lines of Code Generation**

`composer phploc` generates lines of code output in `docs/phploc.txt`

**JS Lines of Code**

`npm run jsloc` generates lines of code output in `docs/jsloc.txt`

**PHP Linting**

`composer php-lint` will run PHPCS, PHP-Code-Sniffer (in Dry Run) and PHP Copy Paste Detector.

## Deployment 

There is a section of the composer file that has steps for deployment.

`composer deploy` will run Laravel config and route caching.

## Laravel Boot Automated Functions

- Install Laravel from the create-project format
- Copies over `.env.example` to `.env`

## Credits

This package is created and maintained by [Aaron Saray](https://github.com/aaronsaray) 

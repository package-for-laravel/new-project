# Package for Laravel New Project

*Formerly Laravel Boot*

My Laravel boot up framework that I use to scaffold projects.

## Development Notes

For these, you can run `bin/dev/artisan` or `bin/dev/composer` if you're using the Docker configuration.

**Unit Testing**

`composer test` for tests (you can also use `bin/dev/test` followed by any PHPUnit arguments to run the test in docker container)

`composer test-coverage` to generate HTML coverage in `tests/html-coverage`

`vendor/bin/phpunit` to access it for specific reasons

`npm run test` for Javascript tests

**IDE Helper**

`composer ide-helper-update`

**PHP Lines of Code Generation**

`composer phploc` generates lines of code output in `docs/phploc.txt`

**PHP Copy Paste Detection**

`composer phpcpd` 

**PHP Code Sniffer**

`composer phpcs` does a report to standard out based on PSR12

**JS Lines of Code**

`npm run jsloc` generates lines of code output in `docs/jsloc.txt`

## Laravel Boot Automated Functions

- Install Laravel from the create-project format
- Copies over `.env.example` to `.env`
- Copies over `docker-compose.yml.example` to `docker-compose.yml`

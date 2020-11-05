# Package for Laravel New Project

```
ARCHIVED: This project is archived and no longer maintained.
```

*Formerly Laravel Boot*

My Laravel boot up framework that I use to scaffold projects.

To create a new project with this framework, run the following command:

`composer create-project package-for-laravel/new-project $1`

Where `$1` is the folder name you'd like to install into.

## Development Notes

You could technically use this project set up with something like Valet or create your own virtual machine setup. You'll
also have to worry about having a compatible version of NPM on your system (which you could manage with `nvm` should 
you want to. This is optimized to use Docker, however.  You can see the configuration in the `docker-compose.yml` file 
and the environment variable configurations in the `.env` file.

If you are using something like PHPStorm, you can configure it to use various Docker containers automatically by 
pointing it to the compose file.  Otherwise, you can use the following useful scripts:

* `bin/dev/npm` will run a compatible version of NPM in a Docker container but use your local filesystem as the source.
* `bin/dev/composer` will allow you to install composer dependencies or run composer scripts in the docker environment. Additionally, it will share your local filesystem cache to speed up working between containers.
* `bin/dev/artisan` will run the `artisan` script inside of the PHP Docker instance.
* `bin/dev/test` will run the PHP unit tests using PHPUnit.
* `bin/dev/test-with-coverage` will run those same tests, but with html coverage generated in `tests/html-coverage`.

**Different PHP Containers**

There are two different PHP containers.  The first is the base which could be used for a production-style deploy.  But, it's
basically the configuration without xdebug. The second is the php instance suffixed with `-debug` which indicates it has debug
tools loaded in it full time (like xdebug currently).  The regular instance is used to run unit tests.  The debug instance
is used for your development (so you can use debugging) and for html code coverage generation.

**Configuration**

All configuration options are defined in the `.env` file. You may change Docker settings there as well.

**Unit Testing**

Unit testing can be ran with `composer test`, `bin/dev/composer test` if using docker, or using `bin/dev/test` if you'd like
to customize your parameters to the unit test run in docker.  `bin/dev/test` is the recommended way (or using a PHPStorm integration).)

`npm run test` for Javascript tests, or `bin/dev/npm run test` inside of docker.

**IDE Helper**

`composer ide-helper-update`

**Lines of Code Generation**

`composer phploc` generates lines of code output in `docs/phploc.txt`

`npm run jsloc` generates lines of code output in `docs/jsloc.txt`

**PHP Linting**

`composer php-lint` will run PHPCS, PHP-Code-Sniffer (in Dry Run) and PHP Copy Paste Detector.

## Deployment 

There is a section of the composer file that has steps for deployment:

`composer deploy` will run Laravel config and route caching.

## Laravel Boot Automated Functions

- Install Laravel from the create-project format
- Copies over `.env.example` to `.env`

## Credits

This package is created and maintained by [Aaron Saray](https://github.com/aaronsaray) 

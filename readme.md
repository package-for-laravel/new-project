# Laravel Boot

My Laravel boot up framework that I use to scaffold projects.

## Development Notes

**Unit Testing**

`composer test` for tests

`composer test-coverage` to generate HTML coverage in `tests/html-coverage`

`vendor/bin/phpunit` to access it for specific reasons

**PHPStan / Larastan**

`./artisan code:analyse --level=max --paths="app,tests"`

**IDE Helper**

`composer ide-helper-update`

**PHPDoc Generation**

`composer phpdoc` generates documentation in `docs/phpdoc`

**PHP Lines of Code Generation**

`composer phploc` generates lines of code output in `docs/phploc.txt`

**PHP Copy Paste Detection**

`composer phpcpd` 

## Laravel Boot Automated Functions

- Install Laravel from the create-project format
- Git init local and git add all

## Extending / Recommendations

Creating an API?  Use `composer require --dev zircote/swagger-php` for OpenApi docs.

Need CORS? Try `composer require spatie/laravel-cors`

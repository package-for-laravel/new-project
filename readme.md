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

## Laravel Boot Automated Functions

- Install Laravel from the create-project format
- Git init local and git add all

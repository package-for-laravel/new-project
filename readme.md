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

**PHP Code Sniffer**

`composer phpcs` does a report to standard out based on PSR12

## Laravel Boot Automated Functions

- Install Laravel from the create-project format
- Git init local and git add all

## Extending / Recommendations

Creating an API?  Use `composer require --dev zircote/swagger-php` for OpenApi docs.

Need CORS? Try `composer require spatie/laravel-cors`

## Todo

- [ ] Figure out how to add git init / add properly after all install - but only the first time.
- [ ] `"@php -r \"require 'vendor/autoload.php'; file_put_contents('readme.md', PHP_EOL . '## Info' . PHP_EOL . PHP_EOL . 'Laravel Boot Version: ' . \\PackageVersions\\Versions::getVersion('aaronsaray/laravel-boot') . PHP_EOL, FILE_APPEND);\"",`  Can this be used somewhere?
       

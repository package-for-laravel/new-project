<?php
/**
 * The bootstrap file for PHP Unit
 */
declare(strict_types=1);

use Illuminate\Contracts\Console\Kernel;

require __DIR__ . '/../vendor/autoload.php';

$commands = [
    'config:cache',
    'event:cache',
];

$app = require __DIR__.'/../bootstrap/app.php';

$console = tap($app->make(Kernel::class))->bootstrap();

foreach ($commands as $command) {
    $console->call($command);
}

/**
 * Get the helpers for mockery
 */
Mockery::globalHelpers();

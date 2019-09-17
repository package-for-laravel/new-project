<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->exclude('*/bootstrap/cache/*')
    ->exclude('*/tests/html-coverage/*')
    ->notPath('vendor')
    ->in('app')
    ->in('bootstrap')
    ->in('config')
    ->in('database/factories')
    ->in('routes')
    ->in('tests')
    ->name('*.php');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'is_null' => true,
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'lowercase_cast' => true,
        'lowercase_static_reference' => true,
        'modernize_types_casting' => true,
        'native_function_casing' => true,
        'new_with_braces' => true,
        'no_unused_imports' => true,
        'ordered_imports' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder);

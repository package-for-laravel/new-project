<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->in('app')
    ->in('bootstrap')
    ->in('config')
    ->in('database/factories')
    ->in('routes')
    ->in('tests')
    ->exclude('cache')
    ->name('*.php');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'blank_line_after_opening_tag' => true,
        'compact_nullable_typehint' => true,
        'declare_equal_normalize' => ['space' => 'none'],
        'declare_strict_types' => true,
        'function_typehint_space' => true,
        'is_null' => true,
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'lowercase_cast' => true,
        'lowercase_static_reference' => true,
        'modernize_types_casting' => true,
        'native_function_casing' => true,
        'new_with_braces' => true,
        'no_empty_statement' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_unused_imports' => true,
        'no_whitespace_in_blank_line' => true,
        'ordered_imports' => true,
        'return_type_declaration' => ['space_before' => 'none'],
    ])
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setFinder($finder);

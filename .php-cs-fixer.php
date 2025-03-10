<?php

$rules = [
    '@PSR12' => true,
    'class_definition' => [
        'multi_line_extends_each_single_line' => true,
        'single_item_single_line' => true,
        'single_line' => true,
        'space_before_parenthesis' => false,
        'inline_constructor_arguments' => false,
    ],
    'no_extra_blank_lines' => [
        'tokens' => [
            'curly_brace_block',
            'extra',
            'parenthesis_brace_block',
            'square_brace_block',
            'throw',
            'use',
            'case',
            'default',
        ],
    ],
    'class_attributes_separation' => [
        'elements' => [
            'const' => 'one',
            'method' => 'one',
            'property' => 'one',
            'trait_import' => 'none',
            'case' => 'none',
        ],
    ],
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'blank_line_after_namespace' => true,
    'blank_line_after_opening_tag' => false,
    'single_blank_line_at_eof' => true,
    'blank_line_between_import_groups' => true,
    'single_import_per_statement' => true,
    'no_unused_imports' => true,
    'ordered_imports' => ['sort_algorithm' => 'alpha'],
    'single_space_around_construct' => true,
    'control_structure_braces' => true,
    'function_declaration' => [
        'closure_function_spacing' => 'none',
    ],
    'binary_operator_spaces' => [
        'default' => 'single_space',
        'operators' => [
            '=>' => 'single_space',
            '=' => 'single_space',
        ],
    ],
    'concat_space' => [
        'spacing' => 'none',
    ],
    'method_chaining_indentation' => true,
    'array_indentation' => true,
    'array_syntax' => ['syntax' => 'short'],
    'no_multiple_statements_per_line' => true,
    'no_trailing_comma_in_singleline' => true,
    'trailing_comma_in_multiline' => true,
    'whitespace_after_comma_in_array' => true,
];

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new PhpCsFixer\Config())
    ->setRules($rules)
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
    ->setCacheFile(__DIR__.'/.php-cs-fixer.cache');

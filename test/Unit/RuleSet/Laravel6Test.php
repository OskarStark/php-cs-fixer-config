<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019-2020 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/php-cs-fixer-config
 */

namespace Ergebnis\PhpCsFixer\Config\Test\Unit\RuleSet;

/**
 * @internal
 *
 * @covers \Ergebnis\PhpCsFixer\Config\RuleSet\AbstractRuleSet
 * @covers \Ergebnis\PhpCsFixer\Config\RuleSet\Laravel6
 */
final class Laravel6Test extends AbstractRuleSetTestCase
{
    protected $name = 'Laravel 6 (PHP 7.2)';

    protected $rules = [
        '@PSR2' => true,
        'align_multiline_comment' => false,
        'array_indentation' => false,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'backtick_to_shell_exec' => false,
        'binary_operator_spaces' => [
            'default' => 'single_space',
            'operators' => [
                '=>' => null,
            ],
        ],
        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
        'blank_line_before_return' => false,
        'blank_line_before_statement' => [
            'statements' => [
                'return',
            ],
        ],
        'braces' => true,
        'cast_spaces' => true,
        'class_attributes_separation' => [
            'elements' => [
                'method',
            ],
        ],
        'class_definition' => true,
        'class_keyword_remove' => false,
        'combine_consecutive_issets' => false,
        'combine_consecutive_unsets' => false,
        'combine_nested_dirname' => false,
        'comment_to_phpdoc' => false,
        'compact_nullable_typehint' => false,
        'concat_space' => [
            'spacing' => 'none',
        ],
        'date_time_immutable' => false,
        'declare_equal_normalize' => true,
        'declare_strict_types' => false,
        'dir_constant' => false,
        'doctrine_annotation_array_assignment' => false,
        'doctrine_annotation_braces' => false,
        'doctrine_annotation_indentation' => false,
        'doctrine_annotation_spaces' => false,
        'elseif' => true,
        'encoding' => true,
        'ereg_to_preg' => false,
        'error_suppression' => false,
        'escape_implicit_backslashes' => false,
        'explicit_indirect_variable' => false,
        'explicit_string_variable' => false,
        'final_class' => false,
        'final_internal_class' => false,
        'final_public_method_for_abstract_class' => false,
        'final_static_access' => false,
        'fopen_flag_order' => false,
        'fopen_flags' => false,
        'full_opening_tag' => true,
        'fully_qualified_strict_types' => true, // added by Shift
        'function_declaration' => true,
        'function_to_constant' => false,
        'function_typehint_space' => true,
        'general_phpdoc_annotation_remove' => false,
        'global_namespace_import' => false,
        'hash_to_slash_comment' => false,
        'header_comment' => false,
        'heredoc_indentation' => false,
        'heredoc_to_nowdoc' => true,
        'implode_call' => false,
        'include' => true,
        'increment_style' => ['style' => 'post'],
        'indentation_type' => true,
        'is_null' => false,
        'line_ending' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => false,
        'logical_operators' => false,
        'lowercase_cast' => true,
        'lowercase_constants' => true,
        'lowercase_keywords' => true,
        'lowercase_static_reference' => true, // added from Symfony
        'magic_constant_casing' => true,
        'magic_method_casing' => true, // added from Symfony
        'mb_str_functions' => false,
        'method_argument_space' => true,
        'method_chaining_indentation' => false,
        'method_separation' => false,
        'modernize_types_casting' => false,
        'multiline_comment_opening_closing' => false,
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'native_constant_invocation' => false,
        'native_function_casing' => true,
        'native_function_invocation' => false,
        'native_function_type_declaration_casing' => false,
        'new_with_braces' => false,
        'no_alias_functions' => true,
        'no_alternative_syntax' => false,
        'no_binary_string' => false,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_blank_lines_before_namespace' => false,
        'no_closing_tag' => true,
        'no_empty_comment' => false,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'extra',
                'throw',
                'use',
                'use_trait',
            ],
        ],
        'no_extra_consecutive_blank_lines' => false,
        'no_homoglyph_names' => false,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => [
            'use' => 'echo',
        ],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_multiline_whitespace_before_semicolons' => false,
        'no_null_property_initialization' => false,
        'no_php4_constructor' => false,
        'no_short_bool_cast' => true,
        'no_short_echo_tag' => false,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_after_function_name' => true,
        'no_spaces_around_offset' => true,
        'no_spaces_inside_parenthesis' => true,
        'no_superfluous_elseif' => false,
        'no_superfluous_phpdoc_tags' => false,
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_trailing_whitespace' => true,
        'no_trailing_whitespace_in_comment' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unneeded_curly_braces' => false,
        'no_unneeded_final_method' => false,
        'no_unreachable_default_argument_value' => true,
        'no_unset_cast' => false,
        'no_unset_on_property' => false,
        'no_unused_imports' => false,
        'no_useless_else' => false,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'non_printable_character' => false,
        'normalize_index_brace' => true,
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => true,
        'nullable_type_declaration_for_default_null_value' => false,
        'object_operator_without_whitespace' => true,
        'ordered_class_elements' => false,
        'ordered_imports' => [
            'sortAlgorithm' => 'alpha',
        ],
        'ordered_interfaces' => false,
        'php_unit_construct' => false,
        'php_unit_dedicate_assert' => false,
        'php_unit_dedicate_assert_internal_type' => false,
        'php_unit_expectation' => false,
        'php_unit_fqcn_annotation' => false,
        'php_unit_internal_class' => false,
        'php_unit_method_casing' => false,
        'php_unit_mock' => false,
        'php_unit_mock_short_will_return' => false,
        'php_unit_namespaced' => false,
        'php_unit_no_expectation_annotation' => false,
        'php_unit_ordered_covers' => false,
        'php_unit_set_up_tear_down_visibility' => false,
        'php_unit_size_class' => false,
        'php_unit_strict' => false,
        'php_unit_test_annotation' => false,
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'self',
        ],
        'php_unit_test_class_requires_covers' => false,
        'phpdoc_add_missing_param_annotation' => false,
        'phpdoc_align' => false,
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag' => true,
        'phpdoc_line_span' => false,
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => false,
        'phpdoc_no_empty_return' => false,
        'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order' => false,
        'phpdoc_return_self_reference' => false,
        'phpdoc_scalar' => true,
        'phpdoc_separation' => false,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_to_param_type' => false,
        'phpdoc_to_return_type' => false,
        'phpdoc_trim' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => false,
        'phpdoc_types' => true,
        'phpdoc_types_order' => false,
        'phpdoc_var_annotation_correct_order' => false,
        'phpdoc_var_without_name' => true,
        'pow_to_exponentiation' => false,
        'pre_increment' => false,
        'protected_to_private' => false,
        'psr0' => false,
        'psr4' => true,
        'random_api_migration' => false,
        'return_assignment' => false,
        'return_type_declaration' => false,
        'self_accessor' => true,
        'self_static_accessor' => false,
        'semicolon_after_instruction' => false,
        'set_type_to_cast' => false,
        'short_scalar_cast' => true,
        'silenced_deprecation_error' => false,
        'simple_to_complex_string_variable' => false,
        'simplified_null_return' => true,
        'single_blank_line_at_eof' => true,
        'single_blank_line_before_namespace' => true,
        'single_class_element_per_statement' => true,
        'single_import_per_statement' => true,
        'single_line_after_imports' => true,
        'single_line_comment_style' => [
            'comment_types' => [
                'hash',
            ],
        ],
        'single_line_throw' => false,
        'single_quote' => true,
        'single_trait_insert_per_statement' => false,
        'space_after_semicolon' => true,
        'standardize_increment' => false,
        'standardize_not_equals' => true,
        'static_lambda' => false,
        'strict_comparison' => false,
        'strict_param' => false,
        'string_line_ending' => false,
        'switch_case_semicolon_to_colon' => true,
        'switch_case_space' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => false,
        'trailing_comma_in_multiline_array' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'visibility_required' => [
            'elements' => [
                'method',
                'property',
            ],
        ],
        'void_return' => false,
        'whitespace_after_comma_in_array' => true,
        'yoda_style' => false,
    ];

    protected $targetPhpVersion = 70200;
}

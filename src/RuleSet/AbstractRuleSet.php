<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019-2023 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/php-cs-fixer-config
 */

namespace Ergebnis\PhpCsFixer\Config\RuleSet;

use Ergebnis\PhpCsFixer\Config\RuleSet;

/**
 * @internal
 */
abstract class AbstractRuleSet implements RuleSet
{
    /**
     * A list of tags that should be ignored by fixers related to Doctrine.
     *
     * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v3.1.0/doc/rules/doctrine_annotation/doctrine_annotation_array_assignment.rst
     * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v3.1.0/doc/rules/doctrine_annotation/doctrine_annotation_braces.rst
     * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v3.1.0/doc/rules/doctrine_annotation/doctrine_annotation_indentation.rst
     * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v3.1.0/doc/rules/doctrine_annotation/doctrine_annotation_spaces.rst
     */
    protected const DOCTRINE_IGNORED_TAGS = [
        'abstract',
        'access',
        'after',
        'afterClass',
        'api',
        'author',
        'backupGlobals',
        'backupStaticAttributes',
        'before',
        'beforeClass',
        'category',
        'code',
        'codeCoverageIgnore',
        'codeCoverageIgnoreEnd',
        'codeCoverageIgnoreStart',
        'copyright',
        'covers',
        'coversDefaultClass',
        'coversNothing',
        'dataProvider',
        'depends',
        'deprec',
        'deprecated',
        'encode',
        'enduml',
        'example',
        'exception',
        'expectedException',
        'expectedExceptionCode',
        'expectedExceptionMessage',
        'expectedExceptionMessageRegExp',
        'filesource',
        'final',
        'fix',
        'FIXME',
        'fixme',
        'global',
        'group',
        'ignore',
        'ingroup',
        'inheritdoc',
        'inheritDoc',
        'internal',
        'large',
        'license',
        'link',
        'magic',
        'medium',
        'method',
        'name',
        'noinspection',
        'override',
        'package',
        'package_version',
        'param',
        'preserveGlobalState',
        'private',
        'property',
        'property-read',
        'property-write',
        'requires',
        'return',
        'runInSeparateProcess',
        'runTestsInSeparateProcesses',
        'see',
        'since',
        'small',
        'source',
        'startuml',
        'static',
        'staticvar',
        'staticVar',
        'subpackage',
        'SuppressWarnings',
        'template',
        'test',
        'testdox',
        'throw',
        'throws',
        'ticket',
        'toc',
        'todo',
        'TODO',
        'tutorial',
        'usedBy',
        'uses',
        'uses',
        'var',
        'version',
    ];
    protected string $name = '';

    /**
     * @var array<string, array<string, mixed>|bool>
     */
    protected array $rules = [];
    protected int $targetPhpVersion = 0;

    final public function __construct(?string $header = null)
    {
        if (null === $header) {
            return;
        }

        $this->rules['header_comment'] = [
            'comment_type' => 'PHPDoc',
            'header' => \trim($header),
            'location' => 'after_declare_strict',
            'separate' => 'both',
        ];
    }

    final public function name(): string
    {
        return $this->name;
    }

    final public function rules(): array
    {
        return $this->rules;
    }

    final public function targetPhpVersion(): int
    {
        return $this->targetPhpVersion;
    }
}

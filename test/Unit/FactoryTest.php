<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019-2021 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/php-cs-fixer-config
 */

namespace Ergebnis\PhpCsFixer\Config\Test\Unit;

use Ergebnis\PhpCsFixer\Config;
use Ergebnis\Test\Util;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Ergebnis\PhpCsFixer\Config\Factory
 */
final class FactoryTest extends Framework\TestCase
{
    use Util\Helper;

    public function testFromRuleSetThrowsRuntimeExceptionIfCurrentPhpVersionIsLessThanTargetPhpVersion(): void
    {
        $targetPhpVersion = \PHP_VERSION_ID + 1;

        $ruleSet = new Config\Test\Double\Config\RuleSet\DummyRuleSet(
            self::faker()->word,
            [],
            $targetPhpVersion,
        );

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(\sprintf(
            'Current PHP version "%s" is less than targeted PHP version "%s".',
            \PHP_VERSION_ID,
            $targetPhpVersion,
        ));

        Config\Factory::fromRuleSet($ruleSet);
    }

    /**
     * @dataProvider provideTargetPhpVersion
     */
    public function testFromRuleSetCreatesConfig(int $targetPhpVersion): void
    {
        $rules = [
            'foo' => true,
            'bar' => [
                'baz',
            ],
        ];

        $ruleSet = new Config\Test\Double\Config\RuleSet\DummyRuleSet(
            self::faker()->word,
            $rules,
            $targetPhpVersion,
        );

        $config = Config\Factory::fromRuleSet($ruleSet);

        self::assertTrue($config->getUsingCache());
        self::assertTrue($config->getRiskyAllowed());
        self::assertSame($rules, $config->getRules());
    }

    /**
     * @return \Generator<int, array{0: int}>
     */
    public function provideTargetPhpVersion(): \Generator
    {
        $values = [
            \PHP_VERSION_ID - 1,
            \PHP_VERSION_ID,
        ];

        foreach ($values as $value) {
            yield [
                $value,
            ];
        }
    }

    public function testFromRuleSetCreatesConfigWithOverrideRules(): void
    {
        $rules = [
            'foo' => true,
            'bar' => [
                'baz',
            ],
        ];

        $ruleSet = new Config\Test\Double\Config\RuleSet\DummyRuleSet(
            self::faker()->word,
            $rules,
            \PHP_VERSION_ID,
        );

        $overrideRules = [
            'foo' => false,
        ];

        $config = Config\Factory::fromRuleSet(
            $ruleSet,
            $overrideRules,
        );

        self::assertTrue($config->getUsingCache());
        self::assertTrue($config->getRiskyAllowed());
        self::assertEquals(\array_merge($rules, $overrideRules), $config->getRules());
    }
}

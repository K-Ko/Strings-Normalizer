<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Strings\StringHelper;

final class UpperCamelCaseTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testUpperCamelCase(string $string, string $expected): void
    {
        $this->assertSame($expected, StringHelper::toUpperCamelCase($string));
    }

    public function dataProvider(): array
    {
        return [
            ['lower', 'Lower'],
            ['lower and lower', 'LowerAndLower'],
            ['UPPER', 'Upper'],
            ['UPPER AND UPPER', 'UpperAndUpper'],
            ['mixed lower', 'MixedLower'],
            ['mixed UPPER', 'MixedUpper'],
            ['MiXeD Data a', 'MixedDataA'],
            ['a String !', 'AString'],
            ['a 2 string string', 'A2StringString'],
            ['a 2string string', 'A2stringString'],
            ['a 2String string', 'A2stringString'],
        ];
    }
}

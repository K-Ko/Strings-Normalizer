<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Strings\StringHelper;

final class CamelCaseTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testCamelCase(string $string, string $expected): void
    {
        $this->assertSame($expected, StringHelper::toCamelCase($string));
    }

    public function dataProvider(): array
    {
        return [
            ['lower', 'lower'],
            ['lower and lower', 'lowerAndLower'],
            ['UPPER', 'upper'],
            ['UPPER AND UPPER', 'upperAndUpper'],
            ['mixed lower', 'mixedLower'],
            ['mixed UPPER', 'mixedUpper'],
            ['MiXeD Data', 'mixedData'],
            ['a String !', 'aString'],
            ['a 2 string string', 'a2StringString'],
        ];
    }
}

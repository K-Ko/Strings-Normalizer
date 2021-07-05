<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Strings\StringHelper;

final class UppercaseTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testUppercase(string $string, string $expected): void
    {
        $this->assertSame($expected, StringHelper::toUppercase($string));
    }

    public function dataProvider(): array
    {
        return [
            ['lower', 'LOWER'],
            ['lower and lower', 'LOWERANDLOWER'],
            ['UPPER', 'UPPER'],
            ['UPPER AND UPPER', 'UPPERANDUPPER'],
            ['mixed lower', 'MIXEDLOWER'],
            ['mixed UPPER', 'MIXEDUPPER'],
            ['MiXeD Data', 'MIXEDDATA'],
            ['a String !', 'ASTRING'],
            ['a 2 string string', 'A2STRINGSTRING'],
        ];
    }
}

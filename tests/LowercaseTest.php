<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Strings\StringHelper;

final class LowercaseTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testLowercase(string $string, string $expected): void
    {
        $this->assertSame($expected, StringHelper::toLowercase($string));
    }

    public function dataProvider(): array
    {
        return [
            ['lower', 'lower'],
            ['lower and lower', 'lowerandlower'],
            ['UPPER', 'upper'],
            ['UPPER AND UPPER', 'upperandupper'],
            ['mixed lower', 'mixedlower'],
            ['mixed UPPER', 'mixedupper'],
            ['MiXeD Data', 'mixeddata'],
            ['a String !', 'astring'],
            ['a 2 string string', 'a2stringstring'],
        ];
    }
}

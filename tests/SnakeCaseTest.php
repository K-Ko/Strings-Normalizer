<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Strings\StringHelper;

final class SnakeCaseTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testLowercase(string $string, string $expected): void
    {
        $this->assertSame($expected, StringHelper::toSnakeCase($string));
    }

    public function dataProvider(): array
    {
        return [
            ['lower', 'lower'],
            ['lower and lower', 'lower_and_lower'],
            ['UPPER', 'upper'],
            ['UPPER AND UPPER', 'upper_and_upper'],
            ['mixed lower', 'mixed_lower'],
            ['mixed UPPER', 'mixed_upper'],
            ['MiXeD Data', 'mixed_data'],
            ['a String !', 'a_string'],
            ['a 2 string string', 'a_2_string_string'],
        ];
    }
}

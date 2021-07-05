<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Strings\StringHelper;

final class SlugifyTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSlugify(string $string, string $expected): void
    {
        $this->assertSame($expected, StringHelper::slugify($string));
    }

    public function dataProvider(): array
    {
        return [
            ['lower', 'lower'],
            ['lower and lower', 'lower-and-lower'],
            ['UPPER', 'upper'],
            ['UPPER AND UPPER', 'upper-and-upper'],
            ['mixed lower', 'mixed-lower'],
            ['mixed UPPER', 'mixed-upper'],
            ['MiXeD Data 1', 'mixed-data-1'],
            ['a String !', 'a-string'],
            ['a String & another string', 'a-string-and-another-string'],
            ['a 2 string string', 'a-2-string-string'],
            ['String @ test', 'string-at-test'],
            ['und daß ?', 'und-dass'],
            ['g++', 'g-plus-plus'],
            ['C#', 'c-sharp'],
        ];
    }
}

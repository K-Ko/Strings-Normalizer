<?php

namespace Strings;

class StringHelper
{
    public static function toLowercase(string $string): string
    {
        return strtolower(str_replace(' ', '', self::clean($string)));
    }

    public static function toUppercase(string $string): string
    {
        return strtoupper(str_replace(' ', '', self::clean($string)));
    }

    public static function toCamelCase(string $string): string
    {
        $string = strtolower(self::clean($string));
        $string = preg_replace_callback('~(?: )(.)~', function ($s) {
            return strtoupper($s[1]);
        }, $string);

        return str_replace(' ', '', $string);
    }

    public static function toUpperCamelCase(string $string): string
    {
        $string = strtolower(self::clean($string));

        return str_replace(' ', '', ucwords(self::clean($string)));
    }

    public static function toSnakeCase(string $string): string
    {
        return strtolower(str_replace(' ', '_', self::clean($string)));
    }

    public static function slugify(string $string): string
    {
        // Does not work with preg_replace()
        $string = str_replace('ß', 'ss', $string);

        foreach (self::$slugMapping as $replacement => $search) {
            $string = preg_replace('~[' . $search . ']~', $replacement, $string);
        }

        return strtolower(preg_replace('~  *~', '-', self::clean($string)));
    }

    protected static $slugMapping = [
        'at' => '@',
        'and' => '&',
        ' plus' => '+',
        ' sharp' => '#',
        'a' => 'àåáâäãåą',
        'c' => 'çćčĉ',
        'd' => 'đ',
        'e' => 'èéêëę',
        'g' => 'ğĝ',
        'h' => 'ĥ',
        'i' => 'ìíîïı',
        'j' => 'ĵ',
        'l' => 'ł',
        'n' => 'ñń',
        'o' => 'òóôõöøőð',
        'r' => 'ř',
        's' => 'śşšŝ',
        'th' => 'Þ',
        'u' => 'ùúûüŭů',
        'y' => 'ýÿ',
        'z' => 'żźž',
    ];

    protected static function clean(string $string): string
    {
        // Also remove underscores
        return trim(preg_replace('~[^a-z0-9 ]+~i', ' ', $string));
    }
}

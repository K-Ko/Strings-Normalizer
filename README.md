# K-Ko/Strings-Normalizer

## Helper to normalize strings

### Methods

**All methods preserves letters and numbers only.**

    # All lowercase, nur buchstaben und ziffern, remove spaces, underscores
    public static function toLowercase(string $string): string

    # All uppercase, remove spaces, underscores
    public static function toUppercase(string $string): string

    # lowerCamelCase
    public static function toCamelCase(string $string): string

    # UpperCamelCase
    public static function toUpperCamelCase(string $string): string

    # snake_case
    public static function toSnakeCase(string $string): string

    # slugify-a-string
    public static function slugify(string $string): string

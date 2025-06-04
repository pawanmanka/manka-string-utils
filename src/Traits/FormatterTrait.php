<?php 
namespace StringUtils\Traits;

trait FormatterTrait
{
    public function toCamelCase(string $input): string
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $input))));
    }

    public function slugify(string $input): string
    {
        return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $input));
    }

    public function contains(string $haystack, string $needle): bool
    {
        return str_contains($haystack, $needle);
    }
}



?>
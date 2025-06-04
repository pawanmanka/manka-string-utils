<?php 
namespace StringUtils\Contracts;

interface StringHelperInterface
{
    public function toCamelCase(string $input): string;

    public function slugify(string $input): string;

    public function sanitize(string $input): string;
}

?>
<?php 
namespace StringUtils\Traits;

trait SanitizerTrait
{
    public function sanitize(string $input): string
    {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
}


?>
<?php 

namespace StringUtils;

use StringUtils\Traits\FormatterTrait;
use StringUtils\Traits\SanitizerTrait;
use StringUtils\Contracts\StringHelperInterface;

class StringUtils implements StringHelperInterface
{
    use FormatterTrait, SanitizerTrait;
}


?>
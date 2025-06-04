<?php 
use PHPUnit\Framework\TestCase;
use StringUtils\StringUtils;

class StringUtilsTest extends TestCase
{
    public function testSlugify()
    {
        $util = new StringUtils();
        $this->assertEquals('hello-world', $util->slugify('Hello World!'));
    }
    public function testContains()
    {
        $util = new StringUtils();
        $this->assertTrue($util->contains('Hello World', 'lo Wo'));
    }
}

?>
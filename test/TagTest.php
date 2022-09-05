<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Osynapsy\Html\Tag;

final class TagTest extends TestCase
{
    public function testTag(): void
    {
        $div = new Tag('div', 'test', 'testClass');
        $this->assertEquals('<div id="test" class="testClass"></div>', (string) $div);
    }

    public function testTagDoubleBuild(): void
    {
        $div = new Tag('div', 'test', 'testClass');
        $div->get();
        $this->assertEquals('<div id="test" class="testClass"></div>', (string) $div);
    }

    public function testTagGetTag(): void
    {
        $div = new Tag('div', 'test', 'testClass');
        $div->get();
        $this->assertEquals('div', $div->getTag());
    }

    public function testTagParent(): void
    {
        $parent = new Tag('div', 'parent');
        $child = $parent->add(new Tag('div', 'child'));
        $this->assertEquals($parent, $child->getParent());
    }
}

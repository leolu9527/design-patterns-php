<?php

use PHPUnit\Framework\TestCase;
use App\AbstractFactory\HtmlFactory;
use App\AbstractFactory\JsonFactory;
use App\AbstractFactory\HtmlText;
use App\AbstractFactory\JsonText;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(HtmlText::class, $text);
    }

    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(JsonText::class, $text);
    }
}
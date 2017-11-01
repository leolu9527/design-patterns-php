<?php
/**
 * Created by PhpStorm.
 * User: waitfor9527
 * Date: 2017/10/31
 * Time: 下午10:22
 */

namespace App\Controllers;

use App\AbstractFactory\HtmlFactory;
use App\AbstractFactory\JsonFactory;

class AbstractFactoryTest
{
    public function test()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');
        var_dump($text);

        $factory = new JsonFactory();
        $text = $factory->createText('foobar');
        var_dump($text);
    }
}
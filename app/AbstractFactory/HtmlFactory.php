<?php
/**
 * Created by PhpStorm.
 * User: waitfor9527
 * Date: 2017/10/31
 * Time: 下午10:14
 */

namespace App\AbstractFactory;

use App\AbstractFactory\AbstractFactory;

class HtmlFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new HtmlText($content);
    }
}
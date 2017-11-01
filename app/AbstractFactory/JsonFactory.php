<?php
/**
 * Created by PhpStorm.
 * User: waitfor9527
 * Date: 2017/10/31
 * Time: 下午10:12
 */

namespace App\AbstractFactory;

use App\AbstractFactory\AbstractFactory;

class JsonFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new JsonText($content);
    }
}
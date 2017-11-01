<?php
/**
 * Created by PhpStorm.
 * User: waitfor9527
 * Date: 2017/10/31
 * Time: 下午10:15
 */

namespace App\AbstractFactory;


class Text
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
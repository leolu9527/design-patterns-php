<?php
/**
 * 抽象工厂
 * User: waitfor9527
 * Date: 2017/10/31
 * Time: 下午10:10
 */

namespace App\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createText(string $content): Text;
}
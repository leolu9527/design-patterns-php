<?php
/**
 * 简单工厂
 * User: waitfor9527
 */

namespace App\SimpleFactory;

use App\SimpleFactory\Bicycle;

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
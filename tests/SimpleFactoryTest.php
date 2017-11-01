<?php
/**
 * Created by PhpStorm.
 * User: waitfor9527
 * Date: 2017/11/1
 * Time: 下午2:24
 */

use PHPUnit\Framework\TestCase;
use App\SimpleFactory\SimpleFactory;
use App\SimpleFactory\Bicycle;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $factory = new SimpleFactory();
        $b = $factory->createBicycle();

        $this->assertInstanceOf(Bicycle::class, $b);
    }
}
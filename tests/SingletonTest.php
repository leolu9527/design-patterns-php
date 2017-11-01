<?php
/**
 * test Singleton
 * User: waitfor9527
 * Date: 2017/11/1
 * Time: 下午3:28
 */
use PHPUnit\Framework\TestCase;
use App\Singleton\Singleton;

class SingletonTest extends TestCase
{
    // 测试唯一性
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
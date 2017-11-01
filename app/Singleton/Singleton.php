<?php
/**
 * 单例模式
 * User: waitfor9527
 * Date: 2017/9/4
 * Time: 上午00:24
 */

namespace App\Singleton;


class Singleton
{
    private static $instance;

    // 禁止外部实例化
    private function __construct()
    {

    }

    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {
    }
}
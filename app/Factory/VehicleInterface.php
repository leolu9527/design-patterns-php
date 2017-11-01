<?php
/**
 * 工厂模式
 * 交通工具
 * User: waitfor9527
 * Date: 2017/11/1
 * Time: 上午9:23
 */

namespace App\Factory;



interface VehicleInterface
{
    //几个座位
    public function setSeat(int $num);
}
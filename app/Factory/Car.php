<?php
/**
 * Created by PhpStorm.
 * User: waitfor9527
 * Date: 2017/11/1
 * Time: 上午10:01
 */

namespace App\Factory;

use App\Factory\VehicleInterface;

class Car implements VehicleInterface
{
    private $seat;

    public function setSeat(int $num)
    {
        $this->seat = $num;
    }

}
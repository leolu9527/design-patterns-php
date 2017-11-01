<?php
/**
 * Created by PhpStorm.
 * User: waitfor9527
 * Date: 2017/10/30
 * Time: 上午11:17
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
    debug(Macaw::$routes);
});

// 抽象工厂
Macaw::get('/AbstractFactory', 'App\Controllers\AbstractFactoryTest@test');

Macaw::dispatch();
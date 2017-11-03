<?php
/**
 * 适配器模式
 */

namespace App\Adapter;


interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}